<?php

use App\Http\Controllers\admin\PermissionsController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return back();
})->name('logout');


Route::group(['prefix' => 'admin','as'=>'admin.','middleware' => ['auth']],function(){
    Route::get('/',function (){
        return view('admin.home');
    })->name('home');
    Route::resource('users',UsersController::class);
    Route::resource('permissions',PermissionsController::class);
    Route::resource('roles',RolesController::class);
    Route::resource('companies',\App\Http\Controllers\CompanyController::class);
    Route::resource('works',\App\Http\Controllers\WorkController::class);


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
