<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Lopende tickets',
  'nav-completed-tickets'            => 'Afgeronde tickets',
  'nav-public-tickets'               => 'Openbare tickets',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Onderwerp',
  'table-owner'                      => 'Gebruiker',
  'table-status'                     => 'Status',
  'table-last-updated'               => 'Laatste update',
  'table-priority'                   => 'Prioriteit',
  'table-agent'                      => 'Medewerker',
  'table-category'                   => 'Categorie',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Geen resultaten aanwezig in de tabel',
  'table-info'                       => '_START_ tot _END_ van _TOTAL_ resultaten',
  'table-info-empty'                 => '0 tot 0 van 0 resultaten',
  'table-info-filtered'              => '(gefilterd uit _MAX_ resultaten)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => '_MENU_ resultaten weergeven',
  'table-loading-results'            => 'Laden...',
  'table-processing'                 => 'Verwerken...',
  'table-search'                     => 'Zoeken:',
  'table-zero-records'               => 'Geen resultaten aanwezig in de tabel',
  'table-paginate-first'             => 'Eerste',
  'table-paginate-last'              => 'Laatste',
  'table-paginate-next'              => 'Volgende',
  'table-paginate-prev'              => 'Vorige',
  'table-aria-sort-asc'              => ': activeer om kolom oplopend te sorteren',
  'table-aria-sort-desc'             => ': activeer om kolom aflopend te sorteren',

  'btn-back'                         => 'Terug',
  'btn-cancel'                       => 'Annuleren', // NEW
  'btn-close'                        => 'Sluiten',
  'btn-delete'                       => 'Verwijderen',
  'btn-edit'                         => 'Bewerken',
  'btn-mark-complete'                => 'Als afgerond markeren',
  'btn-submit'                       => 'Versturen',

  'agent'                            => 'Medewerker',
  'category'                         => 'Categorie',
  'colon'                            => ': ',
  'comments'                         => 'Reacties',
  'created'                          => 'Aangemaakt',
  'description'                      => 'Beschrijving',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Laatste reactie',
  'no-replies'                       => 'Geen reacties.',
  'owner'                            => 'Gebruiker',
  'priority'                         => 'Prioriteit',
  'reopen-ticket'                    => 'Ticket heropenen',
  'reply'                            => 'Reageren',
  'responsible'                      => 'Verantwoordelijke',
  'status'                           => 'Status',
  'subject'                          => 'Onderwerp',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk',

// tickets/____
  'index-my-tickets'                 => 'Mijn tickets',
  'btn-create-new-ticket'            => 'Nieuwe ticket openen',
  'index-complete-none'              => 'Er zijn geen afgeronde tickets',
  'index-active-check'               => 'Mocht je jouw ticket niet kunnen vinden, kijk dan ook even onder de lopende tickets.',
  'index-active-none'                => 'Er zijn geen lopende tickets,',
  'index-create-new-ticket'          => 'maak een ticket aan',
  'index-complete-check'             => 'Mocht je jouw ticket niet kunnen vinden, kijk dan ook even onder de afgeronde tickets.',

  'create-ticket-title'              => 'Nieuwe ticket',
  'create-new-ticket'                => 'Nieuwe ticket openen',
  'create-ticket-brief-issue'        => 'Korte beschrijving van jouw probleem',
  'create-ticket-describe-issue'     => 'Uitgebreidere beschrijving van jouw probleem',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Zeker dat je het ticket wilt verwijderen: ',
  'show-ticket-modal-delete-title'   => 'Ticket verwijderen',
  'show-ticket-modal-delete-message' => 'Je staat op het punt om het volgende ticket te verwijderen: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Medewerkers :names zijn toegevoegd aan medewerkers',
  'administrators-are-added-to-administrators'      => 'Beheerders :names zijn toegevoegd aan beheerders', //New
  'agents-joined-categories-ok'                     => 'Is categorieen succesvol gejoined',
  'agents-is-removed-from-team'                     => ':name is verwijderd uit het team',
  'administrators-is-removed-from-team'             => ':name is verwijderd uit het beheerersteam', // New

// CategoriesController
  'category-name-has-been-created'   => 'De categorie :name is aangemaakt!',
  'category-name-has-been-modified'  => 'De categorie :name is aangepast!',
  'category-name-has-been-deleted'   => 'De categorie :name is verwijderd!',

// PrioritiesController
  'priority-name-has-been-created'   => 'De prioriteit :name is aangemaakt!',
  'priority-name-has-been-modified'  => 'De prioriteit :name is aangepast!',
  'priority-name-has-been-deleted'   => 'De prioriteit :name is verwijderd!',
  'priority-all-tickets-here'        => 'Alle prioriteit gerelateerde tickets hier',

// StatusesController
  'status-name-has-been-created'   => 'De status :name is aangemaakt!',
  'status-name-has-been-modified'  => 'De status :name is aangepast!',
  'status-name-has-been-deleted'   => 'De status :name is verwijderd!',
  'status-all-tickets-here'        => 'Alle status gerelateerde tickets hier',

// CommentsController
  'comment-has-been-added-ok'        => 'Reactie is succesvol geplaatst',

// NotificationsController
  'notify-new-comment-from'          => 'Nieuwe reactie van ',
  'notify-on'                        => ' op ',
  'notify-status-to-complete'        => ' status naar Afgerond',
  'notify-status-to'                 => ' status naar ',
  'notify-transferred'               => ' verplaatst ',
  'notify-to-you'                    => ' naar jou',
  'notify-created-ticket'            => ' aangemaakte ticket ',
  'notify-updated'                   => ' veranderd ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Het ticket is aangemaakt!',
  'the-ticket-has-been-modified'     => 'Het ticket is aangepast!',
  'the-ticket-has-been-deleted'      => 'Ticket :name is verwijderd!',
  'the-ticket-has-been-completed'    => 'Ticket :name is afgerond!',
  'the-ticket-has-been-reopened'     => 'Ticket :name is heropend!',
  'you-are-not-permitted-to-do-this' => 'Jij hebt hier geen rechten toe!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Geen toegang!',

];
