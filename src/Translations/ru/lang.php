<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Открытые Тикеты',
  'nav-completed-tickets'            => 'Завершенные Тикеты',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Тема',
  'table-owner'                      => 'Владелец',
  'table-status'                     => 'Статус',
  'table-last-updated'               => 'Последнее изменение',
  'table-priority'                   => 'Приоритет',
  'table-agent'                      => 'Агент',
  'table-category'                   => 'Категория',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Записи отсутствуют',
  'table-info'                       => 'Показаны с _START_ по _END_ из _TOTAL_ записей',
  'table-info-empty'                 => 'Записи отсутствуют',
  'table-info-filtered'              => '(отфильтровано из _MAX_ записей)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Показывать _MENU_ записей',
  'table-loading-results'            => 'Загружается...',
  'table-processing'                 => 'Обрабатывается...',
  'table-search'                     => 'Поиск:',
  'table-zero-records'               => 'Подходящие записи не найдены',
  'table-paginate-first'             => 'Первая',
  'table-paginate-last'              => 'Последняя',
  'table-paginate-next'              => 'Следующая',
  'table-paginate-prev'              => 'Предыдущая',
  'table-aria-sort-asc'              => ': сортировать по возрастанию',
  'table-aria-sort-desc'             => ': сортировать по убыванию',

  'btn-back'                         => 'Назад',
  'btn-cancel'                       => 'Отмена', // NEW
  'btn-close'                        => 'Закрыть',
  'btn-delete'                       => 'Удалить',
  'btn-edit'                         => 'Редактировать',
  'btn-mark-complete'                => 'Пометить выполненным',
  'btn-submit'                       => 'Отправить',

  'agent'                            => 'Агент',
  'category'                         => 'Категория',
  'colon'                            => ': ',
  'comments'                         => 'Комментарии',
  'created'                          => 'Дата создания',
  'description'                      => 'Описания',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Последнее изменение',
  'no-replies'                       => 'Нет откликов.',
  'owner'                            => 'Владелец',
  'priority'                         => 'Приоритет',
  'reopen-ticket'                    => 'Открыть Тикет повторно',
  'reply'                            => 'Ответить',
  'responsible'                      => 'Ответственный',
  'status'                           => 'Статус',
  'subject'                          => 'Тема',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Главная страница Helpdesk',

// tickets/____
  'index-my-tickets'                 => 'Мои тикеты',
  'btn-create-new-ticket'            => 'Создать тикет',
  'index-complete-none'              => 'Заввершенные тикеты отсутствуют',
  'index-active-check'               => 'Если не получается найти нужный тикет здесь - проверьте список активных.',
  'index-active-none'                => 'Открытые тикеты отсутствуют,',
  'index-create-new-ticket'          => 'создать новый тикет',
  'index-complete-check'             => 'Если не получается найти нужный тикет здесь - проверьте список завершенных.',

  'create-ticket-title'              => 'Создание Тикета',
  'create-new-ticket'                => 'Создание Тикета',
  'create-ticket-brief-issue'        => 'Краткое описание',
  'create-ticket-describe-issue'     => 'Описание',

  'show-ticket-title'                => 'Тикет',
  'show-ticket-js-delete'            => 'Подтвердите удаление: ',
  'show-ticket-modal-delete-title'   => 'Удалить Тикет',
  'show-ticket-modal-delete-message' => 'Подтвердите удаление: :subject',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Агенты :names добавлены агентам',
  'administrators-are-added-to-administrators'      => 'Администраторы :names добавлены администраторам', //New
  'agents-joined-categories-ok'                     => 'Категории успешно назначены',
  'agents-is-removed-from-team'                     => 'Агент :name исключен из группы агентов',
  'administrators-is-removed-from-team'             => 'Администратор :name исключен из группы администраторов', // New

// CategoriesController
  'category-name-has-been-created'   => 'Категория :name создана!',
  'category-name-has-been-modified'  => 'Категория :name обновлена!',
  'category-name-has-been-deleted'   => 'Категория :name удалена!',

// PrioritiesController
  'priority-name-has-been-created'   => 'Приоритет :name создан!',
  'priority-name-has-been-modified'  => 'Приоритет :name обновлен!',
  'priority-name-has-been-deleted'   => 'Приоритет :name удален!',
  'priority-all-tickets-here'        => 'Показаны все тикеты выбранного приоритета',

// StatusesController
  'status-name-has-been-created'   => 'Статус :name создан!',
  'status-name-has-been-modified'  => 'Статус :name обновлен!',
  'status-name-has-been-deleted'   => 'Статус :name удален!',
  'status-all-tickets-here'        => 'Показаны все тикеты в выбранном статусе',

// CommentsController
  'comment-has-been-added-ok'        => 'Комментарий успешно добавлен',

// NotificationsController
  'notify-new-comment-from'          => 'Новый комментарий от ',
  'notify-on'                        => ' на ',
  'notify-status-to-complete'        => ' статус на Завершенный',
  'notify-status-to'                 => ' статус на ',
  'notify-transferred'               => ' переназначен ',
  'notify-to-you'                    => ' вам',
  'notify-created-ticket'            => ' тикет создан ',
  'notify-updated'                   => ' обновлено ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Тикет создан!',
  'the-ticket-has-been-modified'     => 'Тикет обновлен!',
  'the-ticket-has-been-deleted'      => 'Тикет :name удален!',
  'the-ticket-has-been-completed'    => 'Тикет :name выполнен!',
  'the-ticket-has-been-reopened'     => 'Тикет :name повторно открыт!',
  'you-are-not-permitted-to-do-this' => 'Нет доступа к этому действию!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Нет доступа к этой странице!',

];
