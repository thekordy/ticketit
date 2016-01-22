<?php

return [

 /*  
  *  Constants
  */
  'nav-settings'                  => 'Configuración',
  'nav-agents'                    => 'Agentes',
  'nav-dashboard'                 => 'Estadísticas',
  'nav-categories'                => 'Categorías',
  'nav-priorities'                => 'Prioridades',
  'nav-statuses'                  => 'Estados',
  'nav-configuration'             => 'Configuración',
  'nav-administrator'             => 'Administradores',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nombre',
  'table-action'                  => 'Acción',
  'table-categories'              => 'Categorías',
  'table-join-category'           => 'Categorías asignadas',
  'table-remove-agent'            => 'Eliminar de agentes',
  'table-remove-administrator'    => 'Eliminar de administradores', // New

  'table-slug'                    => 'Slug',
  'table-default'                 => 'Valor por defecto',
  'table-value'                   => 'Mi valor',
  'table-lang'                    => 'Leng',
  'table-edit'                    => 'Editar',

  'btn-back'                      => 'Atrás',
  'btn-delete'                    => 'Eliminar',
  'btn-edit'                      => 'Editar',
  'btn-join'                      => 'Asignar',
  'btn-remove'                    => 'Remover',
  'btn-submit'                    => 'Enviar',
  'btn-save'                      => 'Guardar',
  'btn-update'                    => 'Actualizar',

  'colon'                         => ': ',

 /*  
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Panel de Control Sistema de Tickets',
  'index-empty-records'                 => 'No hay tickets aún',
  'index-total-tickets'                 => 'Total de tickets',
  'index-open-tickets'                  => 'Tickets abiertos',
  'index-closed-tickets'                => 'Tickets cerrados',
  'index-performance-indicator'         => 'Indicador de rendimiento',
  'index-periods'                       => 'Períodos',
  'index-3-months'                      => '3 meses',
  'index-6-months'                      => '6 meses',
  'index-12-months'                     => '12 meses',
  'index-tickets-share-per-category'    => 'Distribución de tickets por categoría',
  'index-tickets-share-per-agent'       => 'Distribución de tickets por agente',
  'index-categories'                    => 'Categorías',
  'index-category'                      => 'Categoría',
  'index-agents'                        => 'Agentes',
  'index-agent'                         => 'Agente',
  'index-administrators'                => 'Administradores',  //new
  'index-administrator'                 => 'Administrador',  //new
  'index-users'                         => 'Usuarios',
  'index-user'                          => 'Usuario',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Abiertos',
  'index-closed'                        => 'Cerrados',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mes',
  'index-performance-chart'             => '¿Cuántos días en promedio para solucionar un ticket?',
  'index-categories-chart'              => 'Distribución de tickets por categoría',
  'index-agents-chart'                  => 'Distribución de tickets por agente',

// tickets-admin/agent/____
  'agent-index-title'             => 'Administración de Agentes',
  'btn-create-new-agent'          => 'Registrar un agente',
  'agent-index-no-agents'         => 'No hay agentes, ',
  'agent-index-create-new'        => 'Registrar Agentes',
  'agent-create-title'            => 'Registrar Agentes',
  'agent-create-add-agents'       => 'Registrar Agentes',
  'agent-create-no-users'         => 'No hay cuentas de usuario, crea usuarios primero.',
  'agent-create-select-user'      => 'Selecciona las cuentas de usuario que deben ser añadidas como agentes',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Administración de Administradores',  //new
  'btn-create-new-administrator'                => 'Crear nuevo administrador',  //new
  'administrator-index-no-administrators'       => 'No hay administradores, ',  //new
  'administrator-index-create-new'              => 'Registrar administrador',  //new
  'administrator-create-title'                  => 'Registrar administrador',  //new
  'administrator-create-add-administrators'     => 'Registrar administradores',  //new
  'administrator-create-no-users'               => 'No hay cuentas de usuario, crea usuarios primero.',  //new
  'administrator-create-select-user'            => 'Selecciona las cuentas de usuario que deben ser añadidas como administradores',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Administración de categorías',
  'btn-create-new-category'       => 'Añadir una categoría',
  'category-index-no-categories'  => 'No hay categorías, ',
  'category-index-create-new'     => 'Crear nueva categoría',
  'category-index-js-delete'      => '¿Estás seguro que deseas eliminar la categoría: ',
  'category-create-title'         => 'Crear Nueva Categoría',
  'category-create-name'          => 'Nombre',
  'category-create-color'         => 'Color',
  'category-edit-title'           => 'Editar Categoría: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Administración de Prioridades',
  'btn-create-new-priority'       => 'Añadir una prioridad',
  'priority-index-no-priorities'  => 'No hay prioridades, ',
  'priority-index-create-new'     => 'Crear nueva prioridad',
  'priority-index-js-delete'      => '¿Estás seguro que deseas eliminar la prioridad: ',
  'priority-create-title'         => 'Crear Nueva Prioridad',
  'priority-create-name'          => 'Nombre',
  'priority-create-color'         => 'Color',
  'priority-edit-title'           => 'Editar Prioridad: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Administración de Estados',
  'btn-create-new-status'         => 'Añadir un estado',
  'status-index-no-statuses'      => 'No hay estados,',
  'status-index-create-new'       => 'Crear nuevo estado',
  'status-index-js-delete'        => '¿Estás seguro que deseas eliminar el estado: ',
  'status-create-title'           => 'Crear Nuevo Estado',
  'status-create-name'            => 'Nombre',
  'status-create-color'           => 'Color',
  'status-edit-title'             => 'Editar Estado: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Ajustes de Configuración',
  'config-index-subtitle'         => 'Ajustes',
  'btn-create-new-config'         => 'Añadir nuevo ajuste',
  'config-index-no-settings'      => 'No hay ajustes,',
  'config-index-initial'          => 'Inicial',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notificaciones',
  'config-index-permissions'      => 'Permisos',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Otros',
  'config-create-title'           => 'Crear: Nuevo Ajuste Global',
  'config-create-subtitle'        => 'Añadir Ajuste',
  'config-edit-title'             => 'Editar: Configuración Global',
  'config-edit-subtitle'          => 'Editar Ajuste',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Valor por defecto',
  'config-edit-value'             => 'Mi valor',
  'config-edit-language'          => 'Lenguaje',
  'config-edit-unserialize'       => 'Obtén los valores el arreglo, y cambia los valores',
  'config-edit-serialize'         => 'Obtén la cadena de texto serializada de los valores modificados (para ser ingresados en el campo)',
  'config-edit-should-serialize'  => 'Serializar', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'Cuando esté activado, el servidor va a ejecutar eval()!
  									  ¡No lo utilices si eval() esta desactivado en tu servidor o si no sabes exactamente que estás haciendo!
  									  Código exacto a ejecutar:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Vuelve a ingresar tu contraseña', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Las contraseñas no coinciden', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Valor inválido', //Added: 2016-01-16
  'config-edit-tools'             => 'Herramientas:',

];
