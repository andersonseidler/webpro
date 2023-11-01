<?php

declare(strict_types=1);
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
/*use App\Http\Controllers\DashController;
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    //USUARIOS
    /* Route::delete('/users', [UserController::class, 'deleteAll'])->name('users.delete'); */
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::get('/company/create', [TenantController::class, 'create'])->name('company.create');
    Route::get('/company', [TenantController::class, 'index'])->name('company.index');
    Route::post('/company', [TenantController::class, 'store'])->name('company.store');

    Route::get('/search', [SearchController::class, 'index'])->name('search.index');    
});
