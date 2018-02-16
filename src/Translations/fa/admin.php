<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'تنظیمات',
  'nav-agents'                    => 'نمایندگان',
  'nav-dashboard'                 => 'داشبورد',
  'nav-categories'                => 'دسته ها',
  'nav-priorities'                => 'اولویت ها',
  'nav-statuses'                  => 'وضعیت ها',
  'nav-configuration'             => 'تنظیمات',
  'nav-administrator'             => 'مدیر',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'کد شناسایی',
  'table-name'                    => 'نام',
  'table-action'                  => 'عملیات',
  'table-categories'              => 'دسته ها',
  'table-join-category'           => 'دسته بندی های عضو شده',
  'table-remove-agent'            => 'حذف از لیست نمایندگی ها',
  'table-remove-administrator'    => 'حذف از لیست مدیران', // New

  'table-slug'                    => 'کلمه سئو',
  'table-default'                 => 'مقدار پیشفرض',
  'table-value'                   => 'مقدار من',
  'table-lang'                    => 'زبان',
  'table-edit'                    => 'ویرایش',

  'btn-back'                      => 'بازگشت',
  'btn-delete'                    => 'حذف',
  'btn-edit'                      => 'ویرایش',
  'btn-join'                      => 'پیوستن',
  'btn-remove'                    => 'حذف',
  'btn-submit'                    => 'ارسال',
  'btn-save'                      => 'دخیره',
  'btn-update'                    => 'بروزرسانی',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'داشبورد سیستم تیکتینگ',
  'index-empty-records'                 => 'هیچ تیکتی وجود ندارد',
  'index-total-tickets'                 => 'مجموع کل تیکت ها',
  'index-open-tickets'                  => 'تیکت های باز',
  'index-closed-tickets'                => 'تیکت های بسته شده',
  'index-performance-indicator'         => 'نمایشگر کارایی',
  'index-periods'                       => 'بازه زمانی',
  'index-3-months'                      => '3 ماه',
  'index-6-months'                      => '6 ماه',
  'index-12-months'                     => '12 ماه',
  'index-tickets-share-per-category'    => 'تیکت های موجود در هر دسته',
  'index-tickets-share-per-agent'       => 'تیکت های مشترک شده به تفکیک نمایندگان',
  'index-categories'                    => 'دسته ها',
  'index-category'                      => 'دسته',
  'index-agents'                        => 'نمایندگان',
  'index-agent'                         => 'نماینده',
  'index-administrators'                => 'مدیران',  //new
  'index-administrator'                 => 'مدیر',  //new
  'index-users'                         => 'کاربران',
  'index-user'                          => 'کاربر',
  'index-tickets'                       => 'تیکت ها',
  'index-open'                          => 'باز',
  'index-closed'                        => 'بسته شده',
  'index-total'                         => 'مجموع',
  'index-month'                         => 'ماه',
  'index-performance-chart'             => 'میانگین پاسخ به تیکت بر حسب روز?',
  'index-categories-chart'              => 'تیکت های عرضه شده برحست دسته ها',
  'index-agents-chart'                  => 'تیکتها نمایندگان',

// tickets-admin/agent/____
  'agent-index-title'             => 'مدیریت نماینده',
  'btn-create-new-agent'          => 'ایجاد نماینده جدید',
  'agent-index-no-agents'         => 'هیچ نماینده ای وجود ندارد, ',
  'agent-index-create-new'        => 'ایجاد نمایندگان',
  'agent-create-title'            => 'ایجاد نماینده',
  'agent-create-add-agents'       => 'ایجاد نمایندگان',
  'agent-create-no-users'         => 'هیچ حساب کاربری موجود نمی باشد , ابتدا حساب های کاربری را ایجاد نمایید.',
  'agent-create-select-user'      => 'یک کاربر برای اضافه شدن به لیست نماینده گان انتخاب کنید',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'مدیریت مدیران',  //new
  'btn-create-new-administrator'                => 'ایجاد مدیر جدید',  //new
  'administrator-index-no-administrators'       => 'هیچ مدیری یافت نشد, ',  //new
  'administrator-index-create-new'              => 'اضافه کردن مدیران',  //new
  'administrator-create-title'                  => 'مدیر جدید',  //new
  'administrator-create-add-administrators'     => 'مدیران جدید',  //new
  'administrator-create-no-users'               => 'هیچ حساب کاربری موجود نمی باشد , ابتدا حساب های کاربری را ایجاد نمایید.',  //new
  'administrator-create-select-user'            => 'یک کاربر برای اضافه شدن به لیست مدیران انتخاب کنید',  //new

