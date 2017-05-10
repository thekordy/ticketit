<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Models\Setting;
use Log;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['edit', 'update', 'destroy']]);
        $this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ticket_id'   => 'required|exists:ticketit,id',
            'content'     => 'required|min:6',
            'attachments' => 'array',
        ]);

        DB::transaction(function () use ($request) {
            $comment = new Models\Comment();
            $comment->ticket_id = $request->get('ticket_id');
            $comment->user_id = \Auth::user()->id;
            $comment->setPurifiedContent($request->get('content'));
            $comment->save();

            /** @var Models\Ticket $ticket */
            $ticket = Models\Ticket::find($comment->ticket_id);
            $ticket->updated_at = $comment->created_at;
            $ticket->save();

            foreach ($request->attachments as $uploadedFile) {
                /** @var UploadedFile $uploadedFile */
                if (is_null($uploadedFile)) {
                    // No files attached
                    break;
                }

                if (!$uploadedFile instanceof UploadedFile) {
                    Log::error('File object expected, given: '.print_r($uploadedFile, true));
                    throw new InvalidArgumentException();
                }

                $attachments_path = Setting::grab('attachments_path');
                $file_name = auth()->user()->id.'_'.$comment->ticket_id.'_'.$comment->id.md5(Str::random().$uploadedFile->getClientOriginalName());
                $file_directory = storage_path($attachments_path);

                $attachment = new Models\Attachment();
                $attachment->ticket_id = $comment->ticket_id;
                $attachment->comment_id = $comment->id;
                $attachment->uploaded_by_id = $comment->user_id;
                $attachment->original_filename = $uploadedFile->getClientOriginalName() ?: '';
                $attachment->bytes = $uploadedFile->getSize();
                $attachment->mimetype = $uploadedFile->getMimeType() ?: '';
                $attachment->file_path = $file_directory.DIRECTORY_SEPARATOR.$file_name;
                $attachment->save();

                // Should be called when you no need anything from this file, otherwise it fails with Exception that file does not exists (old path being used)
                $uploadedFile->move(storage_path($attachments_path), $file_name);
            }
        });

        return back()->with('status', trans('ticketit::lang.comment-has-been-added-ok'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
