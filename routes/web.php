<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

// Route untuk admin
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/adminDashboard', [SessionController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('/manajemenAsetAdmin', [SessionController::class, 'manajemenAsetAdmin'])->name('manajemenAsetAdmin');
    Route::get('/pengaturanAdmin', [SessionController::class, 'pengaturanAdmin'])->name('pengaturanAdmin');
    Route::post('/pengaturanAdminPost', [SessionController::class, 'pengaturanAdminPost'])->name('pengaturanAdminPost');
    Route::get('/penggunaAdmin', [SessionController::class, 'penggunaAdmin'])->name('penggunaAdmin');});
    Route::post('/activateUser/{id}', [SessionController::class, 'activateUser'])->name('activateUser');
    Route::post('/deactivateUser/{id}', [SessionController::class, 'deactivateUser'])->name('deactivateUser');
    Route::get('/createUser', [SessionController::class, 'createUser'])->name('createUser');
    Route::post('/createUserPost', [SessionController::class, 'createUserPost'])->name('createUserPost');
    Route::get('/editUser/{id}', [SessionController::class, 'editUser'])->name('editUser');
    Route::post('/editUserPost/{id}', [SessionController::class, 'editUserPost'])->name('editUserPost');

// Route untuk user
Route::middleware(['auth', RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/userDashboard', [SessionController::class, 'userDashboard'])->name('userDashboard');
    Route::get('/lihatAsetUser', [SessionController::class, 'lihatAsetUser'])->name('lihatAsetUser');
    Route::get('/pengaturanUser', [SessionController::class, 'pengaturanUser'])->name('pengaturanUser');
    Route::get('/riwayatUser', [SessionController::class, 'riwayatUser'])->name('riwayatUser');
});
