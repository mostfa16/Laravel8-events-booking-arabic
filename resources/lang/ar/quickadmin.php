<?php

return [
	
	'user-management' => [
		'title' => 'إدارة المستخدم',
		'created_at' => 'الوقت',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'الأدوار',
		'created_at' => 'الوقت',
		'fields' => [
			'title' => 'العنوان',
		],
	],
	
	'users' => [
		'title' => 'المستخدمون',
		'created_at' => 'الوقت',
		'fields' => [
			'name' => 'الاسم',
			'email' => 'البريد الإلكتروني',
			'password' => 'كلمة المرور',
			'role' => 'الدور',
			'remember-token' => 'تذكر الرمز المميز',
		],
	],
	
	'events' => [
		'title' => 'الأحداث',
		'created_at' => 'الوقت',
		'fields' => [
			'id' => 'id',
			'title' => 'العنوان',
			'img' => 'صورة',
			'description' => 'الوصف',
			'start-time' => 'وقت البدء',
			'venue' => 'المكان',
		],
	],
	
	'tickets' => [
		'title' => 'التذاكر',
		'created_at' => 'الوقت',
		'fields' => [
			'event' => 'الحدث id',
			'title' => 'العنوان',
			'amount' => 'المبلغ',
			'available-from' => 'متاح من',
			'available-to' => 'متاح لـ',
			'price' => 'السعر',
		],
	],
	
	'payments' => [
		'title' => 'المدفوعات',
		'created_at' => 'الوقت',
		'fields' => [
			'email' => 'البريد الإلكتروني',
			'merchant' => 'التاجر',
			'amount' => 'المبلغ',
		],
	],	
	'custom_controller_index' => 'وحدة تحكم مخصصة',
	'quickadmin_title' => 'إدارة الأحداث',	
	'qa_home_title' => 'الأحداث',
	'qa_no_entries_in_table' => 'لا توجد إدخالات في الجدول',
	'qa_create' => 'إنشاء',
	'qa_save' => 'حفظ',
	'qa_edit' => 'تحرير',
	'qa_view' => 'عرض',
	'qa_update' => 'تحديث',
	'qa_list' => 'قائمة',
	'qa_login' => 'تسجيل الدخول',
	'qa_admin' => 'مشرف',
	'qa_logout' => 'تسجيل الخروج',
	'qa_current_password' => 'كلمة المرور الحالية',
	'qa_new_password' => 'كلمة مرور جديدة',
	'qa_new_password_conf' => 'تأكيد كلمة المرور الجديدة',
	'qa_add_new' => 'إضافة جديد',
	'qa_are_you_sure' => 'هل أنت متأكد؟',
	'qa_back_to_list' => 'الرجوع إلى القائمة',
	'qa_dashboard' => 'لوحة التحكم',
	'qa_home' => 'الصفحة الرئيسية',
	'qa_delete' => 'حذف',
	'qa_change_password' => 'تغيير كلمة المرور',
];