// tickets-admin/category/____
  'category-index-title'          => 'مدیریت دسته ها',
  'btn-create-new-category'       => 'دسته جدید',
  'category-index-no-categories'  => 'هیچ دسته ای یافت نشد, ',
  'category-index-create-new'     => 'ایجاد دسته جدید',
  'category-index-js-delete'      => 'آیا نسب به حذف این دسته اطمینان دارید: ',
  'category-create-title'         => 'ایجاد دسته جدید',
  'category-create-name'          => 'نام دسته',
  'category-create-color'         => 'رنگ',
  'category-edit-title'           => 'ویرایش دسته: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'مدیریت اولویت ها',
  'btn-create-new-priority'       => 'ایجاد اولویت',
  'priority-index-no-priorities'  => 'هیچ موردی یافت نشد, ',
  'priority-index-create-new'     => 'ایجاد اولویت جدید',
  'priority-index-js-delete'      => 'آیا نسب به حذف این اولویت اطمینان دارید: ',
  'priority-create-title'         => 'ایجاد اولویت جدید',
  'priority-create-name'          => 'نام',
  'priority-create-color'         => 'رنگ',
  'priority-edit-title'           => 'ویرایش اولویت: :name',

// tickets-admin/status/____
  'status-index-title'            => 'مدیریت وضعیت ها',
  'btn-create-new-status'         => 'ایجاد وضعیت جدید',
  'status-index-no-statuses'      => 'هیچ موردی یافت نشد,',
  'status-index-create-new'       => 'ایجاد وضعیت های جدید',
  'status-index-js-delete'        => 'آیا نسب به حذف این وضعیت اطمینان دارید: ',
  'status-create-title'           => 'ایجاد وضعیت جدید',
  'status-create-name'            => 'نام وضعیت',
  'status-create-color'           => 'رنگ',
  'status-edit-title'             => 'ویرایش وضعیت: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'تنظیمات بخش تیکت',
  'config-index-subtitle'         => 'تنظیمات',
  'btn-create-new-config'         => 'ایجاد رکورد تنظیمات جدید',
  'config-index-no-settings'      => 'هیچ موردی یافت نشد,',
  'config-index-initial'          => 'اولیه',
  'config-index-tickets'          => 'تیکت ها',
  'config-index-notifications'    => 'هشدار',
  'config-index-permissions'      => 'سطوح دسترسی',
  'config-index-editor'           => 'ویرایشگر', //Added: 2016.01.14
  'config-index-other'            => 'دیگر',
  'config-create-title'           => 'ایجاد : تنظیمات عمومی',
  'config-create-subtitle'        => 'ایجاد رکورد تنظیمات',
  'config-edit-title'             => 'ویرایش : تنظیمات عمومی',
  'config-edit-subtitle'          => 'ویرایش تنظیمات',
  'config-edit-id'                => 'شناسه',
  'config-edit-slug'              => 'کلمه شناسه',
  'config-edit-slug'              => ' شناسه ',
  'config-edit-default'           => 'مقدار پیشفرض',
  'config-edit-value'             => 'مقدار من',
  'config-edit-language'          => 'زبان',
  'config-edit-unserialize'       => 'Get the array values, and change the values',
  'config-edit-serialize'         => 'Get the serialized string of the changed values (to be entered in the field)',
  'config-edit-should-serialize'  => 'Serialize', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'پسورد خود را مجددا وارد نمایید', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'رمز عبور مطابقت ندارد', //Added: 2016-01-16
  'config-edit-eval-error'        => 'مقدار نامعتبر', //Added: 2016-01-16
  'config-edit-tools'             => 'ابزارها:',

];
