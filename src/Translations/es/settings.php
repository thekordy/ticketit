<?php

/*
 * Setting descriptions
 *
 * See Seeds/SettingsTableSeeder.php
 */

$codemirrorVersion = Kordy\Ticketit\Helpers\Cdn::CodeMirror;
$summernoteVersion = Kordy\Ticketit\Helpers\Cdn::Summernote;

return [

    'main_route' => '<p><b>Ruta principal de Ticketit</b>: Url para la página princial del sistema de tiquetes (ej. <code>http://url/tickets</code>)</p>', 'admin_route' => '<p><b>Ruta de administración de Ticketit</b>: Url para la página de administración del sistema de tiquetes (ej. <code>http://url/tickets-admin</code>)</p>', 'master_template' => '<p><b>Plantilla que extender</b>: Pantillaa principal de blade a extender</p>', 'email.template' => '<p><b>Plantilla que extender</b>: Plantilla blade para emails a extender </p>', 'email.header' => '<p><img src="http://i.imgur.com/5aJjuZL.jpg"/></p>', 'email.signoff' => '<p><img src="http://i.imgur.com/jONMwgF.jpg"/></p>', 'email.signature' => '<p><img src="http://i.imgur.com/coi3R63.jpg"/></p>', 'email.dashboard' => '<p><img src="http://i.imgur.com/qzNzJD4.jpg"/></p>', 'email.google_plus_link' => '<p><b>Activar icono de enlace</b>: vacío o texto</p><p><img src="http://i.imgur.com/fzyxfSg.jpg"/></p>', 'email.facebook_link' => '<p><b>Activar icono de enlace</b>: vacío o texto</p><p><img src="http://i.imgur.com/FQQzr98.jpg"/></p>', 'email.twitter_link' => '<p><b>Activar icono de enlace</b>: vacío o texto</p><p><img src="http://i.imgur.com/5JmkrF1.jpg"/></p>', 'email.footer' => '', 'email.footer_link' => '', 'email.color_body_bg' => '<p><img src="http://i.imgur.com/KTF7rEJ.jpg"/></p>', 'email.color_header_bg' => '<p><img src="http://i.imgur.com/wenw5H5.jpg"/></p>', 'email.color_content_bg' => '<p><img src="http://i.imgur.com/7r8dAFj.jpg"/></p>', 'email.color_footer_bg' => '<p><img src="http://i.imgur.com/KTjkdSN.jpg"/></p>', 'email.color_button_bg' => '<p><img src="http://i.imgur.com/0TbGIyt.jpg"/></p>', 'default_status_id' => '<p>El estado predeterminado para tiquetes recién creados</p>', 'default_close_status_id' => '<p>El estado predeterminado para cerrar</p>', 'default_reopen_status_id' => '<p>El estado predeterminado para re-aperturas</p>', 'paginate_items' => '<p><b>Total de paginación</b>: Para paginación estándar.</p>', 'length_menu' => '<p><b>Total de paginación</b>: Para la tabla de tiquetes</p>', 'status_notification' => <<<'ENDHTML'
			<p>
				<b>Notificación de estado</b>: enviar notificaciones por email al dueño/agente del tiquete cuando el estado del tiquete es cambiado
			</p>

			<p>
				Predeterminado es enviar notificación: <code>1</code><br>
				No enviar notificación: <code>0</code>
			</p>
ENDHTML

    , 'comment_notification' => <<<'ENDHTML'
			<p>
				<b>Notificación de comentarios</b>: Send notification when new comment is posted
			</p>

			<p>
				Predeterminado es enviar notificación: <code>1</code><br>
				No enviar notificación: <code>0</code>
			</p>
ENDHTML

    , 'queue_emails' => <<<'ENDHTML'
			<p>
		        Usar el método de Cola cuando se envían correos (Mail::queue y no Mail::send).	    
		        Ten en cuenta que Mail::queue necesitada estar configurada primero <a target="_blank" href="http://laravel.com/docs/master/queues">http://laravel.com/docs/master/queues</a>
			</p>

			<p>
				Predeterminado es no enviar la cola: <code>0</code><br>
				Usar la cola: <code>1</code>
			</p>
ENDHTML

    , 'assigned_notification' => <<<'ENDHTML'
			<p><b>Notificar al agente</b>: Para notificar al agente asignado (ya sea por asignación automática o manual) de tiquetes nuevos asignados o tiquetes transferidos</p>

			<p>
				No notificar al agente: <code>0</code><br>
				Notificar al agente: <code>1</code>
			</p>
ENDHTML

    , 'agent_restrict' => <<<'ENDHTML'
            <p><b>Restricción de agente</b>: Restringir acceso de los agentes a solo los tiquetes que tienen asignados</p>			
			<p>
			    Agente solo puedes accesar sus tiquetes asignados: <code>1</code>				
			</p>
ENDHTML

    , 'close_ticket_perm' => '<p><b>Permiso para Cerrar Tiquetes</b>: ¿Quién tiene permiso para cerrar tiquetes?</p>', 'reopen_ticket_perm' => '<p><b>Permiso para Re-abrir Tiquetes</b>: ¿Quién tiene permiso para re-abrir tiquetes?</p>', 'delete_modal_type' => <<<'ENDHTML'
			<p><b>Confirmación para Borrar</b>: Seleccione el tipo de mensaje de confirmación para usar durante el borrado</p>

			<p>Opciones: <code>modal</code>, <code>integrada</code></p>
ENDHTML

    /* ------------------ JS EDITOR ------------------ */, 'editor_enabled' => <<<'ENDHTML'
			<p>Activar editor summernote en áreas de texto</p>

			<p>
				Desactivar: <code>0</code><br>
				Activar: <code>1</code>
			</p>
ENDHTML

    , 'include_font_awesome' => <<<'ENDHTML'
			<p>Si Font-awesome css se incluyo fuera de ticketit, deberías configurar esto como <code>0</code></p>

			<p>
				No incluir: <code>0</code><br>
				Incluir: <code>1</code>
			</p>
ENDHTML

    , 'summernote_locale' => <<<"ENDHTML"
			<p>
			    ¿Qué lenguaje debería usar el editor de texto summernote js?<br>
			    Si el valor es <code>laravel</code>, la locación elegida en <code>config/app.php</code> será usada 								
			</p>

			<p>Ejemplo: <code>hu-HU</code> para Húngaro</p>

			<p>Consulte los códigos de lenguaje disponibles <a target="_blank" href="https://cdnjs.com/libraries/summernote/$summernoteVersion">aquí</a></p>
ENDHTML

    , 'editor_html_highlighter' => <<<'ENDHTML'
            <p>Si incluir codemirror para resaltar la sintaxis o no</p>		
			<p><a target="_blank" href="http://summernote.org/examples/#codemirror-as-codeview">http://summernote.org/examples/#codemirror-as-codeview</a></p>

			<p>
				No incluir: <code>0</code><br>
				Incluir: <code>1</code>
			</p>
ENDHTML

    , 'codemirror_theme' => <<<'ENDHTML'
			<p>Tema para el resaltador de sintaxis</p>

			<p>Temas disponibles <a target="_blank" href="https://cdnjs.com/libraries/codemirror/$codemirrorVersion">aquí</a></p>
ENDHTML

    , 'summernote_options_json_file' => <<<'ENDHTML'
			<p>
			    Valores iniciales para el editor de texto summernote js en JSON<br> 	
			    Consulta las opciones disponibles <a target="_blank" href="http://summernote.org/deep-dive/#initialization-options">aquí</a>
			</p>

			<p>This setting stores the path to the json config file, relative to project route</p>
ENDHTML

    , 'purifier_config' => <<<'ENDHTML'
			<p>Configurar cuales etiquetas de html son permitidas </p>
			<p>
				Esto sobreescribe las configuraciones guardadas en <a target="_blank" href="https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php">este archivo</a><br>
				La misma configuración puede lograrse ejecutando <code>php artisan vendor:publish</code> y modificando <code>config/purifier.php</code>
			</p>

			<p>Documentación completa en: <a target="_blank" href="http://htmlpurifier.org/docs">http://htmlpurifier.org/docs</a></p>
ENDHTML

];
