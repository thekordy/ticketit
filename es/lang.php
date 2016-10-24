<?php

return [

    /*
     *  Constants
     */

    'nav-active-tickets'               => 'Tickets activos',
    'nav-completed-tickets'            => 'Tickes completos',

    // Tables
    'table-id'                         => '#',
    'table-subject'                    => 'Asunto',
    'table-owner'                      => 'Propietario',
    'table-status'                     => 'Estado',
    'table-last-updated'               => 'Ultima actualizacion',
    'table-priority'                   => 'Prioridad',
    'table-agent'                      => 'Agente',
    'table-category'                   => 'Categoria',

    // Datatables
    'table-decimal'                    => '',
    'table-empty'                      => 'Sin informacion disponible en la tabla',
    'table-info'                       => 'Mostrando _START_ a _END_ de _TOTAL_ entradas',
    'table-info-empty'                 => 'Mostrando 0 a 0 de 0 entries',
    'table-info-filtered'              => '(filtrado de _MAX_ total entradas)',
    'table-info-postfix'               => '',
    'table-thousands'                  => ',',
    'table-length-menu'                => 'Mostrar _MENU_ entradas',
    'table-loading-results'            => 'Cargando...',
    'table-processing'                 => 'Procesando...',
    'table-search'                     => 'Buscar:',
    'table-zero-records'               => 'No se encontraron registros para la busqueda',
    'table-paginate-first'             => 'Primera',
    'table-paginate-last'              => 'Ultima',
    'table-paginate-next'              => 'Siguiente',
    'table-paginate-prev'              => 'Previa',
    'table-aria-sort-asc'              => ': activar para ordenar la columna ascendente',
    'table-aria-sort-desc'             => ': activar para ordenar la columna descendiente',

    'btn-back'                         => 'Atras',
    'btn-cancel'                       => 'Cancelar', // NEW
    'btn-close'                        => 'Cerrar',
    'btn-delete'                       => 'Borrar',
    'btn-edit'                         => 'Editar',
    'btn-mark-complete'                => 'Marcar como Completa',
    'btn-submit'                       => 'Aceptar',

    'agent'                            => 'Agente',
    'category'                         => 'Categoria',
    'colon'                            => ': ',
    'comments'                         => 'Comentarios',
    'created'                          => 'Creada',
    'description'                      => 'Descripcion',
    'flash-x'                          => '×', // &times;
    'last-update'                      => 'Ultima actualizacion',
    'no-replies'                       => 'Sin respuestas.',
    'owner'                            => 'Propietario',
    'priority'                         => 'Prioridad',
    'reopen-ticket'                    => 'Re-abrir Ticket',
    'reply'                            => 'Responder',
    'responsible'                      => 'Responsable',
    'status'                           => 'Estado',
    'subject'                          => 'Asunto',

    /*
     *  Page specific
     */

// ____
    'index-title'                      => 'Mesa de ayuda - Pagina principal',

// tickets/____
    'index-my-tickets'                 => 'Mis Tickets',
    'btn-create-new-ticket'            => 'Crear nuevo ticket',
    'index-complete-none'              => 'No hay tickets completos',
    'index-active-check'               => 'Asegurate de revisar tus tickets activos si no puedes encontrar tu ticket.',
    'index-active-none'                => 'No hay tickets activos,',
    'index-create-new-ticket'          => 'crear nuevo ticket',
    'index-complete-check'             => 'Asegurate de revisar tus tickets completados si no puedes encontrar tu ticket.',

    'create-ticket-title'              => 'Nuevo Ticket',
    'create-new-ticket'                => 'Crear Nuevo Ticket',
    'create-ticket-brief-issue'        => 'Breve descripcion de su problema',
    'create-ticket-describe-issue'     => 'Describe tu problema detalladamente aqui',

    'show-ticket-title'                => 'Ticket',
    'show-ticket-js-delete'            => 'Estas seguro que deseas eliminar: ',
    'show-ticket-modal-delete-title'   => 'Eliminar Ticket',
    'show-ticket-modal-delete-message' => 'Estas seguro que deseas eliminar el ticket: :subject?',

    /*
     *  Controllers
     */

// AgentsController
    'agents-are-added-to-agents'                      => 'Agentes :names son añadidos como agentes',
    'administrators-are-added-to-administrators'      => 'Administradores :names son añadidos como administradores', //New
    'agents-joined-categories-ok'                     => 'Suscrito a categorias exitosamente',
    'agents-is-removed-from-team'                     => 'Quitar agente\s :name del equipo de agentes',
    'administrators-is-removed-from-team'             => 'Quitar administradore\s :name del equipo de the administradores', // New

// CategoriesController
    'category-name-has-been-created'   => 'La categoria :name fue creada!',
    'category-name-has-been-modified'  => 'La categoria :name fue modificada!',
    'category-name-has-been-deleted'   => 'La categoria :name fue eliminada!',

// PrioritiesController
    'priority-name-has-been-created'   => 'La prioridad :name fue creada!',
    'priority-name-has-been-modified'  => 'La prioridad :name fue modificada!',
    'priority-name-has-been-deleted'   => 'La prioridad :name fue eliminada!',
    'priority-all-tickets-here'        => 'Todas los tickets con la misma prioridad aqui',

// StatusesController
    'status-name-has-been-created'   => 'El estado :name fue creada!',
    'status-name-has-been-modified'  => 'El estado :name fue modificada!',
    'status-name-has-been-deleted'   => 'El estado :name fue eliminada!',
    'status-all-tickets-here'        => 'Todos los tickets con el mismo estado aqui',

// CommentsController
    'comment-has-been-added-ok'        => 'Commentario agregado exitosamente',

// NotificationsController
    'notify-new-comment-from'          => 'Nuevo comentario de ',
    'notify-on'                        => ' en ',
    'notify-status-to-complete'        => ' estado a Completado',
    'notify-status-to'                 => ' estado a ',
    'notify-transferred'               => ' ha transferido ',
    'notify-to-you'                    => ' a ti',
    'notify-created-ticket'            => ' ticket creado ',
    'notify-updated'                   => ' ha actualizado ',

    // TicketsController
    'the-ticket-has-been-created'      => 'El ticket ha sido creado!',
    'the-ticket-has-been-modified'     => 'El ticket ha sido modificado!',
    'the-ticket-has-been-deleted'      => 'El ticket :name ha sido eliminado!',
    'the-ticket-has-been-completed'    => 'El ticket :name ha sido completado!',
    'the-ticket-has-been-reopened'     => 'El ticket :name ha sido re-abierto!',
    'you-are-not-permitted-to-do-this' => 'No tienes permiso para realizar esta accion!',

    /*
    *  Middlewares
    */

    //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
    'you-are-not-permitted-to-access'     => 'No tienes permiso para acceder a esta pagina!',

];
