<?php
namespace Kordy\Ticketit\Controllers;

use Kordy\Ticketit\Models\Attachment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kordy\Ticketit\Requests\PrepareCommentStoreRequest;
use Kordy\Ticketit\Models;

class CommentsController extends Controller {

	public function __construct() {
		$this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['edit', 'update', 'destroy']]);
		$this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => 'store']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param PrepareCommentStoreRequest $request
	 * @return Response
	 */
	public function store(PrepareCommentStoreRequest $request) {
		$comment = new Models\Comment;

		$comment->setPurifiedContent($request->get('content'));

		$comment->ticket_id = $request->get('ticket_id');
		$comment->user_id = \Auth::user()->id;
		$comment->time_spent = $request->get('time_spent');
		$comment->private = $request->get('private');
		$comment->save();

		$ticket = Models\Ticket::find($comment->ticket_id);
		$ticket->updated_at = $comment->created_at;
		$ticket->save();

		if ($request->hasFile('file_upload')) {
			$file = $request->file('file_upload');
			$extension = $file->getClientOriginalExtension();
			$filename = $file->getFileName() . '.' . $extension;
			$filepath = '/app/attachments/'.$comment->user_id.'/';
			$file->move(storage_path().$filepath, $filename);

			$file_entry = new Attachment;
			$file_entry->mime = $file->getClientMimeType();
			$file_entry->original_filename = $file->getClientOriginalName();
			$file_entry->filename = $filename;
			$file_entry->filepath = $filepath;
			$file_entry->ticket_id = $comment->ticket_id;
			$file_entry->comment_id = $comment->id;
			$file_entry->save();
		}

        return back()->with('status', trans('ticketit::lang.comment-has-been-added-ok'));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
