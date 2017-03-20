<?php

return [

    /*
     *  Constants
     */
    'nav-settings'      => 'Настройки',
    'nav-agents'        => 'Агенты',
    'nav-dashboard'     => 'Рабочая область',
    'nav-categories'    => 'Категории',
    'nav-priorities'    => 'Приоритеты',
    'nav-statuses'      => 'Статусы',
    'nav-configuration' => 'Конфигурация',
    'nav-administrator' => 'Администратор',  //new

    'table-hash'                 => '#',
    'table-id'                   => 'ID',
    'table-name'                 => 'Название',
    'table-action'               => 'Действие',
    'table-categories'           => 'Категории',
    'table-join-category'        => 'Участие в категориях',
    'table-remove-agent'         => 'Исключить у агентов',
    'table-remove-administrator' => 'Исключить у администраторов', // New

    'table-slug'    => 'Код',
    'table-default' => 'Значение по умолчанию',
    'table-value'   => 'Значение',
    'table-lang'    => 'Язык',
    'table-edit'    => 'Редактировать',

    'btn-back'   => 'Назад',
    'btn-delete' => 'Удалить',
    'btn-edit'   => 'Редактировать',
    'btn-join'   => 'Включить',
    'btn-remove' => 'Исключить',
    'btn-submit' => 'Отправить',
    'btn-save'   => 'Сохранить',
    'btn-update' => 'Обновить',

    'colon' => ': ',

    /*
     *  Page specific
     */

// tickets-admin/____
    'index-title'                      => 'Рабочая область',
    'index-empty-records'              => 'Ни одного тикета еще не создано',
    'index-total-tickets'              => 'Всего тикетов',
    'index-open-tickets'               => 'Открытые тикеты',
    'index-closed-tickets'             => 'Закрытые тикеты',
    'index-performance-indicator'      => 'Индикатор быстродействия',
    'index-periods'                    => 'Интервалы',
    'index-3-months'                   => '3 месяца',
    'index-6-months'                   => '6 месяцев',
    'index-12-months'                  => '12 месяцев',
    'index-tickets-share-per-category' => 'Tickets share per category',
    'index-tickets-share-per-agent'    => 'Tickets share per agent',
    'index-categories'                 => 'Категории',
    'index-category'                   => 'Категория',
    'index-agents'                     => 'Агенты',
    'index-agent'                      => 'Агент',
    'index-administrators'             => 'Администраторы',  //new
    'index-administrator'              => 'Администратор',  //new
    'index-users'                      => 'Пользователи',
    'index-user'                       => 'Пользователь',
    'index-tickets'                    => 'Тикеты',
    'index-open'                       => 'Открытые',
    'index-closed'                     => 'Закрытые',
    'index-total'                      => 'Всего',
    'index-month'                      => 'Месяц',
    'index-performance-chart'          => 'Среднее число дней на обработку тикета',
    'index-categories-chart'           => 'Распределение по категориям',
    'index-agents-chart'               => 'Распределение по агентам',

// tickets-admin/agent/____
    'agent-index-title'        => 'Управление агентами',
    'btn-create-new-agent'     => 'Добавить агента',
    'agent-index-no-agents'    => 'Агенты отсутствуют, ',
    'agent-index-create-new'   => 'Добавить агентов',
    'agent-create-title'       => 'Добавить агента',
    'agent-create-add-agents'  => 'Добавить агентов',
    'agent-create-no-users'    => 'В системе нет ни одного пользователя. Необходимо добавить пользователей.',
    'agent-create-select-user' => 'Выберите пользователей, которые должны быть агентами',

// tickets-admin/administrators/____
    'administrator-index-title'               => 'Управление администраторами',  //new
    'btn-create-new-administrator'            => 'Добавить администратора',  //new
    'administrator-index-no-administrators'   => 'Администраторы отсутствуют, ',  //new
    'administrator-index-create-new'          => 'Добавить администраторов',  //new
    'administrator-create-title'              => 'Добавить администратора',  //new
    'administrator-create-add-administrators' => 'Добавить администраторов',  //new
    'administrator-create-no-users'           => 'В системе нет ни одного пользователя. Необходимо добавить пользователей.',  //new
    'administrator-create-select-user'        => 'Выберите пользователей, которые должны быть администраторами',  //new

// tickets-admin/category/____
    'category-index-title'         => 'Управление категориями',
    'btn-create-new-category'      => 'Добавить категорию',
    'category-index-no-categories' => 'Категории отсутствуют, ',
    'category-index-create-new'    => 'добавить категорию',
    'category-index-js-delete'     => 'Подтвердите удаление категории: ',
    'category-create-title'        => 'Добавить категорию',
    'category-create-name'         => 'Название',
    'category-create-color'        => 'Цвет',
    'category-edit-title'          => 'Редактирование категории: :name',

// tickets-admin/priority/____
    'priority-index-title'         => 'Управление приоритетами',
    'btn-create-new-priority'      => 'Добавить приоритет',
    'priority-index-no-priorities' => 'Приоритеты отсутствуют, ',
    'priority-index-create-new'    => 'добавить приоритет',
    'priority-index-js-delete'     => 'Подтвердите удаление приоритета: ',
    'priority-create-title'        => 'Добавить приоритет',
    'priority-create-name'         => 'Название',
    'priority-create-color'        => 'Цвет',
    'priority-edit-title'          => 'Редактирование приоритет: :name',

// tickets-admin/status/____
    'status-index-title'       => 'Управление статусами',
    'btn-create-new-status'    => 'Добавить статус',
    'status-index-no-statuses' => 'Статусы отсутствуют,',
    'status-index-create-new'  => 'добавить статус',
    'status-index-js-delete'   => 'Подтвердите удаление статуса: ',
    'status-create-title'      => 'Добавить статус',
    'status-create-name'       => 'Название',
    'status-create-color'      => 'Цвет',
    'status-edit-title'        => 'Редактирование статуса: :name',

// tickets-admin/configuration/____
    'config-index-title'           => 'Конфигурация',
    'config-index-subtitle'        => 'Настройки',
    'btn-create-new-config'        => 'Добавить настройку',
    'config-index-no-settings'     => 'Настройки отсутствуют,',
    'config-index-initial'         => 'Базовые настройки',
    'config-index-tickets'         => 'Тикеты',
    'config-index-notifications'   => 'Уведомления',
    'config-index-permissions'     => 'Разрешения',
    'config-index-editor'          => 'Визуальный HTML-редактор', //Added: 2016.01.14
    'config-index-other'           => 'Прочее',
    'config-create-title'          => 'Добавление новой глобальной настройки',
    'config-create-subtitle'       => 'Добавить настройку',
    'config-edit-title'            => 'Редактирование глобальной настройки',
    'config-edit-subtitle'         => 'Редактировать настройку',
    'config-edit-id'               => 'ID',
    'config-edit-slug'             => 'Код',
    'config-edit-default'          => 'Значение по умолчанию',
    'config-edit-value'            => 'Значение',
    'config-edit-language'         => 'Язык',
    'config-edit-unserialize'      => 'Вернуть "сырое" значение (PHP-представление)',
    'config-edit-serialize'        => 'Вернуть сериализованное значение',
    'config-edit-should-serialize' => 'Сериализовывать', //Added: 2016-01-16
    'config-edit-eval-warning'     => 'При включенной настройке, будет использоваться `eval()`!
    Не включайте, если `eval()` на вашем сервере отключен, или если не понимаете о чем идет речь!
    Код, выполняющийся в `eval()`:', //Added: 2016-01-16
    'config-edit-reenter-password' => 'Подтвердите пароль', //Added: 2016-01-16
    'config-edit-auth-failed'      => 'Пароли не совпадают', //Added: 2016-01-16
    'config-edit-eval-error'       => 'Некорректное значение', //Added: 2016-01-16
    'config-edit-tools'            => 'Инструменты:',

];
