<?php

return [

    /*
     *  Constants
     */

    'nav-active-tickets'    => 'التذاكر النشطة',
    'nav-completed-tickets' => 'التذاكر المغلقة',
    'nav-public-tickets' => 'التذاكر العامة',

    // Tables
    'table-id'              => '#',
    'table-subject'         => 'الموضوع',
    'table-owner'           => 'المالك',
    'table-status'          => 'الحالة',
    'table-last-updated'    => 'آخر تحديث',
    'table-priority'        => 'الحالة',
    'table-agent'           => 'الوكيل',
    'table-category'        => 'التصنيف',

    // Datatables
    'table-decimal'         => '',
    'table-empty'           => 'لا توجد قيم في الجدول',
    'table-info'            => 'عرض _START_ إلى _END_ من _TOTAL_ entries',
    'table-info-empty'      => 'عرض 0 إلى 0 من 0 سجلات',
    'table-info-filtered'   => '(الفرز من _MAX_ إجمالي السجلات)',
    'table-info-postfix'    => '',
    'table-thousands'       => ',',
    'table-length-menu'     => 'عرض _MENU_ سجلات',
    'table-loading-results' => 'تحميل...',
    'table-processing'      => 'المعالجة...',
    'table-search'          => 'بحث:',
    'table-zero-records'    => 'لم يتم العثور على سجلات',
    'table-paginate-first'  => 'الأول',
    'table-paginate-last'   => 'الأخير',
    'table-paginate-next'   => 'التالي',
    'table-paginate-prev'   => 'السابق',
    'table-aria-sort-asc'   => ': فرز تصاعدي',
    'table-aria-sort-desc'  => ': فرز تنازلي',

    'btn-back'          => 'عودة',
    'btn-cancel'        => 'إلغاء', // NEW
    'btn-close'         => 'إغلاق',
    'btn-delete'        => 'حذف',
    'btn-edit'          => 'تعديل',
    'btn-mark-complete' => 'تحديد كمنتهي',
    'btn-mark-public'   => 'تحديد كعام',
    'btn-mark-unpublic' => 'تحديد كغير عام',
    'btn-submit'        => 'أرسل',

    'agent'                   => 'وكيل',
    'category'                => 'تصنيف',
    'colon'                   => ': ',
    'comments'                => 'تعليقات',
    'created'                 => 'تمت الإضافة',
    'description'             => 'الوصف',
    'flash-x'                 => '×', // &times;
    'last-update'             => 'آخر تحديث',
    'no-replies'              => 'لا توجد ردود.',
    'owner'                   => 'المالك',
    'priority'                => 'الأولوية',
    'reopen-ticket'           => 'إعادة فتح التذكرة',
    'reply'                   => 'رد',
    'responsible'             => 'المسؤول',
    'status'                  => 'الحالة',
    'subject'                 => 'الموضوع',

    /*
     *  Page specific
     */

// ____
    'index-title'             => 'الصفحة الرئيسية',

// tickets/____
    'index-my-tickets'        => 'تذاكري',
    'btn-create-new-ticket'   => 'تذكرة جديدة',
    'index-complete-none'     => 'لا توجد تذاكر منتهية',
    'index-active-check'      => 'تأكد من مراجعة التذاكر النشطة إذا لم تعثر على تذكرتك',
    'index-active-none'       => 'لا توجد تذاكر نشطة،',
    'index-create-new-ticket' => 'فتح تذكرة',
    'index-complete-check'    => 'تأكد من مراجعة التذاكر المكتملة إذا لم تعثر على تذكرتك.',

    'create-ticket-title'          => 'نموذج تذكرة جديدة',
    'create-new-ticket'            => 'تذكرة جديدة',
    'create-ticket-brief-issue'    => 'نبذة عن مشكلتك',
    'create-ticket-describe-issue' => 'وصف مشكلتك في التفاصيل',

    'show-ticket-title'                          => 'التذكرة',
    'show-ticket-js-delete'                      => 'هل أنت متأكد من رغبتك في الحذف: ',
    'show-ticket-modal-delete-title'             => 'حذف التذكرة',
    'show-ticket-modal-delete-message'           => 'هل أنت متأكد من رغبتك بحذف التذكرة: :subject؟',

    /*
     *  Controllers
     */

// AgentsController
    'agents-are-added-to-agents'                 => ':names تمت إضافتهم كوكلاء',
    'administrators-are-added-to-administrators' => ':names تمت إضافتهم كمدراء', //New
    'agents-joined-categories-ok'                => 'تم ضم الفئات بنجاح',
    'agents-is-removed-from-team'                => 'حذف الوكيل :name من فريق الوكلاء',
    'administrators-is-removed-from-team'        => 'حذف المدير :name من فريق المدراء', // New

// CategoriesController
    'category-name-has-been-created'             => 'تم إضافة التصنيف :name!',
    'category-name-has-been-modified'            => 'تم تعديل التصنيف :name!',
    'category-name-has-been-deleted'             => 'تم حذف التصنيف :name!',

// PrioritiesController
    'priority-name-has-been-created'             => 'تم إضافة الحالة :name!',
    'priority-name-has-been-modified'            => 'تم تعديل الحالة :name!',
    'priority-name-has-been-deleted'             => 'تم حذف الحالة :name!',
    'priority-all-tickets-here'                  => 'جميع الأولويات المتعلقة بالتذاكر',

// StatusesController
    'status-name-has-been-created'               => 'تم إضافة الحالة :name!',
    'status-name-has-been-modified'              => 'تم تعديل الحالة :name!',
    'status-name-has-been-deleted'               => 'تم حذف الحالة :name!',
    'status-all-tickets-here'                    => 'جميع الحالات المتعلقة بالتذاكر',

// CommentsController
    'comment-has-been-added-ok'                  => 'Comment has been added successfully',

// NotificationsController
    'notify-new-comment-from'                    => 'تعليق جديد من ',
    'notify-on'                                  => ' في ',
    'notify-status-to-complete'                  => ' الحالة كمنتهي',
    'notify-status-to'                           => ' الحالة إلى ',
    'notify-transferred'                         => ' نقل ',
    'notify-to-you'                              => ' إليك',
    'notify-created-ticket'                      => ' التذكرة المضافة ',
    'notify-updated'                             => ' معدّل ',

    // TicketsController
    'the-ticket-has-been-created'                => 'التذكرة المضافة!',
    'the-ticket-has-been-modified'               => 'التذكرة المعدّلة!',
    'the-ticket-has-been-deleted'                => 'تم حذف التذكرة :name!',
    'the-ticket-has-been-completed'              => 'تم إنهاء التذكرة :name!',
    'the-ticket-has-been-set-public'             => 'تم جعل التذكرة :name عامة!',
    'the-ticket-has-been-set-unpublic'           => 'تم جعل التذكرة :name غير عامة!',
    'the-ticket-has-been-reopened'               => 'تم إعادة فتح التذكرة :name!',
    'you-are-not-permitted-to-do-this'           => 'ليس لديك صلاحية القيام بهذا الأمر!',

    /*
    *  Middlewares
    */

    //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
    'you-are-not-permitted-to-access'            => 'ليس لديك صلاحية الدخول لهذه الصفحة!',

];
