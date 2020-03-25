<?php

return [

    /*
     *  Constants
     */

    'nav-active-tickets'               => 'Offene Tickets',
    'nav-completed-tickets'            => 'Geschlossene Tickets',
    'nav-public-tickets'               => 'Öffentliche Tickets',

    // Tables
    'table-id'                         => '#',
    'table-subject'                    => 'Betreff',
    'table-owner'                      => 'Ersteller',
    'table-status'                     => 'Status',
    'table-last-updated'               => 'Zuletzt aktualisiert',
    'table-priority'                   => 'Priorität',
    'table-agent'                      => 'Agent',
    'table-category'                   => 'Kategorie',

    // Datatables
    'table-decimal'                    => '',
    'table-empty'                      => 'Keine Daten in der Tabelle verfügbar',
    'table-info'                       => 'Zeige _START_ bis _END_ von _TOTAL_ Einträgen',
    'table-info-empty'                 => 'Zeige 0 bis 0 von 0 Einträgen',
    'table-info-filtered'              => '(gefiltert von _MAX_ total Einträgen)',
    'table-info-postfix'               => '',
    'table-thousands'                  => ',',
    'table-length-menu'                => 'Zeige _MENU_ Einträge',
    'table-loading-results'            => 'Lade...',
    'table-processing'                 => 'Verarbeitung...',
    'table-search'                     => 'Suche:',
    'table-zero-records'               => 'Keine passenden Einträge gefunden',
    'table-paginate-first'             => 'Start',
    'table-paginate-last'              => 'Ende',
    'table-paginate-next'              => 'Vor',
    'table-paginate-prev'              => 'Zurück',
    'table-aria-sort-asc'              => ': aktivieren um diese Spalte aufsteigend zu sortieren',
    'table-aria-sort-desc'             => ': aktivieren um diese Spalte absteigend zu sortieren',

    'btn-back'                         => 'Zurück',
    'btn-cancel'                       => 'Abbrechen', // NEW
    'btn-close'                        => 'Schliessen',
    'btn-delete'                       => 'Löschen',
    'btn-edit'                         => 'Bearbeiten',
    'btn-mark-complete'                => 'Als geschlossen markieren',
    'btn-mark-public'                  => 'Als öffentlich markieren',
    'btn-mark-unpublic'                => 'Als nicht öffentlich markieren',
    'btn-submit'                       => 'Absenden',

    'agent'                            => 'Agent',
    'category'                         => 'Kategorie',
    'colon'                            => ': ',
    'comments'                         => 'Kommentare',
    'created'                          => 'Erstellt',
    'description'                      => 'Beschreibung',
    'flash-x'                          => '×', // &times;
    'last-update'                      => 'Zuletzt aktualisiert',
    'no-replies'                       => 'Keine Antworten.',
    'owner'                            => 'Ersteller',
    'priority'                         => 'Priorität',
    'reopen-ticket'                    => 'Ticket wieder öffnen',
    'reply'                            => 'Antworten',
    'responsible'                      => 'Verantwortlich',
    'status'                           => 'Status',
    'subject'                          => 'Betreff',

    /*
     *  Page specific
     */

// ____
    'index-title'                      => 'Helpdesk Hauptseite',

// tickets/____
    'index-my-tickets'                 => 'Meine Tickets',
    'btn-create-new-ticket'            => 'Neues Ticket erstellen',
    'index-complete-none'              => 'Es gibt keine geschlossenen Tickets',
    'index-active-check'               => 'Bitte betrachte die Offenen Tickets wenn du dein Ticket nicht finden kannst.',
    'index-active-none'                => 'Es gibt keine aktiven Tickets,',
    'index-create-new-ticket'          => 'neues Ticket erstellen',
    'index-complete-check'             => 'Bitte betrachte die Geschlossenen Tickets wenn du dein Ticket nicht finden kannst.',

    'create-ticket-title'              => 'Neues Ticket Formular',
    'create-new-ticket'                => 'Neues Ticket erstellen',
    'create-ticket-brief-issue'        => 'Kurzbeschreibung',
    'create-ticket-describe-issue'     => 'Detaillierte Beschreibung',

    'show-ticket-title'                => 'Ticket',
    'show-ticket-js-delete'            => 'Möchtest du wirklich folgendes löschen: ',
    'show-ticket-modal-delete-title'   => 'Ticket Löschen',
    'show-ticket-modal-delete-message' => 'Möchtest du dieses Ticket wirklich löschen: :subject?',

    /*
     *  Controllers
     */

// AgentsController
    'agents-are-added-to-agents'       => 'Agenten :names wurden hinzugefügt',
    'agents-joined-categories-ok'      => 'Erfolgreich den Kategorien zugewiesen',
    'agents-is-removed-from-team'      => 'Agent(en) :name wurden aus dem Agenten Team entfernt',

// CategoriesController
    'category-name-has-been-created'   => 'Die Kategorie :name wurde erstellt!',
    'category-name-has-been-modified'  => 'Die Kategorie :name wurde bearbeitet!',
    'category-name-has-been-deleted'   => 'Die Kategorie :name wurde gelöscht!',

// PrioritiesController
    'priority-name-has-been-created'   => 'Die Priorität :name wurde erstellt!',
    'priority-name-has-been-modified'  => 'Die Priorität :name wurde bearbeitet!',
    'priority-name-has-been-deleted'   => 'Die Priorität :name wurde gelöscht!',
    'priority-all-tickets-here'        => 'Alle Prioritäts Tickets hierher',

// StatusesController
    'status-name-has-been-created'   => 'Der Status :name wurde erstellt!',
    'status-name-has-been-modified'  => 'Der Status :name wurde bearbeitet!',
    'status-name-has-been-deleted'   => 'Der Status :name wurde gelöscht!',
    'status-all-tickets-here'        => 'Alle Status Tickets hierher',

// CommentsController
    'comment-has-been-added-ok'        => 'Kommentar erfolgreich hinzugefügt',

// NotificationsController
    'notify-new-comment-from'          => 'Neuer Kommentar von ',
    'notify-on'                        => ' bei ',
    'notify-status-to-complete'        => ' Status auf Geschlossen',
    'notify-status-to'                 => ' Status auf ',
    'notify-transferred'               => ' verschoben ',
    'notify-to-you'                    => ' zu Dir',
    'notify-created-ticket'            => ' Ticket erstellt ',
    'notify-updated'                   => ' aktualisiert ',

    // TicketsController
    'the-ticket-has-been-created'      => 'Das Ticket wurde erstellt!',
    'the-ticket-has-been-modified'     => 'Das Ticket wurde bearbeitet!',
    'the-ticket-has-been-deleted'      => 'Das Ticket :name wurde gelöscht!',
    'the-ticket-has-been-completed'    => 'Das Ticket :name wurde geschlossen!',
    'the-ticket-has-been-set-public'   => 'Das Ticket :name wurde veröffentlicht!',
    'the-ticket-has-been-set-unpublic' => 'Das Ticket :name wurde nicht veröffentlicht!',
    'the-ticket-has-been-reopened'     => 'Das Ticket :name wurde erneut geöffnet!',
    'you-are-not-permitted-to-do-this' => 'Du bist nicht berechtigt diese Aktion auszuführen!',

];
