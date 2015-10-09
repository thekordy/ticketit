<?php

return [

 /*  
  *  Constants
  */

  'nav-active-tickets'               => 'DE_Active Tickets',
  'nav-completed-tickets'            => 'DE_Completed Tickets',

  'table-id'                         => 'DE_ID',
  'table-subject'                    => 'DE_Subject',
  'table-owner'                      => 'DE_Owner',  
  'table-status'                     => 'DE_Status',
  'table-last-updated'               => 'DE_Last Updated',
  'table-priority'                   => 'DE_Priority',
  'table-agent'                      => 'DE_Agent',  
  'table-category'                   => 'DE_Category', 

  'btn-back'                         => 'DE_Back',
  'btn-close'                        => 'DE_Close',  
  'btn-delete'                       => 'DE_Delete',  
  'btn-edit'                         => 'DE_Edit',  
  'btn-mark-complete'                => 'DE_Mark Complete', 
  'btn-submit'                       => 'DE_Submit', 
  
  'agent'                            => 'DE_Agent',
  'category'                         => 'DE_Category',
  'colon'                            => 'DE_: ',
  'comments'                         => 'DE_Comments',  
  'created'                          => 'DE_Created',
  'description'                      => 'DE_Description',
  'flash-x'                          => 'DE_×', // &times;
  'last-update'                      => 'DE_Last Update',  
  'no-replies'                       => 'DE_No replies.',
  'owner'                            => 'DE_Owner',  
  'priority'                         => 'DE_Priority',  
  'reopen-ticket'                    => 'DE_Reopen Ticket',
  'reply'                            => 'DE_Reply',
  'responsible'                      => 'DE_Responsible',
  'status'                           => 'DE_Status',      
  'subject'                          => 'DE_Subject',
  
 /*  
  *  Page specific
  */

// ____
  'index-title'                      => 'DE_Helpdesk main page',

// tickets/____
  'index-my-tickets'                 => 'DE_My tickets',
  'btn-create-new-ticket'            => 'DE_Create new ticket',
  'index-complete-none'              => 'DE_There are no complete tickets', 
  'index-active-check'               => 'DE_Be sure to check Active Tickets if you cannot find your ticket.',
  'index-active-none'                => 'DE_There are no active tickets,',
  'index-create-new-ticket'          => 'DE_create new ticket',
  'index-complete-check'             => 'DE_Be sure to check Complete Tickets if you cannot find your ticket.',

  'create-ticket-title'              => 'DE_New Ticket Form',
  'create-new-ticket'                => 'DE_Create New Ticket',
  'create-ticket-brief-issue'        => 'DE_A brief of your issue ticket',
  'create-ticket-describe-issue'     => 'DE_Describe your issue here in details',  
  
  'show-ticket-title'                => 'DE_Ticket',   
  'show-ticket-js-delete'            => 'DE_Are you sure you want to delete: ',
  'show-ticket-modal-delete-title'   => 'DE_ID:id. Delete ticket?',  
  'show-ticket-modal-delete-message' => 'DE_Are you sure you want to delete ticket: :subject?',

 /*  
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'       => 'DE_Agents :names are added to agents',
  'agents-joined-categories-ok'      => 'DE_Joined categories successfully',
  'agents-is-removed-from-team'      => 'DE_Removed agent\s :name from the agent team',

// CategoriesController
  'category-name-has-been-created'   => 'DE_The category :name has been created!',  
  'category-name-has-been-modified'  => 'DE_The category :name has been modified!',   
  'category-name-has-been-deleted'   => 'DE_The category :name has been deleted!', 

// PrioritiesController
  'priority-name-has-been-created'   => 'DE_The priority :name has been created!',  
  'priority-name-has-been-modified'  => 'DE_The priority :name has been modified!',   
  'priority-name-has-been-deleted'   => 'DE_The priority :name has been deleted!',
  'priority-all-tickets-here'        => 'DE_All priority related tickets here',

// StatusesController
  'status-name-has-been-created'     => 'DE_The status :name has been created!',  
  'status-name-has-been-modified'    => 'DE_The status :name has been modified!',   
  'status-name-has-been-deleted'     => 'DE_The status :name has been deleted!',
  'status-all-tickets-here'          => 'DE_All status related tickets here',
  
// CommentsController
  'comment-has-been-added-ok'        => 'DE_Comment has been added successfully', 

// NotificationsController
  'notify-new-comment-from'          => 'DE_New comment from ', 
  'notify-on'                        => 'DE_ on ', 
  'notify-status-to-complete'        => 'DE_ status to Complete', 
  'notify-status-to'                 => 'DE_ status to ', 
  'notify-transferred'               => 'DE_ transferred ', 
  'notify-to-you'                    => 'DE_ to you', 
  'notify-created-ticket'            => 'DE_ created ticket ', 
  'notify-updated'                   => 'DE_ updated ',   
  
 // TicketsController
  'the-ticket-has-been-created'      => 'DE_The ticket has been created!',  
  'the-ticket-has-been-modified'     => 'DE_The ticket has been modified!',   
  'the-ticket-has-been-deleted'      => 'DE_The ticket :name has been deleted!',  
  'the-ticket-has-been-completed'    => 'DE_The ticket :name has been completed!', 
  'the-ticket-has-been-reopened'     => 'DE_The ticket :name has been reopened!',
  
];