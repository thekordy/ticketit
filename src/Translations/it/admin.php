<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Impostazioni',
  'nav-agents'                    => 'Agenti',
  'nav-dashboard'                 => 'Scrivania',
  'nav-categories'                => 'Categorie',
  'nav-priorities'                => 'Priorità',
  'nav-statuses'                  => 'Stati',
  'nav-configuration'             => 'Configurazione',
  'nav-administrator'             => 'Amministratore',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nome',
  'table-action'                  => 'Azione',
  'table-categories'              => 'Categorie',
  'table-join-category'           => 'Categorie Collegate',
  'table-remove-agent'            => 'Rimuovi dagli agenti',
  'table-remove-administrator'    => 'Rimuovi da amministratori', // New

  'table-slug'                    => 'Slug',
  'table-default'                 => 'Valore Predefinito',
  'table-value'                   => 'Mio Valore',
  'table-lang'                    => 'Lingua',
  'table-edit'                    => 'Modifica',

  'btn-back'                      => 'Indietro',
  'btn-delete'                    => 'Elimina',
  'btn-edit'                      => 'Modifica',
  'btn-join'                      => 'Collega',
  'btn-remove'                    => 'Rimuovi',
  'btn-submit'                    => 'Invia',
  'btn-save'                      => 'Salva',
  'btn-update'                    => 'Aggiorna',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Scrivania Sistema Richiesta Assistenza',
  'index-empty-records'                 => 'Nessun tickets ancora',
  'index-total-tickets'                 => 'Tickets totali',
  'index-open-tickets'                  => 'Tickets aperti',
  'index-closed-tickets'                => 'Tickets chiusi',
  'index-performance-indicator'         => 'Indicatore delle Performances',
  'index-periods'                       => 'Periodi',
  'index-3-months'                      => '3 mesi',
  'index-6-months'                      => '6 mesi',
  'index-12-months'                     => '12 months',
  'index-tickets-share-per-category'    => 'Tickets condivisi per categoria',
  'index-tickets-share-per-agent'       => 'Tickets condivisi per agente',
  'index-categories'                    => 'Categorie',
  'index-category'                      => 'Categoria',
  'index-agents'                        => 'Agenti',
  'index-agent'                         => 'Agente',
  'index-administrators'                => 'Amministratori',  //new
  'index-administrator'                 => 'Amministratore',  //new
  'index-users'                         => 'Utenti',
  'index-user'                          => 'Utente',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Aperto',
  'index-closed'                        => 'Chiuso',
  'index-total'                         => 'Totale',
  'index-month'                         => 'Mese',
  'index-performance-chart'             => 'In media, in quanti giorni risolvi un ticket?',
  'index-categories-chart'              => 'Tickets distrituiti per categoria',
  'index-agents-chart'                  => 'Tickets distribuiti per agente',

// tickets-admin/agent/____
  'agent-index-title'             => 'Gestione Agente',
  'btn-create-new-agent'          => 'Crea nuovo Agente',
  'agent-index-no-agents'         => 'Non ci sono agenti, ',
  'agent-index-create-new'        => 'Aggiungi agenti',
  'agent-create-title'            => 'Aggiungi agente',
  'agent-create-add-agents'       => 'Aggiungi Agenti',
  'agent-create-no-users'         => 'Non ci sono account utente, crea prima un account utente.',
  'agent-create-select-user'      => 'Seleziona un account utente da aggiungere agli agenti',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Gestione Amministratori',  //new
  'btn-create-new-administrator'                => 'Crea Nuovo Amministratore',  //new
  'administrator-index-no-administrators'       => 'Non ci sono Amministratori, ',  //new
  'administrator-index-create-new'              => 'Aggiungi Amministratori',  //new
  'administrator-create-title'                  => 'Aggiungi Amministratori',  //new
  'administrator-create-add-administrators'     => 'Aggiungi Amministratori',  //new
  'administrator-create-no-users'               => 'Non ci sono account Amministratori, crea un account prima.',  //new
  'administrator-create-select-user'            => 'Seleziona un account da aggiungere agli amministratori',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Gestione Categorie',
  'btn-create-new-category'       => 'Crea nuova Categoria',
  'category-index-no-categories'  => 'Non ci sono Categorie, ',
  'category-index-create-new'     => 'Crea nuova categoria',
  'category-index-js-delete'      => 'Sei davvero sicuro di voler eliminare la categoria: ',
  'category-create-title'         => 'Crea nuova Categoria',
  'category-create-name'          => 'Nome',
  'category-create-color'         => 'Colore',
  'category-edit-title'           => 'Modifica Categoria: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Gestione Priorità',
  'btn-create-new-priority'       => 'Crea nuova Priorita',
  'priority-index-no-priorities'  => 'non ci sono Priorità, ',
  'priority-index-create-new'     => 'Crea nuova priorità',
  'priority-index-js-delete'      => 'Sei davvero sicuro di voler eliminare la priorità: ',
  'priority-create-title'         => 'Crea Nuova Priorità',
  'priority-create-name'          => 'Nome',
  'priority-create-color'         => 'Colore',
  'priority-edit-title'           => 'Modifica Priorità: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Gestione Stati',
  'btn-create-new-status'         => 'Crea Nuovo Stato',
  'status-index-no-statuses'      => 'There are no statues,',
  'status-index-create-new'       => 'Crea nuovi Stati',
  'status-index-js-delete'        => 'Sei sicuro di voler eliminare lo stato: ',
  'status-create-title'           => 'Crea Nuovo Stato',
  'status-create-name'            => 'Nome',
  'status-create-color'           => 'Colore',
  'status-edit-title'             => 'Modifica Stato: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Gestione delle Impostazioni',
  'config-index-subtitle'         => 'Impostazioni',
  'btn-create-new-config'         => 'Aggiungi nuova impostazione',
  'config-index-no-settings'      => 'Non ci sono impostazioni,',
  'config-index-initial'          => 'Iniziali',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notifiche',
  'config-index-permissions'      => 'Permessi',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Altri',
  'config-create-title'           => 'Crea: Nuova Impostazione Globale',
  'config-create-subtitle'        => 'Crea Impostazione',
  'config-edit-title'             => 'Modifica: Configurazione Globale',
  'config-edit-subtitle'          => 'Modifica Impostazione',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Valore Predefinito',
  'config-edit-value'             => 'Mio Valore',
  'config-edit-language'          => 'Lingua',
  'config-edit-unserialize'       => 'Ottieni i valori di array, e cambia i valori',
  'config-edit-serialize'         => 'Ottieni la stringa serializzata dei valori modificati (per essere inseriti nel campo)',
  'config-edit-should-serialize'  => 'Serializza', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'Quando selezionato, il server utilizza eval()!
  									  Non usarlo se eval() è disabilitato o se non sai quello che stai facendo!
  									  Codice esatto eseguito:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Re-inserisci la tua password', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Le password non corrispondono', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Valore non Valido', //Added: 2016-01-16
  'config-edit-tools'             => 'Strumenti:',

];
