<?php

/*
 * Setting descriptions
 *
 * See Seeds/SettingsTableSeeder.php
 */

$codemirrorVersion = Kordy\Ticketit\Helpers\Cdn::CodeMirror;
$summernoteVersion = Kordy\Ticketit\Helpers\Cdn::Summernote;

return [

    'main_route' => '<p><b>Ruta principal de Ticketit</b>: En que dirección se carga el sistema de tickets (ej. <code>http://url/tickets</code>)</p>', 'admin_route' => '<p><b>Ruta de administración de Ticketit</b>: En que dirección se carga el panel de administración (ex. <code>http://url/tickets-admin</code>)</p>', 'master_template' => '<p><b>Adherencia a la plantilla</b>: La plantilla blade principal a ser extendida</p>', 'email.template' => '<p><b>Adherencia a la plantilla</b>: La plantilla blade de email a ser extendida</p>', 'email.header' => '<p><img src="http://i.imgur.com/5aJjuZL.jpg"/></p>', 'email.signoff' => '<p><img src="http://i.imgur.com/jONMwgF.jpg"/></p>', 'email.signature' => '<p><img src="http://i.imgur.com/coi3R63.jpg"/></p>', 'email.dashboard' => '<p><img src="http://i.imgur.com/qzNzJD4.jpg"/></p>', 'email.google_plus_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/fzyxfSg.jpg"/></p>', 'email.facebook_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/FQQzr98.jpg"/></p>', 'email.twitter_link' => '<p><b>Toogle icon link</b>: empty or string</p><p><img src="http://i.imgur.com/5JmkrF1.jpg"/></p>', 'email.footer' => '', 'email.footer_link' => '', 'email.color_body_bg' => '<p><img src="http://i.imgur.com/KTF7rEJ.jpg"/></p>', 'email.color_header_bg' => '<p><img src="http://i.imgur.com/wenw5H5.jpg"/></p>', 'email.color_content_bg' => '<p><img src="http://i.imgur.com/7r8dAFj.jpg"/></p>', 'email.color_footer_bg' => '<p><img src="http://i.imgur.com/KTjkdSN.jpg"/></p>', 'email.color_button_bg' => '<p><img src="http://i.imgur.com/0TbGIyt.jpg"/></p>', 'default_status_id' => '<p>El estado por defecto para tickets nuevos./p>', 'default_close_status_id' => '<p>El estado por defecto al cerrar un Ticket</p>', 'default_reopen_status_id' => '<p>El estado por defecto al reabrir un ticket</p>', 'paginate_items' => '<p><b>Longitud de paginación</b>: Para paginación estándar.</p>', 'length_menu' => '<p><b>Longitud de paginación</b>: Para la tabla de Tickets</p>', 'status_notification' => <<<ENDHTML
			<p>
				<b>Notificación de Estado</b>: Enviar email de notificación al usuario/agente del ticket cuando cambie el estado
			</p>

			<p>
				Por default se envía notificación: <code>1</code><br>
				No enviar notificación: <code>0</code>
			</p>
ENDHTML

    , 'comment_notification' => <<<ENDHTML
			<p>
				<b>Notificación de comentario</b>: Enviar notificación cuando se reciba un nuevo comentario
			</p>

			<p>
				Por default se envía notificación: <code>1</code><br>
				No enviar notificación: <code>0</code>
			</p>
ENDHTML

    , 'queue_emails' => <<<ENDHTML
			<p>
				Usar el método Queue al enviar emails (Mail::queue instead of Mail::send).
				Recuerda que Mail::queue necesita ser configurado primero <a target="_blank" href="http://laravel.com/docs/master/queues">http://laravel.com/docs/master/queues</a>
			</p>

			<p>
				Por default no se utiliza queue: <code>0</code><br>
				Usar queue: <code>1</code>
			</p>
ENDHTML

    , 'assigned_notification' => <<<ENDHTML
			<p><b>Notificar agente</b>: Notificar al agente asignado (ya sea vía automática o manual) de un nuevo ticket asignado o transferido</p>

			<p>
				No notificar al agente: <code>0</code><br>
				Notificar al agente: <code>1</code>
			</p>
ENDHTML

    , 'agent_restrict' => <<<ENDHTML
			<p><b>Restringir agentes</b>: Restringir el acceso al agente solamente a sus tickets asignados</p>

			<p>
				El agente solo puede acceder a tickets asignados: <code>1</code>
			</p>
ENDHTML

    , 'close_ticket_perm' => '<p><b>Permiso para Cerrar Tickets</b>: ¿Quien tiene permiso para cerrar tickets?</p>', 'reopen_ticket_perm' => '<p><b>Permiso para reabrir tickets</b>: ¿Quien tiene permiso para reabrir tickets?</p>', 'delete_modal_type' => <<<ENDHTML
			<p><b>Confirmación de eliminar</b>: Escoge que tipo de mensaje de confirmación mostrar cuando se confirma una eliminación</p>

			<p>Opciones: <code>builtin</code>, <code>modal</code></p>
ENDHTML

    /* ------------------ JS EDITOR ------------------ */, 'editor_enabled' => <<<ENDHTML
			<p>Activar Summernote Editor en campos de texto (textarea)</p>

			<p>
				Desactivar: <code>0</code><br>
				Activar: <code>1</code>
			</p>
ENDHTML

    , 'summernote_locale' => <<<"ENDHTML"
			<p>
				¿Qué lenguaje debe debe utilizar el editor de texto summernote.js?<br>
				Si el valor es <code>laravel</code>, se utilizará la configuración local (locale) de <code>config/app.php</code>
			</p>

			<p>Ejemplo: <code>es-ES</code> para Español</p>

			<p>Ver los lenguajes disponibles en el siguiente <a target="_blank" href="https://cdnjs.com/libraries/summernote/$summernoteVersion">link</a></p>
ENDHTML

    , 'editor_html_highlighter' => <<<ENDHTML
			<p>Incluir o noel editor de código con sytax highlighter (codemirror) </p>

			<p><a target="_blank" href="http://summernote.org/examples/#codemirror-as-codeview">http://summernote.org/examples/#codemirror-as-codeview</a></p>

			<p>
				No incluir: <code>0</code><br>
				Incluir: <code>1</code>
			</p>
ENDHTML

    , 'codemirror_theme' => <<<ENDHTML
			<p>Tema para el syntax highlighter</p>

			<p>Consulta los temas disponibles <a target="_blank" href="https://cdnjs.com/libraries/codemirror/$codemirrorVersion">aquí</a></p>
ENDHTML

    , 'summernote_options_json_file' => <<<ENDHTML
			<p>
				Valores iniciales para el editor de texto summernote js en JSON<br>
				Opciones disponibles <a target="_blank" href="http://summernote.org/deep-dive/#initialization-options">aquí</a>
			</p>

			<p>Esta configuración almacena la ruta al archivo JSON de configuración, relativo a la ruta del proyecto</p>
ENDHTML

    , 'purifier_config' => <<<ENDHTML
			<p>Configura que etiquetas HTML son permitidas</p>
			<p>
				Reemplaza las configuraciones de <a target="_blank" href="https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php">este archivo</a><br>
				La misma configuración puede ser alcanzada al ejecutar <code>php artisan vendor:publish</code> y modificando <code>config/purifier.php</code>
			</p>

			<p>Documentación completa: <a target="_blank" href="http://htmlpurifier.org/docs">http://htmlpurifier.org/docs</a></p>
ENDHTML

];
