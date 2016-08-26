<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Configuration',
  'nav-agents'                    => 'Agents',
  'nav-dashboard'                 => 'Tableau de bord',
  'nav-categories'                => 'Catégories',
  'nav-priorities'                => 'Priorités',
  'nav-statuses'                  => 'Statuts',
  'nav-configuration'             => 'Paramètres',
  'nav-administrator'             => 'Administrateurs',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nom',
  'table-action'                  => 'Action',
  'table-categories'              => 'Catégories',
  'table-join-category'           => 'Catégories à rejoindre',
  'table-remove-agent'            => 'Retirer des agents',
  'table-remove-administrator'    => 'Retirer des administrateurs', // New

  'table-slug'                    => 'Champs',
  'table-default'                 => 'Valeur par défaut',
  'table-value'                   => 'Ma Valeur',
  'table-lang'                    => 'Langue',
  'table-edit'                    => 'Editer',

  'btn-back'                      => 'Retour',
  'btn-delete'                    => 'Supprimer',
  'btn-edit'                      => 'Editer',
  'btn-join'                      => 'Joindre',
  'btn-remove'                    => 'Retirer',
  'btn-submit'                    => 'Envoyer',
  'btn-save'                      => 'Sauver',
  'btn-update'                    => 'Mettre à jour',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Gestionnaire des tickets',
  'index-empty-records'                 => 'Aucun Ticket',
  'index-total-tickets'                 => 'Total des tickets',
  'index-open-tickets'                  => 'tickets ouverts',
  'index-closed-tickets'                => 'tickets fermés',
  'index-performance-indicator'         => 'Indicateur de Performance',
  'index-periods'                       => 'Periodes',
  'index-3-months'                      => '3 mois',
  'index-6-months'                      => '6 mois',
  'index-12-months'                     => '12 mois',
  'index-tickets-share-per-category'    => 'Tickets par catégorie',
  'index-tickets-share-per-agent'       => 'Tickets par agent',
  'index-categories'                    => 'Catégories',
  'index-category'                      => 'Catégories',
  'index-agents'                        => 'Agents',
  'index-agent'                         => 'Agent',
  'index-administrators'                => 'Administrateurs',  //new
  'index-administrator'                 => 'Administrateur',  //new
  'index-users'                         => 'Utilisateurs',
  'index-user'                          => 'Utilisateur',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Ouvert',
  'index-closed'                        => 'Fermé',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mois',
  'index-performance-chart'             => 'Combien de jours en moyenne pour traiter un ticket ?',
  'index-categories-chart'              => 'Tickets distribués par catégorie',
  'index-agents-chart'                  => 'Tickets distribués par Agent',

// tickets-admin/agent/____
  'agent-index-title'             => 'Gestionnaire des Agents',
  'btn-create-new-agent'          => 'Créer un nouvel agent',
  'agent-index-no-agents'         => 'Aucun agent ici, ',
  'agent-index-create-new'        => 'Ajouter des agents',
  'agent-create-title'            => 'Ajouter un Agent',
  'agent-create-add-agents'       => 'Ajouter des Agents',
  'agent-create-no-users'         => 'Aucun compte utilisateur présent, créer avant un utilisateur.',
  'agent-create-select-user'      => 'Sélectionner un utilisateur à ajouter comme agent',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Gestionnaire des Administrateurs',  //new
  'btn-create-new-administrator'                => 'Créer un nouvel administrateur',  //new
  'administrator-index-no-administrators'       => 'Aucun administrateur, ',  //new
  'administrator-index-create-new'              => 'Ajouter aux administrateurs',  //new
  'administrator-create-title'                  => 'Ajouter un Administrateur',  //new
  'administrator-create-add-administrators'     => 'Ajouter aux Administrateurs',  //new
  'administrator-create-no-users'               => 'Aucun compte utilisateur présent, créer avant un utilisateur.',  //new
  'administrator-create-select-user'            => 'Sélectionner un utilisateur à ajouter aux administrateurs',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Gestionnaire des Catégories',
  'btn-create-new-category'       => 'Créer une nouvelle catégorie',
  'category-index-no-categories'  => 'Aucune catégorie, ',
  'category-index-create-new'     => 'créer une nouvelle catégorie',
  'category-index-js-delete'      => 'Confirmez-vous la suppression de la catégorie : ',
  'category-create-title'         => 'Créer une Nouvelle Catégorie',
  'category-create-name'          => 'Nom',
  'category-create-color'         => 'Couleur',
  'category-edit-title'           => 'Editer la Catégorie :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Gestionnaire des Priorités',
  'btn-create-new-priority'       => 'Créer une nouvelle priorité',
  'priority-index-no-priorities'  => 'Aucune priorité, ',
  'priority-index-create-new'     => 'créer une nouvelle priorité',
  'priority-index-js-delete'      => 'Confirmez-vous la suppression de la priorité : ',
  'priority-create-title'         => 'Créer une Nouvelle Priorité',
  'priority-create-name'          => 'Nom',
  'priority-create-color'         => 'Couleur',
  'priority-edit-title'           => 'Editer la Priorité: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Gestionnaire des Statuts',
  'btn-create-new-status'         => 'Créer un nouveau statut',
  'status-index-no-statuses'      => 'Aucun statut,',
  'status-index-create-new'       => 'créer un nouveau statut',
  'status-index-js-delete'        => 'Confirmez-vous la suppression du statut : ',
  'status-create-title'           => 'Créer un Nouveau Statut',
  'status-create-name'            => 'Nom',
  'status-create-color'           => 'Couleur',
  'status-edit-title'             => 'Editer le Statut: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Gestionnaire des Paramètres',
  'config-index-subtitle'         => 'Paramètres',
  'btn-create-new-config'         => 'Ajouter un nouveau paramètre',
  'config-index-no-settings'      => 'Aucun paramètre,',
  'config-index-initial'          => 'Initialisation',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notifications',
  'config-index-permissions'      => 'Permissions',
  'config-index-editor'           => 'Editeur', //Added: 2016.01.14
  'config-index-other'            => 'Autre',
  'config-create-title'           => 'Création: Nouveau Paramètre Global',
  'config-create-subtitle'        => 'Créer un Paramètre',
  'config-edit-title'             => 'Editer: Configuration Globale',
  'config-edit-subtitle'          => 'Editer le paramètre',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Champs',
  'config-edit-default'           => 'Valeur par défaut',
  'config-edit-value'             => 'Ma valeur',
  'config-edit-language'          => 'Langue',
  'config-edit-unserialize'       => 'Récupérer le tableau des valeurs, les modifier',
  'config-edit-serialize'         => 'Récupérer la chaine de caractères publiée (à mettre dans le champs)',
  'config-edit-should-serialize'  => 'Publier', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'Pour vérifier, le serveur lancera eval()!
  									  Ne pas utiliser si eval() est désactivé sur le serveur ou si vous ne savez pas exactement ce que vous faîtes!
  									  Code exact executé:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Ré-insérer votre mot de passe', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Mot de passe invalide', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Valeur invalide', //Added: 2016-01-16
  'config-edit-tools'             => 'Outils:',

];
