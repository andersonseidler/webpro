<?php

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PgController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SubCatController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RegisterCompanyController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {

    //USUARIOS
    /* Route::delete('/users', [UserController::class, 'deleteAll'])->name('users.delete'); */
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    //Colaboradores
    /* Route::delete('/employees', [EmployeeController::class, 'deleteAll'])->name('employees.delete'); */
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');

    //ADIANTAMENTO
    Route::POST('/cadastrarDadosEPdfPorUsuario', [AdController::class, 'cadastrarDadosEPdfPorUsuario'])->name('cadastrarDadosEPdfPorUsuario');
    //Route::POST('/lerConteudoPDF', [AdController::class, 'lerConteudoPDF'])->name('lerConteudoPDF');
    Route::delete('/adiantamento', [AdController::class, 'deleteAll'])->name('adiantamento.delete');
    Route::delete('/adiantamento/{id}', [AdController::class, 'destroy'])->name('adiantamentos.destroy');
    Route::get('/adiantamento/create', [AdController::class, 'create'])->name('adiantamento.create');
    
    Route::get('/adiantamento', [AdController::class, 'index'])->name('adiantamento.index');
    Route::post('/adiantamento', [AdController::class, 'store'])->name('adiantamento.store');

    //PAGAMENTOS
    Route::delete('/pagamento', [PgController::class, 'deleteAll'])->name('pagamento.delete');
    Route::delete('/pagamento/{id}', [PgController::class, 'destroy'])->name('pagamento.destroy');
    Route::get('/pagamento/create', [PgController::class, 'create'])->name('pagamento.create');
    Route::get('/pagamento', [PgController::class, 'index'])->name('pagamento.index');
    Route::post('/pagamento', [PgController::class, 'store'])->name('pagamento.store');

    //CATEGORIAS
    Route::delete('/categoria/{id}', [CategoriasController::class, 'destroy'])->name('category.destroy');
    Route::put('/categoria/{id}', [CategoriasController::class, 'update'])->name('category.update');
    Route::get('/categoria/{id}/edit', [CategoriasController::class, 'edit'])->name('category.edit');
    Route::get('/categoria/create', [CategoriasController::class, 'create'])->name('category.create');
    Route::get('/categoria', [CategoriasController::class, 'index'])->name('category.index');
    Route::post('/categoria', [CategoriasController::class, 'store'])->name('category.store');

    //SUBSCATEGORIAS
    Route::get('/obtersubcategorias', [SubCatController::class, 'obterSubcategorias'])->name('obtersubcategorias');
    
    Route::delete('/subcategorias/{id}', [SubCatController::class, 'destroy'])->name('subcategory.destroy');
    Route::get('/subcategorias/create', [SubCatController::class, 'create'])->name('subcategory.create');
    Route::get('/subcategorias', [SubCatController::class, 'index'])->name('subcategory.index');
    Route::post('/subcategorias', [SubCatController::class, 'store'])->name('subcategory.store');

    Route::get('/colaboradores', 'AdController@obterIDs');

    //Route::post('getContatos', 'DashboardController@getContatos')->name('users.getContatos');

    //DASHBOARD
    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard.index');

    //PERFIL
    Route::put('/perfil/{id}', [PerfilController::class, 'update'])->name('perfil.update');
    Route::get('/perfil/{id}/edit', [PerfilController::class, 'edit'])->name('perfil.edit');
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');

    //EMPRESTIMOS
    Route::delete('/emprestimos/{id}', [EmprestimosController::class, 'destroy'])->name('emprestimos.destroy');
    Route::get('/emprestimos/create', [EmprestimosController::class, 'create'])->name('emprestimos.create');
    Route::get('/emprestimos', [EmprestimosController::class, 'index'])->name('emprestimos.index');
    Route::post('/emprestimos', [EmprestimosController::class, 'store'])->name('emprestimos.store');

    //DOCUMENTOS
    Route::delete('/documentos/{id}', [DocumentosController::class, 'destroy'])->name('documentos.destroy');
    Route::get('/documentos', [DocumentosController::class, 'index'])->name('documentos.index');
    Route::post('/documentos', [DocumentosController::class, 'store'])->name('documentos.store');

    //PARCELAS
    Route::delete('/parcelas/delete/{id}', [ParcelaController::class, 'destroy'])->name('parcelas.destroy');
    Route::put('/parcelas/confirm/{id}', [ParcelaController::class, 'update'])->name('parcelas.update');
    Route::get('/parcelas/{id}', [ParcelaController::class, 'show'])->name('parcelas.show');


    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');


    Route::get('/company/create', [TenantController::class, 'create'])->name('company.create');
    Route::get('/company', [TenantController::class, 'index'])->name('company.index');
    Route::post('/company', [TenantController::class, 'store'])->name('company.store');
});

Route::get('/api', [ApiController::class, 'index']);

/* Route::get('/', function () {
    return view('auth.login');
}); */
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::get('/registerEmpresa/create', [RegisterCompanyController::class, 'create'])->name('register.create');
Route::get('/registerEmpresa', [RegisterCompanyController::class, 'index'])->name('register.index');
Route::post('/registerEmpresa', [RegisterCompanyController::class, 'store'])->name('register.store');

Route::get('/', function () {
    return view('index');
});


require __DIR__.'/auth.php';