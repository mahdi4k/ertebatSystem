<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'درخواست ها و گزارش های فعال',
  'nav-completed-tickets'            => 'درخواست ها و گزارش های تکمیل شده',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'موضوع',
  'table-owner'                      => 'مالک',
  'table-status'                     => 'وضعیت',
  'table-last-updated'               => 'آخرین بروزرسانی',
  'table-priority'                   => 'اولویت',
  'table-agent'                      => 'بررسی کننده',
  'table-category'                   => 'دسته',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'داده برای نمایش وجود ندارد',
  'table-info'                       => 'نمایش _START_ تا _END_ از مجموع _TOTAL_ مورد',
  'table-info-empty'                 => 'نمایش 0 تا 0 از 0 رکورد',
  'table-info-filtered'              => '(فیلتر شده از مجموع _MAX_ مورد)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'نمایش محتویات _MENU_ entries',
  'table-loading-results'            => 'بارگزاری...',
  'table-processing'                 => 'درحال پردازش...',
  'table-search'                     => ' :    ',
  'table-zero-records'               => 'موردی یافت نشد',
  'table-paginate-first'             => 'ابتدا',
  'table-paginate-last'              => 'انتها',
  'table-paginate-next'              => 'بعدی',
  'table-paginate-prev'              => 'قبلی',
  'table-aria-sort-asc'              => ': مرتب سازی بر اساس سعودی باشد',
  'table-aria-sort-desc'             => ': مرتب سازی بر اساس نزولی باشد',
  'phone_number'                     => ': شماره تماس',
  'FollowUp_area'                     => ': حوزه پیگیری',

  'btn-back'                         => 'بازگشت',
  'btn-cancel'                       => 'انصراف', // NEW
  'btn-close'                        => 'بستن',
  'btn-delete'                       => 'حذف',
  'btn-edit'                         => 'ویرایش',
  'btn-mark-complete'                => 'کامل شده است',
  'btn-submit'                       => 'ارسال',

  'agent'                            => 'نماینده',
  'category'                         => 'دسته',
  'colon'                            => ': ',
  'comments'                         => 'پاسخ ها',
  'created'                          => 'ایجاد شده',
  'description'                      => 'توضیحات',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'آخرین بروز رسانی',
  'no-replies'                       => 'بدون پاسخ.',
  'owner'                            => 'مالک',
  'priority'                         => 'اولویت',
  'reopen-ticket'                    => 'بازگشایی مجدد درخواست ها و گزارش ها ',
  'reply'                            => 'پاسخ',
  'responsible'                      => 'پاسخگو',
  'status'                           => 'وضعیت',
  'subject'                          => 'موضوع',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'صفحه اصلی درخواست ها و گزارش های ها',

// tickets/____
  'index-my-tickets'                 => 'درخواست ها و گزارش های من',
  'btn-create-new-ticket'            => 'درخواست ها و گزارش های جدید',
  'index-complete-none'              => 'درخواست ها و گزارش های کامل شده ای وجود ندارد',
  'index-active-check'               => 'اگر درخواست ها و گزارش های خود را یافت نمیکنید بخش درخواست ها و گزارش های  فعال را جستجو نمایید',
  'index-active-none'                => 'هیچ درخواست ها و گزارش های فعالی وجود ندارد,',
  'index-create-new-ticket'          => 'ایجاد درخواست ها و گزارش های جدید',
  'index-complete-check'             => 'اگر درخواست ها و گزارش های خود را یافت نمیکنید بخش تیتکت های کامل شده را جستجو نمایید.',

  'create-ticket-title'              => 'درخواست ها و گزارش های جدید از',
  'create-new-ticket'                => 'درخواست ها و گزارش های جدید',
  'create-ticket-brief-issue'        => 'شرح خلاصه ای از مشکلتان را بیان کنید',
  'create-ticket-describe-issue'     => 'جزییات کاملی از مشکل خود در این قسمت بیان کنید',

  'show-ticket-title'                => 'درخواست ها و گزارش ها',
  'show-ticket-js-delete'            => 'آیا قصد حذف این مورد را دارید : ',
  'show-ticket-modal-delete-title'   => 'حذف درخواست ها و گزارش ها',
  'show-ticket-modal-delete-message' => 'آیا میخواید این درخواست ها و گزارش ها را حذف نمایید: :موضوع?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'بررسی کننده گان :names به لیست مسئولان بررسی اضافه شدند',
  'administrators-are-added-to-administrators'      => 'مدیران :names به لیست مدیران اضافه شدند', //New
  'agents-joined-categories-ok'                     => 'مدیران به این دسته اضافه شدند',
  'agents-is-removed-from-team'                     => 'کاربر رسیدگی کننده ( :name ) از لیست خذف شد',
  'administrators-is-removed-from-team'             => 'مدیر ( :name ) از لیست مدیران حذف شد', // New

// CategoriesController
  'category-name-has-been-created'   => 'دسته :name اضافه شد!',
  'category-name-has-been-modified'  => 'دسته :name تغییر یافت!',
  'category-name-has-been-deleted'   => 'دسته :name حذف شد!',

// PrioritiesController
  'priority-name-has-been-created'   => 'اولویت :name اضافه شد!',
  'priority-name-has-been-modified'  => 'اولویت :name تغییر یافت!',
  'priority-name-has-been-deleted'   => 'اولویت :name حذف شد!',
  'priority-all-tickets-here'        => 'تمامی اولویت های درخواست ها و گزارش ها',

// StatusesController
  'status-name-has-been-created'   => 'وضعیت :name اضافه شد!',
  'status-name-has-been-modified'  => 'وضعیت :name تغییر یافت!',
  'status-name-has-been-deleted'   => 'وضعیت :name حذف شد!',
  'status-all-tickets-here'        => 'تمامی وضعیت های درخواست ها و گزارش ها',

// CommentsController
  'comment-has-been-added-ok'        => 'پاسخ با موفقیت اضافه گردید',

// NotificationsController
  'notify-new-comment-from'          => 'بدون هیچ پاسخی از ',
  'notify-on'                        => ' روشن ',
  'notify-status-to-complete'        => ' تغییر وضعیت به کامل شده ',
  'notify-status-to'                 => ' وضعیت به ',
  'notify-transferred'               => ' انتقال یافته ',
  'notify-to-you'                    => ' به شما ',
  'notify-created-ticket'            => ' درخواست ها و گزارش های اضافه شده ',
  'notify-updated'                   => ' بروز شده ',

 // TicketsController
  'the-ticket-has-been-created'      => 'درخواست ها و گزارش ها اضافه شد!',
  'the-ticket-has-been-modified'     => 'درخواست ها و گزارش های تغییر یافت!',
  'the-ticket-has-been-deleted'      => 'درخواست ها و گزارش ها :name حذف شد!',
  'the-ticket-has-been-completed'    => 'درخواست ها و گزارش ها :name کامل شد!',
  'the-ticket-has-been-reopened'     => 'درخواست ها و گزارش ها :name پاسخ داده شد!',
  'you-are-not-permitted-to-do-this' => 'شما اجازه این کار را ندارید!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'شما اجازه دسرتسی به این صفحه را ندارید',

];
