<?php
    Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/login', '/login');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
  
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServicesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('employees/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::resource('employees', 'EmployeesController');

    // Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    //banners
    Route::delete('banner/destroy', 'BannerController@massDestroy')->name('banner.massDestroy');
    Route::resource('banner', 'BannerController');
    //media
    Route::get('media', 'MediaController@index')->name('media');

    //category
   Route::delete('category/destroy', 'CategoryController@massDestroy')->name('category.massDestroy');
   Route::resource('category', 'CategoryController');
   
    //blog
    Route::delete('blog/destroy', 'BlogController@massDestroy')->name('blog.massDestroy');
    Route::resource('blog', 'BlogController');
    //setting
    Route::delete('setting/destroy', 'SettingController@massDestroy')->name('setting.massDestroy');
    Route::resource('setting', 'SettingController');
    Route::resource('mail', 'MailController');
    Route::get('home', 'HomeController@index')->name('home');

    //contact
    Route::delete('contact/destroy', 'ContactController@massDestroy')->name('contact.massDestroy');
    Route::resource('contact', 'ContactController');
    //order
    Route::delete('order/destroy', 'OrderController@massDestroy')->name('order.massDestroy');
    Route::resource('order', 'OrderController');
     //subscribe
     Route::delete('subscribe/destroy', 'SubscribeController@massDestroy')->name('subscribe.massDestroy');
     Route::get('subscribe/sendmail', 'SubscribeController@sendmail')->name('subscribe.sendmail');
     Route::post('subscribe/send', 'SubscribeController@send')->name('subscribe.send');
     Route::resource('subscribe', 'SubscribeController');
      //review
      Route::delete('review/destroy', 'ReviewController@massDestroy')->name('review.massDestroy');
      Route::resource('review', 'ReviewController');
      //vourcher
    
      Route::delete('review/vourcher', 'VourcherController@massDestroy')->name('vourcher.massDestroy');
      Route::resource('vourcher', 'VourcherController');
      //meber
      Route::delete('member/destroy', 'MemberController@massDestroy')->name('member.massDestroy');
      Route::resource('member', 'MemberController');
     
      Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
 //contact
 Route::group(["prefix"=>"contact"],function() {
    Route::get('/', 'HomeController@contact')->name('contact');
    Route::post('/saveContact', 'ContactController@CreateContact');
});

 //review
 Route::group(["prefix"=>"review"],function() {
    Route::get('/', 'ReviewController@ListReview');
    Route::post('/saveReview', 'ReviewController@CreateReview')->name('renew.submit');
});
 //order
 Route::group(["prefix"=>"order"],function() {
    Route::post('/saveOrder', 'OrderController@CreateOrder')->name('order.submit');
});
//order
Route::group(["prefix"=>"subscribe"],function() {
    Route::post('/savesubscribe', 'SubcribleController@CreateSubcrible')->name('subscribe.submit');
});

Route::prefix('member')->group(function() {
    Route::get('/login','MemberController@showLoginForm')->name('member.login');
    Route::post('/login', 'MemberController@login')->name('member.login.submit');
    Route::get('logout/', 'MemberController@logout')->name('member.logout');
    Route::get('/register','MemberController@showRegisterForm')->name('member.register');
    Route::post('/register', 'MemberController@register')->name('member.register.submit');
    Route::get('/profile','MemberController@profile')->name('member.profile');
    Route::put('/update', 'MemberController@updateProfile')->name('member.update.submit');
    Route::post('/password/reset','MemberController@sendMailResetPassword')->name('member.password.submit');
    Route::get('/password/reset','MemberController@resetPassword')->name('member.password.reset');
    Route::post('/password/update','MemberController@UpdatePassword')->name('member.password.change.update');
    Route::get('/password/change/{token}','MemberController@ChangePassword')->name('member.password.change');
    Route::get('/order','MemberController@order')->name('member.order');
    });
    //service
Route::group(["prefix"=>"service"],function() {
    Route::get('/', 'HomeController@service');
    Route::get('/{id}/{slug}', 'HomeController@detailservice');

});
Route::group(["prefix"=>"about"],function() {
    Route::get('/{id}/{slug}', 'HomeController@about');

});
Route::group(["prefix"=>"blog"],function() {
    Route::get('/', 'HomeController@blog');
    Route::get('/{id}/{slug}', 'HomeController@blogdetail');

});
Route::get('/send-markdown-mail', 'MailController@sendOfferMail');