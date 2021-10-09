<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolGradeController;
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
if (App::environment('production')) {
    URL::forceScheme('https');
}

Auth::routes();
Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('auth.login');
    });
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::resource('stages',SchoolGradeController::class);
});




