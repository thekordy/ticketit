<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets Ouverts',
  'nav-completed-tickets'            => 'Tickets Fermés',
  'nav-public-tickets'               => 'Tickets publics',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Sujet',
  'table-owner'                      => 'Propriétaire',
  'table-status'                     => 'Statut',
  'table-last-updated'               => 'Dernière mise à jour',
  'table-priority'                   => 'Priorité',
  'table-agent'                      => 'Agent',
  'table-category'                   => 'Catégorie',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Aucune entrée disponible',
  'table-info'                       => 'Entrées de _START_ à _END_ sur un total de _TOTAL_ ',
  'table-info-empty'                 => 'Entrées de 0 à 0 sur un total de 0',
  'table-info-filtered'              => '(filtré sur un total de _MAX_ entrées)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Voir _MENU_ entrées',
  'table-loading-results'            => 'Chargement...',
  'table-processing'                 => 'Calcul en cours...',
  'table-search'                     => 'Recherche:',
  'table-zero-records'               => 'Aucune correspondance trouvée',
  'table-paginate-first'             => 'Premier',
  'table-paginate-last'              => 'Dernier',
  'table-paginate-next'              => 'Suivant',
  'table-paginate-prev'              => 'Précédent',
  'table-aria-sort-asc'              => ': activation du tri croissant',
  'table-aria-sort-desc'             => ': activation du tru décroissant',

  'btn-back'                         => 'Retour',
  'btn-cancel'                       => 'Annuler', // NEW
  'btn-close'                        => 'Fermer',
  'btn-delete'                       => 'Supprimer',
  'btn-edit'                         => 'Editer',
  'btn-mark-complete'                => 'Marquer fermée',
  'btn-submit'                       => 'Envoyer',

  'agent'                            => 'Agent',
  'category'                         => 'Categorie',
  'colon'                            => ': ',
  'comments'                         => 'Commentaires',
  'created'                          => 'Créé',
  'description'                      => 'Description',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Dernière mise à jour',
  'no-replies'                       => 'Pas de réponse',
  'owner'                            => 'Propriétaire',
  'priority'                         => 'Priorité',
  'reopen-ticket'                    => 'Réouverture du Ticket',
  'reply'                            => 'Répondre',
  'responsible'                      => 'Responsable',
  'status'                           => 'Statut',
  'subject'                          => 'Sujet',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk Accueil',

// tickets/____
  'index-my-tickets'                 => 'Mes Tickets',
  'btn-create-new-ticket'            => 'Créer un nouveau ticket',
  'index-complete-none'              => 'Aucun ticket fermé',
  'index-active-check'               => 'Merci de vérifier les tickets ouverts si vous ne trouvez pas votre ticket.',
  'index-active-none'                => 'Aucun ticket ouvert,',
  'index-create-new-ticket'          => 'Créer un nouveau ticket',
  'index-complete-check'             => 'Merci de vérifier les tickets fermés si vous ne trouvez pas votre ticket.',

  'create-ticket-title'              => 'Titre du nouveau ticket',
  'create-new-ticket'                => 'Créer un nouveau ticket',
  'create-ticket-brief-issue'        => 'Résumé de votre demande',
  'create-ticket-describe-issue'     => 'Description de votre demande avec les détails',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Confirmer la suppression: ',
  'show-ticket-modal-delete-title'   => 'Supprimer le ticket',
  'show-ticket-modal-delete-message' => 'Confirmer la suppression du ticket: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Les agents :names ont été ajoutés comme agents',
  'administrators-are-added-to-administrators'      => 'Les administrateurs :names ont été ajoutés comme administrateurs', //New
  'agents-joined-categories-ok'                     => 'Catégorie jointe avec succès',
  'agents-is-removed-from-team'                     => 'Le(s) agent\\s :name ont été retirés de l\'équipe des agents',
  'administrators-is-removed-from-team'             => 'Le(s) administrateurs :name ont été retirés de l\'équipe des administrateurs', // New

// CategoriesController
  'category-name-has-been-created'   => 'La catégorie :name a été créée !',
  'category-name-has-been-modified'  => 'La catégorie :name a été modifiée !',
  'category-name-has-been-deleted'   => 'La catégorie :name a été supprimée !',

// PrioritiesController
  'priority-name-has-been-created'   => 'La priorité :name a été créée !',
  'priority-name-has-been-modified'  => 'La priorité :name a été modifiée !',
  'priority-name-has-been-deleted'   => 'La priorité :name a été supprimée !',
  'priority-all-tickets-here'        => 'Voici tous les tickets de cette priorité',

// StatusesController
  'status-name-has-been-created'   => 'Le statut :name a été créé !',
  'status-name-has-been-modified'  => 'Le statut :name a été modifié !',
  'status-name-has-been-deleted'   => 'Le statut :name a été supprimé !',
  'status-all-tickets-here'        => 'Voici tous les tickets avec ce statut',

// CommentsController
  'comment-has-been-added-ok'        => 'Votre commentaire a bien été rajouté',

// NotificationsController
  'notify-new-comment-from'          => 'Nouveau commentaire de la part de ',
  'notify-on'                        => ' à propos du ticket ',
  'notify-status-to-complete'        => ' statut mis à fermé',
  'notify-status-to'                 => ' statut mis à ',
  'notify-transferred'               => ' transféré ',
  'notify-to-you'                    => ' à vous',
  'notify-created-ticket'            => ' ticket créé ',
  'notify-updated'                   => ' mis à jour ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Le ticket a été créé !',
  'the-ticket-has-been-modified'     => 'Le ticket a été modifié !',
  'the-ticket-has-been-deleted'      => 'Le ticket :name a été supprimé !',
  'the-ticket-has-been-completed'    => 'Le ticket :name a été fermé !',
  'the-ticket-has-been-reopened'     => 'Le ticket :name a été réouvert !',
  'you-are-not-permitted-to-do-this' => 'vous n\'êtes pas autorisé à faire cette action !',

 // AuthController
  'auth.failed'                      => 'Echec de l\'authentification !',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Vous n\'avez pas de le droit d\'accéder à cette page !',

];
