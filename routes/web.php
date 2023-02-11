<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, HomeController, BlogController};
use App\Http\Controllers\Auth\{DashboardController, TagsControler, CategoriesControler};
use App\Http\Controllers\Admin\PostController;

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
// unnesseccery route srats

Route::get('/logout', function(){
    auth()->logout();
});
Route::get('/test', function(){
    return 'hi';
});

// unnesseccery route ends

Auth::routes([
    // 'login' => false
    'register' => false
]);
// Route::view('/auth', 'layouts.auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/user/profile', [DashboardController::class, 'userProfile'])->name('user.profile');
    Route::get('/user/profile/setting', [DashboardController::class, 'userProfileSetting'])->name('user.profile.settings');
    Route::post('/user/profile/store', [DashboardController::class, 'profileStore'])->name('profile.store');
    Route::get('/user/password', [DashboardController::class, 'passwordChange'])->name('password.change');
    Route::post('/user/password/{id}', [DashboardController::class, 'passwordChangeStore'])->name('password.change.store');
    Route::get('/location', [DashboardController::class, 'locationIndex'])->name('location.index');
    Route::post('/location/store/{id}', [DashboardController::class, 'locationStore'])->name('local.store');
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoriesControler::class);
    Route::resource('tags', TagsControler::class);

});
Route::get('/', [BlogController::class, 'welCome']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/show/{slug}',[BlogController::class, 'show'])->name('blog.show');
Route::get('Thirdslidelabel',[BlogController::class, 'Thirdslidelabel'])->name('Thirdslidelabel');



Route::get('/home', [HomeController::class, 'index'])->name('home');
