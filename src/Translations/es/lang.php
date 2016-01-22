<?php

return [

 /*  
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets activos',
  'nav-completed-tickets'            => 'Tickets completados',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Asunto',
  'table-owner'                      => 'Propietario',
  'table-status'                     => 'Estado',
  'table-last-updated'               => 'Ultima actualización',
  'table-priority'                   => 'Prioridad',
  'table-agent'                      => 'Agente',
  'table-category'                   => 'Categoría',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'No hay información disponible...',
  'table-info'                       => 'Mostrando _START_ al _END_ de _TOTAL_ registros',
  'table-info-empty'                 => 'Mostrando 0 al 0 de 0 registros',
  'table-info-filtered'              => '(filtrado de _MAX_ registros)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Mostrar _MENU_ registros',
  'table-loading-results'            => 'Cargando...',
  'table-processing'                 => 'Procesando...',
  'table-search'                     => 'Buscar:',
  'table-zero-records'               => 'No se han encontrado registros',
  'table-paginate-first'             => 'Primera',
  'table-paginate-last'              => 'Última',
  'table-paginate-next'              => 'Siguiente',
  'table-paginate-prev'              => 'Anterior',
  'table-aria-sort-asc'              => ': activar para ordernar la columna de forma ascendente',
  'table-aria-sort-desc'             => ': activar para ordernar la columna de forma descendente',

  'btn-back'                         => 'Atrás',
  'btn-cancel'                       => 'Cancelar', // NEW
  'btn-close'                        => 'Cerrar',
  'btn-delete'                       => 'Eliminar',
  'btn-edit'                         => 'Editar',
  'btn-mark-complete'                => 'Marcar como Completado',
  'btn-submit'                       => 'Enviar',

  'agent'                            => 'Agente',
  'category'                         => 'Categoría',
  'colon'                            => ': ',
  'comments'                         => 'Comentarios',
  'created'                          => 'Creado',
  'description'                      => 'Descripción',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Última actualización',
  'no-replies'                       => 'No hay respuestas.',
  'owner'                            => 'Usuario',
  'priority'                         => 'Prioridad',
  'private'                          => 'Privado',
  'reopen-ticket'                    => 'Reabrir Ticket',
  'reply'                            => 'Responder',
  'responsible'                      => 'Responsable',
  'status'                           => 'Estado',
  'subject'                          => 'Asunto',
  'time-spent'                       => 'Tiempo trabajado',
  'file-upload'                      => 'Subir archivo',
 /*  
  *  Page specific
  */

// ____
  'index-title'                      => 'Página Principal Helpdesk',

// tickets/____
  'index-my-tickets'                 => 'Mis Tickets',
  'btn-create-new-ticket'            => 'Abrir un ticket',
  'index-complete-none'              => 'No hay tickets completados',
  'index-active-check'               => 'Asegurate de verificar en Tickets Activos si no puedes encontrar tu ticket',
  'index-active-none'                => 'No hay tickets activos,',
  'index-create-new-ticket'          => 'Abrir un ticket',
  'index-complete-check'             => 'Asegurate de verificar en Tickets Completados si no puedes encontrar tu ticket',

  'create-ticket-title'              => 'Abrir un Ticket',
  'create-new-ticket'                => 'Abrir un Ticket',
  'create-ticket-brief-issue'        => 'Una breve descripción de la solicitud',
  'create-ticket-describe-issue'     => 'Describe a detalle tu solicitud',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => '¿ Estás seguro que quieres eliminar: ',
  'show-ticket-modal-delete-title'   => 'Eliminar Ticket',
  'show-ticket-modal-delete-message' => '¿ Estás seguro que quieres eliminar el ticket:subject?',

 /*  
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Los siguientes usuarios :names fueron añadidos como Agentes',
  'administrators-are-added-to-administrators'      => 'Los siguientes usuarios :names fueron añadidos como Administradores',
  'agents-joined-categories-ok'                     => 'Asignación de categorías exitosa',
  'agents-is-removed-from-team'                     => 'Se ha(n) eliminado el(los) agentes :name del grupo de agentes',
  'administrators-is-removed-from-team'             => 'Se ha(n) eliminado el(los) administradores :name del grupo de administradores',

// CategoriesController
  'category-name-has-been-created'   => 'La categoría :name ha sido creada!',
  'category-name-has-been-modified'  => 'La categoría :name ha sido modificada!',
  'category-name-has-been-deleted'   => 'La categoría :name ha sido eliminada!',

// PrioritiesController
  'priority-name-has-been-created'   => 'La prioridad :name ha sido creada!',
  'priority-name-has-been-modified'  => 'La prioridad :name ha sido modificada!',
  'priority-name-has-been-deleted'   => 'La prioridad :name ha sido eliminada!',
  'priority-all-tickets-here'        => 'Todos los tickes relacionados a la prioridad',

// StatusesController
  'status-name-has-been-created'   => 'El estado :name ha sido creado!',
  'status-name-has-been-modified'  => 'El estado :name ha sido modificado!',
  'status-name-has-been-deleted'   => 'El estado :name ha sido eliminado!',
  'status-all-tickets-here'        => 'Todos los tickets relacionados al estado',

// CommentsController
  'comment-has-been-added-ok'        => 'El comentario se ha añadido correctamente!',

// NotificationsController
  'notify-new-comment-from'          => 'Nuevo comentario de ',
  'notify-on'                        => ' en el ticket ',
  'notify-status-to-complete'        => ' estado como Completado',
  'notify-status-to'                 => ' estado a ',
  'notify-transferred'               => ' ticket transferido ',
  'notify-to-you'                    => ' a ti',
  'notify-created-ticket'            => ' ticket creado ',
  'notify-updated'                   => ' ticket modificado ',

 // TicketsController
  'the-ticket-has-been-created'      => 'El ticket ha sido creado!',
  'the-ticket-has-been-modified'     => 'El ticket ha sido modificado!',
  'the-ticket-has-been-deleted'      => 'El ticket :name ha sido eliminado!',
  'the-ticket-has-been-completed'    => 'El ticket :name ha sido marcado como completo!',
  'the-ticket-has-been-reopened'     => 'El ticket :name ha sido reabierto!',
  'you-are-not-permitted-to-do-this' => 'No tienes permiso para realizar esta acción!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => '¡No tienes permiso de acceder a esta página!',

];
