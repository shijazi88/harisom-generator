<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Car Models
    Route::delete('car-models/destroy', 'CarModelsController@massDestroy')->name('car-models.massDestroy');
    Route::resource('car-models', 'CarModelsController');

    // Package
    Route::delete('packages/destroy', 'PackageController@massDestroy')->name('packages.massDestroy');
    Route::resource('packages', 'PackageController');

    // Package Period
    Route::delete('package-periods/destroy', 'PackagePeriodController@massDestroy')->name('package-periods.massDestroy');
    Route::resource('package-periods', 'PackagePeriodController');

    // Question
    Route::delete('questions/destroy', 'QuestionController@massDestroy')->name('questions.massDestroy');
    Route::resource('questions', 'QuestionController');

    // Answer
    Route::delete('answers/destroy', 'AnswerController@massDestroy')->name('answers.massDestroy');
    Route::resource('answers', 'AnswerController');

    // Sms
    Route::resource('smss', 'SmsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Worker
    Route::delete('workers/destroy', 'WorkerController@massDestroy')->name('workers.massDestroy');
    Route::resource('workers', 'WorkerController');

    // Service
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServiceController');

    // Coupon
    Route::delete('coupons/destroy', 'CouponController@massDestroy')->name('coupons.massDestroy');
    Route::resource('coupons', 'CouponController');

    // Customer
    Route::delete('customers/destroy', 'CustomerController@massDestroy')->name('customers.massDestroy');
    Route::resource('customers', 'CustomerController');

    // Customer Wallet
    Route::delete('customer-wallets/destroy', 'CustomerWalletController@massDestroy')->name('customer-wallets.massDestroy');
    Route::resource('customer-wallets', 'CustomerWalletController');

    // Customer Address
    Route::delete('customer-addresses/destroy', 'CustomerAddressController@massDestroy')->name('customer-addresses.massDestroy');
    Route::resource('customer-addresses', 'CustomerAddressController');

    // Worker Address
    Route::delete('worker-addresses/destroy', 'WorkerAddressController@massDestroy')->name('worker-addresses.massDestroy');
    Route::resource('worker-addresses', 'WorkerAddressController');

    // Vehicle
    Route::delete('vehicles/destroy', 'VehicleController@massDestroy')->name('vehicles.massDestroy');
    Route::resource('vehicles', 'VehicleController');

    // Subscription
    Route::resource('subscriptions', 'SubscriptionController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
