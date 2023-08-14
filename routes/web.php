<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PostController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('/posts', PostController::class);



//Admin's Routes group undertaking same middlewares

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('/admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');

    Route::post('/roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions');   
    
    Route::resource('/users', UserController::class);

    
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
});


require __DIR__.'/auth.php';
