<?php

return [

    /*
     *  Constants
     */
    'nav-settings'                  => 'Configuraciones',
    'nav-agents'                    => 'Agentes',
    'nav-dashboard'                 => 'Dashboard',
    'nav-categories'                => 'Categorias',
    'nav-priorities'                => 'Prioridades',
    'nav-statuses'                  => 'Estados',
    'nav-configuration'             => 'Ajustes',
    'nav-administrator'             => 'Administradores',  //new

    'table-hash'                    => '#',
    'table-id'                      => 'ID',
    'table-name'                    => 'Nombre',
    'table-action'                  => 'Accion',
    'table-categories'              => 'Categorias',
    'table-join-category'           => 'Categorias suscritas',
    'table-remove-agent'            => 'Quitar de agentes',
    'table-remove-administrator'    => 'Quitar de administradores', // New

    'table-slug'                    => 'Slug',
    'table-default'                 => 'Valor por defecto',
    'table-value'                   => 'Mi valor',
    'table-lang'                    => 'Lenguaje',
    'table-edit'                    => 'Editar',

    'btn-back'                      => 'Atras',
    'btn-delete'                    => 'Eliminar',
    'btn-edit'                      => 'Editar',
    'btn-join'                      => 'Unir',
    'btn-remove'                    => 'Eliminar',
    'btn-submit'                    => 'Aceptar',
    'btn-save'                      => 'Guardar',
    'btn-update'                    => 'Actualizar',

    'colon'                         => ': ',

    /*
     *  Page specific
     */

// tickets-admin/____
    'index-title'                         => 'Tickets System Dashboard',
    'index-empty-records'                 => 'No hay tickets aun',
    'index-total-tickets'                 => 'Total tickets',
    'index-open-tickets'                  => 'Tickets abiertos',
    'index-closed-tickets'                => 'Tickets cerrados',
    'index-performance-indicator'         => 'Indicador de rendimiento',
    'index-periods'                       => 'Periodos',
    'index-3-months'                      => '3 meses',
    'index-6-months'                      => '6 meses',
    'index-12-months'                     => '12 meses',
    'index-tickets-share-per-category'    => 'Tickets compartidos por categoria',
    'index-tickets-share-per-agent'       => 'Tickets compartidos por agente',
    'index-categories'                    => 'Categorias',
    'index-category'                      => 'Categoria',
    'index-agents'                        => 'Agentes',
    'index-agent'                         => 'Agente',
    'index-administrators'                => 'Administradores',  //new
    'index-administrator'                 => 'Administrador',  //new
    'index-users'                         => 'Usuarios',
    'index-user'                          => 'Usuario',
    'index-tickets'                       => 'Tickets',
    'index-open'                          => 'Abierto',
    'index-closed'                        => 'Cerrado',
    'index-total'                         => 'Total',
    'index-month'                         => 'Mes',
    'index-performance-chart'             => 'Cuantos dias en promedio para resolver un ticket?',
    'index-categories-chart'              => 'Tickets distribuidos por categoria',
    'index-agents-chart'                  => 'Tickets distribuidos por Agente',

// tickets-admin/agent/____
    'agent-index-title'             => 'Administracion de agentes',
    'btn-create-new-agent'          => 'Crear nuevo agente',
    'agent-index-no-agents'         => 'No hay agentes, ',
    'agent-index-create-new'        => 'Agregar agentes',
    'agent-create-title'            => 'Agregar Agente',
    'agent-create-add-agents'       => 'Agregar Agentes',
    'agent-create-no-users'         => 'No hay cuentas de usuarios, crea una primero',
    'agent-create-select-user'      => 'Selecciona cuentas de usuarios para ser agregadas como agentes',

// tickets-admin/administrators/____
    'administrator-index-title'                   => 'Administrar administradores',  //new
    'btn-create-new-administrator'                => 'Crear nuevo administrador',  //new
    'administrator-index-no-administrators'       => 'No hay administradores, ',  //new
    'administrator-index-create-new'              => 'Agregar administradores',  //new
    'administrator-create-title'                  => 'Agregar Administrador',  //new
    'administrator-create-add-administrators'     => 'Agregar administradores',  //new
    'administrator-create-no-users'               => 'No hay cuentas de usuarios, crea una primero.',  //new
    'administrator-create-select-user'            => 'Select user accounts to be added as administradores',  //new

// tickets-admin/category/____
    'category-index-title'          => 'Administrar Categorias',
    'btn-create-new-category'       => 'Crear nueva categoria',
    'category-index-no-categories'  => 'No hay Categorias, ',
    'category-index-create-new'     => 'crear nueva categoria',
    'category-index-js-delete'      => 'Estas seguro que quieres borrar la categoria: ',
    'category-create-title'         => 'Crear nueva Categoria',
    'category-create-name'          => 'Nombre',
    'category-create-color'         => 'Color',
    'category-edit-title'           => 'Editar nombre de categoria: :name',

// tickets-admin/priority/____
    'priority-index-title'          => 'Administrar Prioridades',
    'btn-create-new-priority'       => 'Crear nueva prioridad',
    'priority-index-no-priorities'  => 'No hay prioridades, ',
    'priority-index-create-new'     => 'crear nueva prioridad',
    'priority-index-js-delete'      => 'Estas seguro que quieres borrar la prioridad: ',
    'priority-create-title'         => 'Crear Nueva Prioridad',
    'priority-create-name'          => 'Nombre',
    'priority-create-color'         => 'Color',
    'priority-edit-title'           => 'Editar Prioridad: :name',

// tickets-admin/status/____
    'status-index-title'            => 'Administar Estados ',
    'btn-create-new-status'         => 'Crear nuevo estado',
    'status-index-no-statuses'      => 'No hay estados,',
    'status-index-create-new'       => 'crear nuevo estado',
    'status-index-js-delete'        => 'Estas seguro que quieres borrar el estado: ',
    'status-create-title'           => 'Crear Nuevo Estado',
    'status-create-name'            => 'Nombre',
    'status-create-color'           => 'Color',
    'status-edit-title'             => 'Edit Estado: :name',

// tickets-admin/configuration/____
    'config-index-title'            => 'Configurar Ajustes',
    'config-index-subtitle'         => 'Ajustes',
    'btn-create-new-config'         => 'Agregar nuevos ajustes',
    'config-index-no-settings'      => 'No hay ajustes,',
    'config-index-initial'          => 'Inicial',
    'config-index-tickets'          => 'Tickets',
    'config-index-notifications'    => 'Notificaciones',
    'config-index-permissions'      => 'Permisos',
    'config-index-editor'           => 'Editor', //Added: 2016.01.14
    'config-index-other'            => 'Otras',
    'config-create-title'           => 'Crear: Nuevos Ajustes Globales',
    'config-create-subtitle'        => 'Crear Ajuste',
    'config-edit-title'             => 'Editar: Configuracion Global',
    'config-edit-subtitle'          => 'Editar Ajuste',
    'config-edit-id'                => 'ID',
    'config-edit-slug'              => 'Slug',
    'config-edit-default'           => 'Valor por defecto',
    'config-edit-value'             => 'Mi valor',
    'config-edit-language'          => 'Lenguaje',
    'config-edit-unserialize'       => 'Tomar los valores del array, y cambiar los valores',
    'config-edit-serialize'         => 'Tomar la string serializada de los valores cambiados (para ser ingresados en el campo)',
    'config-edit-should-serialize'  => 'Serializar', //Added: 2016-01-16
    'config-edit-eval-warning'      => 'Cuando es este chequeado, el servidor va a ejecutar eval()!
  									  No usar si eval() esta deshabilitado en tu servidor o si no sabes exactamente lo que estas haciendo!
  									  Codigo exacto ejecutado:', //Added: 2016-01-16
    'config-edit-reenter-password'  => 'Vuelve a ingresar la clave', //Added: 2016-01-16
    'config-edit-auth-failed'       => 'Las claves no coinciden', //Added: 2016-01-16
    'config-edit-eval-error'        => 'Valor invalido', //Added: 2016-01-16
    'config-edit-tools'             => 'Herramientas:',

];
