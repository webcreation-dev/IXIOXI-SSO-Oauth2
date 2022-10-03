<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/subscribe/{email}', function (Request $request) {
    return view('auth.register_user', ['email' => $request->email]);
})->name('subscribe.user');

Route::post("/register_user", [MailController::class, 'registerUser'])->name("register.user");

Auth::routes(['verify' => true]);

Route::middleware([
    'auth',
    // 'verified',
])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get("/view_subscription", [MailController::class, 'getView'])->name("link.subscribe");
    Route::post("/link_subscribe_user", [MailController::class, 'sendMail'])->name("send.mail");
    Route::post("/update_roles", [MailController::class, 'updateAccess'])->name("update.role");

    Route::get("/edit_profile", [DashboardController::class, 'viewEditUser'])->name("view.edit.user");
    Route::post("/edit_user_profile", [DashboardController::class, 'editUser'])->name("edit.user");
    
    Route::get("/users_list", [DashboardController::class, 'userList'])->name("user.list");
    Route::get("/view_update_access/{id}", [DashboardController::class, 'viewUpdateAccess'])->name("update.access");
    Route::get("/view_update_access_before/{email}", [DashboardController::class, 'viewUpdateAccessBefore'])->name("update.access.before");
});









