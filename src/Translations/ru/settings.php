<?php

/*
 * Setting descriptions
 *
 * See Seeds/SettingsTableSeeder.php
 */

$codemirrorVersion = Kordy\Ticketit\Helpers\Cdn::CodeMirror;
$summernoteVersion = Kordy\Ticketit\Helpers\Cdn::Summernote;

return [

    'main_route'               => '<p><b>Ticketit основной route</b>: Базовый URL тикет-системы (например <code>http://&laquo;APP_URL&raquo;/tickets</code>)</p>',
    'admin_route'              => '<p><b>Ticketit административный route</b>: URL по которому будет находиться административная панель (например <code>http://&laquo;APP_URL&raquo;/tickets-admin</code>)</p>',
    'master_template'          => '<p><b>Базовые шаблоны</b>: Базовый шаблон (layout) веб-интерфейса</p>',
    'email.template'           => '<p><b>Базовый шаблоны</b>: Базовый шаблон (layout) для email</p>',
    'email.header'             => '<p><img src="http://i.imgur.com/5aJjuZL.jpg"/></p>',
    'email.signoff'            => '<p><img src="http://i.imgur.com/jONMwgF.jpg"/></p>',
    'email.signature'          => '<p><img src="http://i.imgur.com/coi3R63.jpg"/></p>',
    'email.dashboard'          => '<p><img src="http://i.imgur.com/qzNzJD4.jpg"/></p>',
    'email.google_plus_link'   => '<p><b>Ссылки на социальные сети</b>: пусто, либо строка</p><p><img src="http://i.imgur.com/fzyxfSg.jpg"/></p>',
    'email.facebook_link'      => '<p><b>Ссылки на социальные сети</b>: пусто, либо строка</p><p><img src="http://i.imgur.com/FQQzr98.jpg"/></p>',
    'email.twitter_link'       => '<p><b>Ссылки на социальные сети</b>: пусто, либо строка</p><p><img src="http://i.imgur.com/5JmkrF1.jpg"/></p>',
    'email.footer'             => '',
    'email.footer_link'        => '',
    'email.color_body_bg'      => '<p><img src="http://i.imgur.com/KTF7rEJ.jpg"/></p>',
    'email.color_header_bg'    => '<p><img src="http://i.imgur.com/wenw5H5.jpg"/></p>',
    'email.color_content_bg'   => '<p><img src="http://i.imgur.com/7r8dAFj.jpg"/></p>',
    'email.color_footer_bg'    => '<p><img src="http://i.imgur.com/KTjkdSN.jpg"/></p>',
    'email.color_button_bg'    => '<p><img src="http://i.imgur.com/0TbGIyt.jpg"/></p>',
    'default_status_id'        => '<p>Статус, назначаемый созданному тикету</p>',
    'default_close_status_id'  => '<p>Статус назначаемый тикету при закрытии</p>',
    'default_reopen_status_id' => '<p>Статус, назначаемый тикету при повторной активации</p>',
    'paginate_items'           => '<p><b>Число элементов на странице</b>: Обычная .</p>',
    'length_menu'              => '<p><b>Число элементов на странице</b>: Таблица тикетов</p>',

    'status_notification' => <<<'HTML'
			<p>
				<b>Уведомление о статусе</b>: отправлять уведомление владельцу и агенту тикета при смене статуса
			</p>

			<p>
				Отправлять (значение по умолчанию): <code>1</code><br>
				Не отправлять: <code>0</code>
			</p>
HTML
    ,

    'comment_notification' => <<<'HTML'
			<p>
				<b>Уведомление о комментарии</b>: Отправлять уведомление о новом комментарии
			</p>

			<p>
				Отправлять (значение по умолчанию): <code>1</code><br>
				Не отправлять: <code>0</code>
			</p>
HTML
    ,

    'queue_emails' => <<<'HTML'
			<p>
				Использовать очереди (queue) при отправке сообщений (Mail::queue вместо Mail::send).
				Обратите внимание, что Mail::queue должно быть настроено. Документация по настройке <a target="_blank" href="http://laravel.com/docs/master/queues">http://laravel.com/docs/master/queues</a>
			</p>

			<p>
				Не использовать очереди (значение по умолчанию): <code>0</code><br>
				Использовать очереди: <code>1</code>
			</p>
HTML
    ,

    'assigned_notification' => <<<'HTML'
			<p><b>Уведомления для агента</b>: Уведомлять агента при назначении его текита или о переносе тикета между категориями (включает и автоматическое назначение агента и выполненное вручную)</p>

			<p>
				Не уведомлять: <code>0</code><br>
				Уведомлять: <code>1</code>
			</p>
HTML
    ,

    'agent_restrict' => <<<'HTML'
			<p><b>Ограничение ответственности агентов</b>: Ограничивать доступ агентов только назначенными им тикетами</p>

			<p>
				Агент имеет доступ только к назначенным ему тикетам: <code>1</code>
			</p>
HTML
    ,

    'close_ticket_perm'        => '<p><b>Право закрытия тикета</b>: Кто может закрывать тикеты</p>',
    'reopen_ticket_perm'       => '<p><b>Право возобновления тикета</b>: Кто может возобновлять тикеты</p>',

    'delete_modal_type' => <<<'HTML'
			<p><b>Уведомление при удалении</b>: Выберите тип подтверждения при удалении тикета</p>

			<p>Варианты: <code>builtin</code> (встроенное), <code>modal</code> (модальное)</p>
HTML
    ,

    /* ------------------ JS EDITOR ------------------ */
    'editor_enabled' => <<<'HTML'
			<p>Использовать редактор summernote на текстовых блоках (textarea)</p>

			<p>
				Не использовать: <code>0</code><br>
				Использовать: <code>1</code>
			</p>
HTML
    ,

    'include_font_awesome' => <<<'HTML'
			<p>Подключать Font-awesome css. Выставьте <code>0</code>, если он уже используется на страницах</p>

			<p>
				Не подключать: <code>0</code><br>
				Подключать: <code>1</code>
			</p>
HTML
    ,

    'summernote_locale' => <<<'HTML'
			<p>
				Какой язык должен использовать summernote<br>
				Если указано <code>laravel</code>, будет использоваться та, что указана в <code>config/app.php</code>
			</p>

			<p>Например: <code>hu-HU</code> for Hungarian</p>

			<p>Доступные значения можно найти <a target="_blank" href="https://cdnjs.com/libraries/summernote/$summernoteVersion">https://cdnjs.com/libraries/summernote/$summernoteVersion</a></p>
HTML
    ,

    'editor_html_highlighter' => <<<'HTML'
			<p>Использовать подсветку синтаксиса codemirror или нет</p>

			<p><a target="_blank" href="http://summernote.org/examples/#codemirror-as-codeview">http://summernote.org/examples/#codemirror-as-codeview</a></p>

			<p>
				Не использовать: <code>0</code><br>
				Использовать: <code>1</code>
			</p>
HTML
    ,

    'codemirror_theme' => <<<'HTML'
			<p>Тема подсветки синтаксиса</p>

			<p>Доступные темы <a target="_blank" href="https://cdnjs.com/libraries/codemirror/$codemirrorVersion">https://cdnjs.com/libraries/codemirror/$codemirrorVersion</a></p>
HTML
    ,

    'summernote_options_json_file' => <<<'HTML'
			<p>
				Инициализируемые значения summernote в JSON<br>
				Доступные варианты <a target="_blank" href="http://summernote.org/deep-dive/#initialization-options">http://summernote.org/deep-dive/#initialization-options</a>
			</p>

			<p>Значение содержит путь к json-файлу относительно корня проекта</p>
HTML
    ,

    'purifier_config' => <<<'HTML'
			<p>Разрешенные HTML-теги</p>
			<p>
				Это значение переопределяет блок настроек файла <a target="_blank" href="https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php">https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php</a><br>
				Эта же конфигурация может быть достигнута выполнением команды <code>php artisan vendor:publish</code> и внесением нужных изменений в <code>config/purifier.php</code>
			</p>

			<p>Документация: <a target="_blank" href="http://htmlpurifier.org/docs">http://htmlpurifier.org/docs</a></p>
HTML
    ,

    'routes' => <<<'HTML'
			<p>Использовать собственный routes-файл вместо поставляемого пакетом</p>
			<p>
				Пригодится, если необходимо заменить или исключить некоторые компоненты Ticketit
			</p>
HTML

];
