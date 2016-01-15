<?php

namespace Kordy\Ticketit\Console;


use Illuminate\Console\Command;
use Kordy\Ticketit\Models\Comment;
use Kordy\Ticketit\Models\Ticket;

class Htmlify extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'ticketit:htmlify';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Copies column `content` to column `html` in comments and tickets tables while escaping and replacing new lines with <br> tags. Run this when upgrading from <=v0.2.2';



	public function __construct()
	{
		parent::__construct();


	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$tickets = Ticket::all();

		foreach($tickets as $ticket){
			if(!$ticket->html){
				$ticket->html = nl2br(e($ticket->content));
				$ticket->content = e($ticket->content);
				$ticket->save();
			}
		}

		$comments = Comment::all();

		foreach($comments as $comment){
			if(!$comment->html){
				$comment->html = nl2br(e($comment->content));
				$comment->content = e($comment->content);
				$comment->save();
			}
		}
	}
}