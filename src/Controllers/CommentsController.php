<?php
namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
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
	 * @param Requests\CommentFormRequest|Request $request
	 * @return Response
	 */
	public function store(Request $request) {
		$comment = new Models\Comment;
		$comment->content = $request->get('content');
		$comment->ticket_id = $request->get('ticket_id');
		$comment->user_id = \Auth::user()->id;
		$comment->save();

		$ticket = Models\Ticket::find($comment->ticket_id);
		$ticket->updated_at = $comment->created_at;
		$ticket->save();

		return back()->with('status', 'Comment has been added successfully');
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
