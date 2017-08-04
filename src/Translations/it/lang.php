<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets Attivi',
  'nav-completed-tickets'            => 'Tickets Completati',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Oggetto',
  'table-owner'                      => 'Proprietario',
  'table-status'                     => 'Stato',
  'table-last-updated'               => 'Ultimo Aggiornamento',
  'table-priority'                   => 'Priorità',
  'table-agent'                      => 'Agente',
  'table-category'                   => 'Categoria',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Nessun dato disponibile.',
  'table-info'                       => 'Visualizza da _START_ a _END_ di _TOTAL_',
  'table-info-empty'                 => 'Visualizza da 0 a 0 di 0 elementi',
  'table-info-filtered'              => '(filtrati da _MAX_ totali elementi)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Mostra _MENU_ elementi',
  'table-loading-results'            => 'Caricamento...',
  'table-processing'                 => 'Sto Processando...',
  'table-search'                     => 'Cerca:',
  'table-zero-records'               => 'Nessun risultato disponibile',
  'table-paginate-first'             => 'Primo',
  'table-paginate-last'              => 'Ultimo',
  'table-paginate-next'              => 'Prossimo',
  'table-paginate-prev'              => 'Precedente',
  'table-aria-sort-asc'              => ': attiva per ordinare la colonna in modo ascendente',
  'table-aria-sort-desc'             => ': attiva per ordinare la colonna in modo discendente',

  'btn-back'                         => 'Indietro',
  'btn-cancel'                       => 'Annulla', // NEW
  'btn-close'                        => 'Chiudi',
  'btn-delete'                       => 'Cancella',
  'btn-edit'                         => 'Modifica',
  'btn-mark-complete'                => 'Segna Completato',
  'btn-submit'                       => 'Invia',

  'agent'                            => 'Agente',
  'category'                         => 'Categoria',
  'colon'                            => ': ',
  'comments'                         => 'Commenti',
  'created'                          => 'Creato',
  'description'                      => 'Descrzione',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Ultimo Aggiornamento',
  'no-replies'                       => 'Nessuna replica.',
  'owner'                            => 'Proprietario',
  'priority'                         => 'Priorità',
  'reopen-ticket'                    => 'Riapri Ticket',
  'reply'                            => 'Rispondi',
  'responsible'                      => 'Responsabile',
  'status'                           => 'Stato',
  'subject'                          => 'Oggetto',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Pagina Principale Sistema Supporto',

// tickets/____
  'index-my-tickets'                 => 'Miei Tickets',
  'btn-create-new-ticket'            => 'Crea una nuova richiesta di Assistenza',
  'index-complete-none'              => 'Non ci sono tickets completati',
  'index-active-check'               => 'Be sure to check Active Tickets if you cannot find your ticket.',
  'index-active-none'                => 'non ci sono tickets attivi,',
  'index-create-new-ticket'          => 'crea nuovo Ticket',
  'index-complete-check'             => 'Be sure to check Complete Tickets if you cannot find your ticket.',

  'create-ticket-title'              => 'Modulo Nuova Richiesta di Assistenza',
  'create-new-ticket'                => 'Crea nuovo Ticket',
  'create-ticket-brief-issue'        => 'A brief of your issue ticket',
  'create-ticket-describe-issue'     => 'Descrivi il tuo problema nei dettagli',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Sei sicuro di voler elimianre: ',
  'show-ticket-modal-delete-title'   => 'Elimina Ticket',
  'show-ticket-modal-delete-message' => 'Sei sicuro di voler eliminare il ticket di assistenza: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agents :names are added to agents',
  'administrators-are-added-to-administrators'      => 'Administrators :names are added to administrators', //New
  'agents-joined-categories-ok'                     => 'Joined categories successfully',
  'agents-is-removed-from-team'                     => 'Removed agent\s :name from the agent team',
  'administrators-is-removed-from-team'             => 'Removed administrator\s :name from the administrators team', // New

// CategoriesController
  'category-name-has-been-created'   => 'La categoria :name è stata creata!',
  'category-name-has-been-modified'  => 'La categoria :name è stata modificata!',
  'category-name-has-been-deleted'   => 'La categoria :name è stata eliminata!',

// PrioritiesController
  'priority-name-has-been-created'   => 'La Priorità :name è stata creata!',
  'priority-name-has-been-modified'  => 'La Priorità :name è stata modificata!',
  'priority-name-has-been-deleted'   => 'La Priorità :name è stata eliminata!',
  'priority-all-tickets-here'        => 'La Priorità related tickets here',

// StatusesController
  'status-name-has-been-created'   => 'Lo Stato :name è stato creato!',
  'status-name-has-been-modified'  => 'Lo Stato :name è stato modificato!',
  'status-name-has-been-deleted'   => 'Lo Stato :name è stato eliminato!',
  'status-all-tickets-here'        => 'All status related tickets here',

// CommentsController
  'comment-has-been-added-ok'        => 'Il Commento è stato salvato correttamente',

// NotificationsController
  'notify-new-comment-from'          => 'Nuovo Commento da ',
  'notify-on'                        => ' in ',
  'notify-status-to-complete'        => ' status to Complete',
  'notify-status-to'                 => ' status to ',
  'notify-transferred'               => ' trasferiti ',
  'notify-to-you'                    => ' a te',
  'notify-created-ticket'            => ' ticket creato ',
  'notify-updated'                   => ' aggiornato ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Il ticket è stato creato!',
  'the-ticket-has-been-modified'     => 'Il ticket è stato modificato!',
  'the-ticket-has-been-deleted'      => 'Il ticket :name è stato eliminato!',
  'the-ticket-has-been-completed'    => 'Il ticket :name è stato completato!',
  'the-ticket-has-been-reopened'     => 'Il ticket :name è stato riaperto!',
  'you-are-not-permitted-to-do-this' => 'Non hai i permessi necessari per questa operazione!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Non hai i permessi necessari per accedere a questa pagina!',

];
