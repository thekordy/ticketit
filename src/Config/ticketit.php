<?php

return [

	/*
	 * Ticketit main route: Where to load the ticket system (ex. http://url/tickets)
	 * Default: /ticket
	 */
	'main_route' => 'tickets',

	/*
	 * Ticketit admin route: Where to load the ticket administration dashboard (ex. http://url/tickets-admin)
	 * Default: /ticket
	 */
	'admin_route' => 'tickets-admin',

	/*
	 * Template adherence: The master blade template to be extended
	 * Default: resources/views/master.blade.php
	 */
	'master_template' => 'master',

	/*
	 * The default status for new created tickets
	 * Default: 1
	 */
	'default_status_id' => 1,

	/*
	 * The default closing status
	 * Default: false
	 */
	'default_close_status_id' => 5,

	/*
	 * The default reopening status
	 * Default: false
	 */
	'default_reopen_status_id' => 1,

	/*
	 * User ids who are members of admin role
	 * Default: 1
	 */
	'admin_ids' => [1],

	/*
	 * Pagination length: For standard pagination.
	 * Default: 1
	 */
	'paginate_items' => 10,

	/*
	 * Pagination length: For tickets table.
	 * Default: 1
	 */
	'length_menu' => [[10, 50, 100], [10, 50, 100]],

	/*
	 * Status notification: send email notification to ticket owner/Agent when ticket status is changed
	 * Default is send notification: 'yes'
	 * Do not send notification: 'no'
	 */
	'status_notification' => 'yes',

	/*
	 * Comment notification: Send notification when new comment is posted
	 * Default is send notification: 'yes'
	 * Do not send notification: 'no'
	 */
	'comment_notification' => 'yes',

	/*
	 * Use Queue method when sending emails (Mail::queue instead of Mail::send). Note that Mail::queue needs to be
	 * configured first http://laravel.com/docs/5.1/queues
	 * Default is to not use queue: 'no'
	 * use queue: 'yes'
	 */
	'queue_emails' => 'no',

	/*
	 * Agent notify: To notify assigned agent (either auto or manual assignment) of new assigned or transferred tickets
	 * Default: 'yes'
	 * not to notify agent: 'no'
	 */
	'assigned_notification' => 'yes',

	/*
	 * Agent restrict: Restrict agents access to only their assigned tickets
	 * Default: 'no'
	 * Agent access only assigned tickets: 'yes'
	 */
	'agent_restrict' => 'no',

	/*
	 * Close Ticket Perm: Whose has a permission to close tickets
	 * Default: ['owner' => 'yes', 'agent' => 'yes', 'admin' => 'yes']
	 */
	'close_ticket_perm' => ['owner' => 'yes', 'agent' => 'yes', 'admin' => 'yes'],

	/*
	 * Reopen Ticket Perm: Whose has a permission to reopen tickets
	 * Default: ['owner' => 'yes', 'agent' => 'yes', 'admin' => 'yes']
	 */
	'reopen_ticket_perm' => ['owner' => 'yes', 'agent' => 'yes', 'admin' => 'yes'],

];
