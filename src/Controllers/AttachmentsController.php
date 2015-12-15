<?php

namespace Kordy\Ticketit\Controllers;

use Illuminate\Http\Request;
use Kordy\Ticketit\Models\Attachment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttachmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Allow Attachment Downloads
     */
    public function getAttachment($fileid){
        $attachment = Attachment::find($fileid);
        $file_path = storage_path().$attachment->filepath.$attachment->filename;
        if (file_exists($file_path))
        {
            //Send Download
            return response()->download($file_path, $attachment->original_filename, [
                'Content-Length: '.filesize($file_path)
            ]);
        }
        else
        {
            // Print Error
            exit('Requested file does not exist.');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
