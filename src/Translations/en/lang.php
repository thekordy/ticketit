<?php

return [
		// globals - used many times,
		'global_action' => 'Action',	
		'global_active' => 'Active',		
		'global_agent' => 'Agent',
		'global_agents' => 'Agents',			
		'global_all_tickets' => 'All Tickets',
		'global_back' => 'Back',
		'global_cancel' => 'Cancel',
		'global_categories' => 'Categories',		
		'global_category' => 'Category',
		'global_close' => 'Close',
		'global_colon' => ': ',
		'global_color' => 'Color',			
		'global_comments' => 'Comments',
		'global_complete' => 'Complete',		
		'global_created' => 'Created',
		'global_dashboard' => 'Dashboard',		
		'global_delete' => 'Delete',
		'global_description' => 'Description',
		'global_edit' => 'Edit',
		'global_exit' => 'Exit',
		'global_flash_x' => '×', // &times;
		'global_hash' => '#',
		'global_id' => 'ID',
		'global_join' => 'Join',
		'global_join_categories' => 'Join Categories',		
		'global_last_action' => 'Last Action',
		'global_last_update' => 'Last Update',
		'global_last_response' => 'Last Response',
		'global_mark_complete' => 'Mark Complete',		
		'global_my_tickets' => 'My Tickets',
		'global_name' => 'Name',		
		'global_no_replies' => 'No replies.',			
		'global_owner' => 'Owner',
		'global_pending' => 'Pending',
		'global_priorities' => 'Priorities',
		'global_priority' => 'Priority',
		'global_update' => 'Update',
		'global_user' => 'User',
		'global_remove' => 'Remove',	
		'global_remove_from_agents' => 'Remove from agents',		
		'global_reopen_ticket' => 'Reopen Ticket',
		'global_reply' => 'Reply',
		'global_resolved' => 'Resolved',
		'global_responsible' => 'Responsible',
		'global_status' => 'Status',
		'global_statuses' => 'Statuses',		
		'global_subject' => 'Subject',
		'global_submit' => 'Submit',
		'global_ticket' => 'Ticket',
		'global_tickets' => 'Tickets',
		'global_title' => 'Title',

		// index.blade.php
		'index_title' => 'Helpdesk main page',
		'index_active_check' => 'Be sure to check Active Tickets if you cannot find your ticket.',
		'index_active_none' => 'There are no active tickets,',
		'index_complete_check' => 'Be sure to check Complete Tickets if you cannot find your ticket.',
		'index_complete_none' => 'There are no complete tickets',

		// tickets/index.blade.php
		'index_tickets_new' => 'New Ticket',
		'index_tickets_none' => 'There are no tickets,',
		'index_tickets_create' => 'create new ticket',
		
		// tickets/create.blade.php
		'create_ticket_title' => 'New Ticket Form',
		'create_ticket_new' => 'Create New Ticket',
		'create_ticket_brief_issue' => 'A brief of your issue ticket',
		'create_ticket_describe_issue' => 'Describe your issue here in details',
		
		// tickets/show.blade.php
		'show_ticket_title' => 'Ticket',
		'show_ticket_jsdelete' => 'Are you sure you want to delete: ',

		// partials/all_tickets.blade.php
		'partials_all_tickets_none' => 'There are no tickets.',
		
		// partials/comments.blade.php
		'partials_comments_jsprompt' => 'Are you sure?',
		
		// partials/pending.blade.php
		'partials_pending_tickets' => 'Pending Tickets',
		'partials_pending_tickets_none' => 'There are no pending tickets.',
		
		// partials/sidebar.blade.php
		'partials_sidebar_create' => 'Create New Tickets',
		'partials_sidebar_pending' => 'Pending Tickets',
		'partials_sidebar_resolved' => 'Resolved Tickets',
		'partials_sidebar_all_tickets' => 'All Tickets',
		
		// partials/solved.blade.php
		'partials_solved_resolved' => 'Resolved Tickets',
		'partials_solved_resolved_none' => 'There are no resolved tickets.',
		
		// partials/ticketform.blade.php
		'partials_ticketform_title' => 'Title',
		'partials_ticketform_body' => 'Body',
		'partials_ticketform_body_comment' => 'Feel free to ask us any question.',
		'partials_ticketform_resolved' => 'Ticket is resolved?',	

/* Admin */
		
		// tickets-admin/index.blade.php
		'admin_index_title' => 'Tickets System Dashboard',

		// tickets-admin/agent/index.blade.php		
		'admin_agent_index_title' => 'Agent Management',	
		'admin_agent_index_btn_create' => 'Create new agent',
		'admin_agent_index_no_agents' => 'There are no agents, ',
		'admin_agent_index_create_new' => 'Add agents',
		
		// tickets-admin/agent/create.blade.php	
		'admin_agent_create_title' => 'Add Agent',
		'admin_agent_create_add_agents' => 'Add Agents',
		'admin_agent_create_no_users' => 'There are no user accounts, create user accounts first.',
		'admin_agent_create_select_user' => 'Select user accounts to be added as agents',

		// tickets-admin/category/index.blade.php		
		'admin_category_index_title' => 'Categories Management',	
		'admin_category_index_btn_create' => 'Create new category',
		'admin_category_index_no_categories' => 'There are no categories, ',
		'admin_category_index_create_new' => 'create new category',	
		'admin_category_index_js_delete' => 'Are you sure you want to delete the category: ',
		
		// tickets-admin/category/create.blade.php	
		'admin_category_create_title' => 'Create New Category',

		// tickets-admin/category/edit.blade.php	
		'admin_category_edit_title' => 'Edit Category: :name',

		// tickets-admin/priority/index.blade.php		
		'admin_priority_index_title' => 'Priorities Management',	
		'admin_priority_index_btn_create' => 'Create new priority',
		'admin_priority_index_no_priorities' => 'There are no priorities, ',
		'admin_priority_index_create_new' => 'create new priority',	
		'admin_priority_index_js_delete' => 'Are you sure you want to delete the priority: ',

		// tickets-admin/priority/create.blade.php	
		'admin_priority_create_title' => 'Create New Priority',

		// tickets-admin/priority/edit.blade.php	
		'admin_priority_edit_title' => 'Edit Priority: :name',

		// tickets-admin/status/index.blade.php
		'admin_status_index_title' => 'Statuses Management',	
		'admin_status_index_btn_create' => 'Create new status',
		'admin_status_index_no_statuses' => 'There are no statues,',
		'admin_status_index_create_new' => 'create new status',	
		'admin_status_index_js_delete' => 'Are you sure you want to delete the status: ',
		
		// tickets-admin/status/create.blade.php
		'admin_status_create_title' => 'Create New Status',
		
		// tickets-admin/status/edit.blade.php
		'admin_status_edit_title' => 'Edit Status: :name',     
];