<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Instellingen',
  'nav-agents'                    => 'Medewerkers',
  'nav-dashboard'                 => 'Dashboard',
  'nav-categories'                => 'Categorieën',
  'nav-priorities'                => 'Prioriteiten',
  'nav-statuses'                  => 'Statussen',
  'nav-configuration'             => 'Configuratie',
  'nav-administrator'             => 'Beheerder',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Onderwerp',
  'table-action'                  => 'Actie',
  'table-categories'              => 'Categorie',
  'table-join-category'           => 'Categorieën',
  'table-remove-agent'            => 'Verwijderen van medewerkers',
  'table-remove-administrator'    => 'Verwijderen van beheerders', // New

  'table-slug'                    => 'Slug',
  'table-default'                 => 'Standaardwaarde',
  'table-value'                   => 'Mijn waarde',
  'table-lang'                    => 'Lang',
  'table-edit'                    => 'Wijzigen',

  'btn-back'                      => 'Terug',
  'btn-delete'                    => 'Verwijderen',
  'btn-edit'                      => 'Bewerken',
  'btn-join'                      => 'Toevoegen',
  'btn-remove'                    => 'Verwijderen',
  'btn-submit'                    => 'Opsturen',
  'btn-save'                      => 'Opslaan',
  'btn-update'                    => 'Updaten',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Tickets System Dashboard',
  'index-empty-records'                 => 'Nog geen tickets',
  'index-total-tickets'                 => 'Totaal aantal tickets',
  'index-open-tickets'                  => 'Open tickets',
  'index-closed-tickets'                => 'Gesloten tickets',
  'index-performance-indicator'         => 'Performance Indicator',
  'index-periods'                       => 'Periodes',
  'index-3-months'                      => '3 maand',
  'index-6-months'                      => '6 maand',
  'index-12-months'                     => '12 maand',
  'index-tickets-share-per-category'    => 'Aandeel per categorie',
  'index-tickets-share-per-agent'       => 'Aandeel per medewerker',
  'index-categories'                    => 'Categorieën',
  'index-category'                      => 'Categorie',
  'index-agents'                        => 'Medewerkers',
  'index-agent'                         => 'Medewerker',
  'index-administrators'                => 'Beheerders',  //new
  'index-administrator'                 => 'Beheerder',  //new
  'index-users'                         => 'Gebruikers',
  'index-user'                          => 'Gebruiker',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Lopend',
  'index-closed'                        => 'Afgerond',
  'index-total'                         => 'Totaal',
  'index-month'                         => 'Maand',
  'index-performance-chart'             => 'Gemiddeld aantal dagen voor oplossen ticket',
  'index-categories-chart'              => 'Ticket verdeling per categorie',
  'index-agents-chart'                  => 'Ticket verdeling per medewerker',

// tickets-admin/agent/____
  'agent-index-title'             => 'Agent Management',
  'btn-create-new-agent'          => 'Medewerker toevoegen',
  'agent-index-no-agents'         => 'Er zijn geen medewerkers, ',
  'agent-index-create-new'        => 'Nieuwe medewerkers',
  'agent-create-title'            => 'Nieuwe medewerker',
  'agent-create-add-agents'       => 'Nieuwe medewerkers',
  'agent-create-no-users'         => 'Nog geen user accounts, maak deze eerst.',
  'agent-create-select-user'      => 'Selecteer user accounts, waarvan je medewerkers wilt maken',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Beheerders beheer',  //new
  'btn-create-new-administrator'                => 'Nieuwe beheerder aanmaken',  //new
  'administrator-index-no-administrators'       => 'Er zijn geen beheerders, ',  //new
  'administrator-index-create-new'              => 'Beheerder aanmaken',  //new
  'administrator-create-title'                  => 'Beheerder aanmaken',  //new
  'administrator-create-add-administrators'     => 'Beheerders aanmaken',  //new
  'administrator-create-no-users'               => 'Nog geen user accounts, maak deze eerst.',  //new
  'administrator-create-select-user'            => 'Selecteer user accounts, waarvan je beheerders wilt maken',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Categoriebeheer',
  'btn-create-new-category'       => 'Categorie aanmaken',
  'category-index-no-categories'  => 'Er zijn geen categorieën, ',
  'category-index-create-new'     => 'categorie aanmaken',
  'category-index-js-delete'      => 'Wil je deze categorie zeker verwijderen: ',
  'category-create-title'         => 'Nieuwe categorie aanmaken',
  'category-create-name'          => 'Naam',
  'category-create-color'         => 'Kleur',
  'category-edit-title'           => 'Categorie bewerken: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Prioriteitenbeheer',
  'btn-create-new-priority'       => 'Nieuwe prioriteit aanmaken',
  'priority-index-no-priorities'  => 'Er zijn geen prioriteiten, ',
  'priority-index-create-new'     => 'Nieuwe prioriteit aanmaken',
  'priority-index-js-delete'      => 'Weet je zeker dat je deze prioriteit wilt verwijderen: ',
  'priority-create-title'         => 'Nieuwe prioriteit aanmaken',
  'priority-create-name'          => 'Naam',
  'priority-create-color'         => 'Kleur',
  'priority-edit-title'           => 'Prioriteit bewerken: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Statusbeheer',
  'btn-create-new-status'         => 'Nieuwe status aanmaken',
  'status-index-no-statuses'      => 'Er zijn geen statussen,',
  'status-index-create-new'       => 'Nieuwe status aanmaken',
  'status-index-js-delete'        => 'Weet je zeker dat je deze status wilt verwijderen: ',
  'status-create-title'           => 'Nieuwe status aanmaken',
  'status-create-name'            => 'Naam',
  'status-create-color'           => 'Kleur',
  'status-edit-title'             => 'Status bewerken: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Instellingen',
  'config-index-subtitle'         => 'instellingen',
  'btn-create-new-config'         => 'Nieuwe instelling toevoegen',
  'config-index-no-settings'      => 'Er zijn geen instellingen,',
  'config-index-initial'          => 'Initial',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notificaties',
  'config-index-permissions'      => 'Rechten',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Overige',
  'config-create-title'           => 'Nieuwe globale instelling',
  'config-create-subtitle'        => 'Instelling aanmaken',
  'config-edit-title'             => 'Globale instelling bewerken',
  'config-edit-subtitle'          => 'Bewerk instelling',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Standaardwaarde',
  'config-edit-value'             => 'Mijn waarde',
  'config-edit-language'          => 'Taal',
  'config-edit-unserialize'       => 'Get the array values, and change the values',
  'config-edit-serialize'         => 'Get the serialized string of the changed values (to be entered in the field)',
  'config-edit-should-serialize'  => 'Serialize', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Voer jouw wachtwoord nog eens in', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Wachtwoorden komt niet overeen', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Ongeldige waarde', //Added: 2016-01-16
  'config-edit-tools'             => 'Tools:',

];
