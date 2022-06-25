<?php

use App\Notifications\NewUser;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return "Cleared!";
});



Route::get('/migrate', function () {
    // \Artisan::call('migrate:fresh');
    \Artisan::call('db:seed');
    dd('migrated!');
});


Route::get('/', function () {
    return view('site');
});
Route::get('/home', function () {
    return redirect()->route('login');
})->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {



        Route::get('/index', function () {
            return redirect()->route('login');
        });


        Auth::routes();
        Route::get('login/{provider}', 'LoginController@redirectToProvider')->name('socialLogin.redirect');
        Route::get('login/{provider}/callback', 'LoginSocialiteController@handleProviderCallback')->name('socialLogin.callback');

        Route::group(['middleware' => ['auth']], function () {


            // -------------------------



            Route::get('/section/{id}', 'InovicesController@getproducts');
            Route::get('/markAsRead', 'InovicesController@markAsRead')->name('mark');

            Route::get('customers_report', 'Customers_Report@index')->name("customers_report");
            Route::post('Search_customers', 'Customers_Report@Search_customers');

            Route::get('/{page}', 'AdminController@index');


            Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {

                Route::get('/home', 'HomeController@index')->name('dashboard.home');

                Route::resource('roles', 'RoleController');
                Route::resource('users', 'UserController');
                Route::resource('students', 'StudentController');
                Route::resource('teachers', 'TeacherController');

                Route::resource('sections', 'SectionsController');
                Route::resource('subscriptions', 'SubscriptionController');

                Route::resource('products', 'ProductsController');
                Route::resource('notifications', 'NotificationController');

                Route::group(['prefix' => 'profile'], function () {
                    Route::get('/', 'ProfileController@Profile')->name('profile.show');
                    Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
                    Route::put('update', 'ProfileController@updateProfile')->name('update.profile');
                });
            });
            // -----------------------

        });
    }
);
