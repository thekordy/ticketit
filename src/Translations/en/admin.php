<?php

return [

 /*  
  *  Constants
  */
  
  'nav-agents'                    => 'Agent',
  'nav-dashboard'                 => 'Dashboard',
  'nav-categories'                => 'Categories',
  'nav-priorities'                => 'Priorities',
  'nav-statuses'                  => 'Statuses',

  'table-id'                      => 'ID',
  'table-name'                    => 'Name',
  'table-action'                  => 'Action',
  'table-categories'              => 'Categories',
  'table-join-category'           => 'Joined Categories',
  'table-remove_agent'            => 'Remove from agents',

  'btn-back'                      => 'Back',
  'btn-edit'                      => 'Edit',
  'btn-delete'                    => 'Delete',
  'btn-submit'                    => 'Submit',
  'btn-remove'                    => 'Remove',
  'btn-join'                      => 'Join',

  'colon'                         => ': ',

 /*  
  *  Page specific
  */

// tickets-admin/____
  'index_title'                   => 'Tickets System Dashboard',

// tickets-admin/agent/____  
  'agent_index_title'             => 'Agent Management',
  'btn-create-new-agent'          => 'Create new agent',
  'agent_index_no_agents'         => 'There are no agents, ',
  'agent_index_create_new'        => 'Add agents',
  'agent_create_title'            => 'Add Agent',
  'agent_create_add_agents'       => 'Add Agents',
  'agent_create_no_users'         => 'There are no user accounts, create user accounts first.',
  'agent_create_select_user'      => 'Select user accounts to be added as agents',

// tickets-admin/category/____
  'category_index_title'          => 'Categories Management',
  'btn-create-new-category'       => 'Create new category',
  'category_index_no_categories'  => 'There are no categories, ',
  'category_index_create_new'     => 'create new category',
  'category_index_js_delete'      => 'Are you sure you want to delete the category: ',
  'category_create_title'         => 'Create New Category',
  'category_create_name'          => 'Name',
  'category_create_color'         => 'Color',
  'category_edit_title'           => 'Edit Category: :name',

// tickets-admin/priority/____  
  'priority_index_title'          => 'Priorities Management',
  'btn-create-new-priority'       => 'Create new priority',
  'priority_index_no_priorities'  => 'There are no priorities, ',
  'priority_index_create_new'     => 'create new priority',
  'priority_index_js_delete'      => 'Are you sure you want to delete the priority: ',
  'priority_create_title'         => 'Create New Priority',
  'priority_create_name'          => 'Name',
  'priority_create_color'         => 'Color',
  'priority_edit_title'           => 'Edit Priority: :name',

// tickets-admin/status/____
  'status_index_title'            => 'Statuses Management',
  'btn-create-new-status'         => 'Create new status',
  'status_index_no_statuses'      => 'There are no statues,',
  'status_index_create_new'       => 'create new status',
  'status_index_js_delete'        => 'Are you sure you want to delete the status: ',
  'status_create_title'           => 'Create New Status',
  'status_create_name'            => 'Name',
  'status_create_color'           => 'Color',
  'status_edit_title'             => 'Edit Status: :name',

];