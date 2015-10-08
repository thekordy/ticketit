<?php

return [

 /*  
  *  Constants
  */

  'nav-active-tickets'               => 'Actív kérelmek',
  'nav-completed-tickets'            => 'Lezárt kérelmek',

  'table-id'                         => 'ID',
  'table-subject'                    => 'Tárgy',
  'table-owner'                      => 'Tulajdonos',
  'table-status'                     => 'Státusz',
  'table-last-updated'               => 'Utolsó frissítés',
  'table-last-response'              => 'Utolsó válasz',  
  'table-priority'                   => 'Prioritás',
  'table-agent'                      => 'Ügynök',  
  'table-category'                   => 'Kategória', 

  'btn-back'                         => 'Vissza',
  'btn-close'                        => 'Bezárás',  
  'btn-delete'                       => 'Törlés',  
  'btn-edit'                         => 'Szerkesztés',  
  'btn-mark-complete'                => 'Megjelölés lezártként', 
  'btn-submit'                       => 'Küldés', 
  
  'agent'                            => 'Ügynök',
  'category'                         => 'Kategória',
  'colon'                            => ': ',
  'comments'                         => 'Hozzászólások',  
  'created'                          => 'Létrehova',
  'description'                      => 'Leírás',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Utolsó frissítés',  
  'no-replies'                       => 'Nincsenek hozzászólások.',
  'owner'                            => 'Tulajdonos',  
  'priority'                         => 'Prioritás',  
  'reopen-ticket'                    => 'Kérelem újranyitása',
  'reply'                            => 'Válasz',
  'responsible'                      => 'Felelős',
  'status'                           => 'Státusz',      
  'subject'                          => 'Tárgy',
  
 /*  
  *  Page specific
  */

// ____
  'index-title'                      => 'Supprt nyitólap',

// tickets/____
  'index-my-tickets'                 => 'Kérelmeim',
  'btn-create-new-ticket'            => 'Új kérelem',
  'index-complete-none'              => 'Nincsenek lezárt kérelmek.', 
  'index-active-check'               => 'Ellenőrizze az Actív kérelmeket, ha nem találja a keresett kérelmet.',
  'index-active-none'                => 'Nincsenek aktív kérelmek,',
  'index-create-new-ticket'          => 'kérelem létrehozása',
  'index-complete-check'             => 'Ellenőrizze a Lezárt kérelmeket, ha nem találja a keresett kérelmet.',

  'create-ticket-title'              => 'Új kérelem',
  'create-new-ticket'                => 'Új kérelem létrehozása',
  'create-ticket-brief-issue'        => 'Tömör összefoglalás',
  'create-ticket-describe-issue'     => 'A probléma részletes kifejtése',  
  
  'show-ticket-title'                => 'Kérelem',   
  'show-ticket-js-delete'            => 'Biztosan törölni kívánja a következő kérelmet: ',
  'show-ticket-modal-delete-title'   => 'ID:id. Kérelem törlése?',  
  'show-ticket-modal-delete-message' => 'Biztosan törölni kívánja a következő kérelmet: :subject?',

 /*  
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'       => ':names felhasználók hozzáadva az ügynökökhöz.',
  'agents-joined-categories-ok'      => 'Kategóriák sikeresen összekapcsolva',
  'agents-is-removed-from-team'      => ':name eltávolítva az ügynökök listájáról.',

// CategoriesController
  'category-name-has-been-created'   => ':name kategória létrehozva!',  
  'category-name-has-been-modified'  => ':name kategória módosítva!',   
  'category-name-has-been-deleted'   => ':name kategória törölve!', 

// PrioritiesController
  'priority-name-has-been-created'   => ':name prioritás létrehozva!',  
  'priority-name-has-been-modified'  => ':name prioritás módosítva!',   
  'priority-name-has-been-deleted'   => ':name prioritás törölve!',
  'priority-all-tickets-here'        => 'Az összes prioritáshoz tartozó kérelem',

// StatusesController
  'status-name-has-been-created'   => ':name státusz létrehozva!',
  'status-name-has-been-modified'  => ':name státusz módosítva!',
  'status-name-has-been-deleted'   => ':name státusz törölve!',
  'status-all-tickets-here'        => 'Az összes státuszhoz tartozó kérelem',
  
// CommentsController
  'comment-has-been-added-ok'        => 'Hozzászólás sikeresen mentve', 

// NotificationsController
  'notify-new-comment-from'          => 'Új hozzászólás érkezett tőle: ', 
  'notify-on'                        => ' on ', 
  'notify-status-to-complete'        => ' státuszát lezártra', 
  'notify-status-to'                 => ' stáruszát erre: ', 
  'notify-transferred'               => ' áthelyezte ', 
  'notify-to-you'                    => ' önhöz', 
  'notify-created-ticket'            => ' új kérelmet hozott létre ', 
  'notify-updated'                   => ' frissítve ',   
  
 // TicketsController
  'the-ticket-has-been-created'      => 'Kérelem létrehozva!',  
  'the-ticket-has-been-modified'     => 'Kérelem módosítva!',   
  'the-ticket-has-been-deleted'      => ':name kérelem törölve!',  
  'the-ticket-has-been-completed'    => ':name kérelem lezárva!', 
  'the-ticket-has-been-reopened'     => ':name kérelem újra meg lett nyitva!',

];