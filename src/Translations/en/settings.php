<?php

/*
 * Setting descriptions
 *
 * See Seeds/SettingsTableSeeder.php
 */

$codemirrorVersion = Kordy\Ticketit\Helpers\Cdn::CodeMirror;
$summernoteVersion = Kordy\Ticketit\Helpers\Cdn::Summernote;

return [

    'main_route' => '<p><b>Ticketit main route</b>: Where to load the ticket system (ex. <code>http://url/tickets</code>)</p>', 'admin_route' => '<p><b>Ticketit admin route</b>: Where to load the ticket administration dashboard (ex. <code>http://url/tickets-admin</code>)</p>', 'master_template' => '<p><b>Template adherence</b>: The master blade template to be extended</p>', 'email.template' => '<p><b>Template adherence</b>: The email blade template to be extended</p>', 'email.header' => '<p><img src="http://i.imgur.com/5aJjuZL.jpg"/></p>', 'email.signoff' => '<p><img src="http://i.imgur.com/jONMwgF.jpg"/></p>', 'email.signature' => '<p><img src="http://i.imgur.com/coi3R63.jpg"/></p>', 'email.dashboard' => '<p><img src="http://i.imgur.com/qzNzJD4.jpg"/></p>', 'email.google_plus_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/fzyxfSg.jpg"/></p>', 'email.facebook_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/FQQzr98.jpg"/></p>', 'email.twitter_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/5JmkrF1.jpg"/></p>', 'email.footer' => '', 'email.footer_link' => '', 'email.color_body_bg' => '<p><img src="http://i.imgur.com/KTF7rEJ.jpg"/></p>', 'email.color_header_bg' => '<p><img src="http://i.imgur.com/wenw5H5.jpg"/></p>', 'email.color_content_bg' => '<p><img src="http://i.imgur.com/7r8dAFj.jpg"/></p>', 'email.color_footer_bg' => '<p><img src="http://i.imgur.com/KTjkdSN.jpg"/></p>', 'email.color_button_bg' => '<p><img src="http://i.imgur.com/0TbGIyt.jpg"/></p>', 'default_status_id' => '<p>The default status for new created tickets</p>', 'default_close_status_id' => '<p>The default closing status</p>', 'default_reopen_status_id' => '<p>The default reopening status</p>', 'paginate_items' => '<p><b>Pagination length</b>: For standard pagination.</p>', 'length_menu' => '<p><b>Pagination length</b>: For tickets table</p>', 'status_notification' => <<<ENDHTML
			<p>
				<b>Status notification</b>: send email notification to ticket owner/agent when ticket status is changed
			</p>

			<p>
				Default is send notification: <code>1</code><br>
				Do not send notification: <code>0</code>
			</p>
ENDHTML

    , 'comment_notification' => <<<ENDHTML
			<p>
				<b>Comment notification</b>: Send notification when new comment is posted
			</p>

			<p>
				Default is send notification: <code>1</code><br>
				Do not send notification: <code>0</code>
			</p>
ENDHTML

    , 'queue_emails' => <<<ENDHTML
			<p>
				Use Queue method when sending emails (Mail::queue instead of Mail::send).
				Note that Mail::queue needs to be configured first <a target="_blank" href="http://laravel.com/docs/master/queues">http://laravel.com/docs/master/queues</a>
			</p>

			<p>
				Default is to not use queue: <code>0</code><br>
				Use queue: <code>1</code>
			</p>
ENDHTML

    , 'assigned_notification' => <<<ENDHTML
			<p><b>Agent notify</b>: To notify assigned agent (either auto or manual assignment) of new assigned or transferred tickets</p>

			<p>
				Not to notify agent: <code>0</code><br>
				Notify agent: <code>1</code>
			</p>
ENDHTML

    , 'agent_restrict' => <<<ENDHTML
			<p><b>Agent restrict</b>: Restrict agents access to only their assigned tickets</p>

			<p>
				Agent access only assigned tickets: <code>1</code>
			</p>
ENDHTML

    , 'close_ticket_perm' => '<p><b>Close Ticket Perm</b>: Who has a permission to close tickets</p>', 'reopen_ticket_perm' => '<p><b>Reopen Ticket Perm</b>: Who has a permission to reopen tickets</p>', 'delete_modal_type' => <<<ENDHTML
			<p><b>Delete Confirmation</b>: Choose which confirmation message type to use when confirming a deleting</p>

			<p>Options: <code>builtin</code>, <code>modal</code></p>
ENDHTML

    /* ------------------ JS EDITOR ------------------ */, 'editor_enabled' => <<<ENDHTML
			<p>Enable summernote editor on textareas</p>

			<p>
				Disable: <code>0</code><br>
				Enable: <code>1</code>
			</p>
ENDHTML

    , 'include_font_awesome' => <<<ENDHTML
			<p>If Font-awesome css is included outside ticketit, this should be set to <code>0</code></p>

			<p>
				Don't include: <code>0</code><br>
				Include: <code>1</code>
			</p>
ENDHTML

    , 'summernote_locale' => <<<"ENDHTML"
			<p>
				Which language should summernote js texteditor use<br>
				If value is <code>laravel</code>, locale set in <code>config/app.php</code> will be used
			</p>

			<p>Example: <code>hu-HU</code> for Hungarian</p>

			<p>See available language codes <a target="_blank" href="https://cdnjs.com/libraries/summernote/$summernoteVersion">here</a></p>
ENDHTML

    , 'editor_html_highlighter' => <<<ENDHTML
			<p>Whether include codemirror sytax highlighter or not</p>

			<p><a target="_blank" href="http://summernote.org/examples/#codemirror-as-codeview">http://summernote.org/examples/#codemirror-as-codeview</a></p>

			<p>
				Don't include: <code>0</code><br>
				Include: <code>1</code>
			</p>
ENDHTML

    , 'codemirror_theme' => <<<ENDHTML
			<p>Theme for sytax highlighter</p>

			<p>Available themes <a target="_blank" href="https://cdnjs.com/libraries/codemirror/$codemirrorVersion">here</a></p>
ENDHTML

    , 'summernote_options_json_file' => <<<ENDHTML
			<p>
				Init values for summernote js texteditor in JSON<br>
				See avaiable options <a target="_blank" href="http://summernote.org/deep-dive/#initialization-options">here</a>
			</p>

			<p>This setting stores the path to the json config file, relative to project route</p>
ENDHTML

    , 'purifier_config' => <<<ENDHTML
			<p>Set which html tags are allowed</p>
			<p>
				This overrides the settings part of <a target="_blank" href="https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php">this file</a><br>
				The same config can be achived by running <code>php artisan vendor:publish</code> and modifying <code>config/purifier.php</code>
			</p>

			<p>Full docs: <a target="_blank" href="http://htmlpurifier.org/docs">http://htmlpurifier.org/docs</a></p>
ENDHTML

];
