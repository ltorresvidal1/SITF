<?php

use App\Http\Controllers\auditarfacturas\AuditarfacturasController;
use App\Http\Livewire\Select2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rips\ripsController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\cargarrips\cargarripsController;
use App\Http\Controllers\costos\CostosController;
use App\Http\Controllers\fincas\FincasController;
use App\Http\Controllers\imagen\ImagenController;
use App\Http\Controllers\clientes\ClientesController;
use App\Http\Controllers\usuarios\UsuariosController;
use App\Http\Controllers\principal\PrincipalController;
use App\Http\Controllers\sa_usuarios\Sa_usuariosController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\costosiniciales\CostosInicialesCotroller;
use App\Http\Controllers\parametrizacion\ParametrizacionCotroller;
use App\Http\Controllers\rips\erroresvalidacionController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\informes\InformesController;

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



Route::get('/',[LoginController::class,'index'])->name('login');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login');
Route::Post('/logout',[LogoutController::class,'store'])->name('logout');

Route::Post('/imagenes',[ImagenController::class,'store'])->name('imagenes.store');

Route::get('/principal',[PrincipalController::class,'index'])->name('principal');

Route::get('/clientes',[ClientesController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClientesController::class,'create'])->name('clientes.create');
Route::post('/clientes',[ClientesController::class,'store'])->name('clientes.store');
Route::get('clientes/{cliente}/edit',[ClientesController::class,'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}',[ClientesController::class,'update'])->name('clientes.update');
Route::delete('clientes/{cliente}',[ClientesController::class,'destroy'])->name('clientes.destroy');

Route::get('/sa_usuarios',[Sa_usuariosController::class,'index'])->name('sa_usuarios.index');
Route::get('/usuarios/create',[UsuariosController::class,'create'])->name('usuarios.create');
Route::post('/usuarios',[UsuariosController::class,'store'])->name('usuarios.store');
Route::get('/sa_usuarios/create',[Sa_usuariosController::class,'create'])->name('sa_usuarios.create');
Route::post('/sa_usuarios',[Sa_usuariosController::class,'store'])->name('sa_usuarios.store');
Route::get('sa_usuarios/{usuario}/edit',[Sa_usuariosController::class,'edit'])->name('sa_usuarios.edit');
Route::put('sa_usuarios/{usuario}',[Sa_usuariosController::class,'update'])->name('sa_usuarios.update');
Route::delete('sa_usuarios/{usuario}',[Sa_usuariosController::class,'destroy'])->name('sa_usuarios.destroy');
/*
*/
Route::get('/{clientes:ruta}/fincas',[FincasController::class,'index'])->name('fincas.index');
Route::get('/{clientes:ruta}/fincas/create',[FincasController::class,'create'])->name('fincas.create');
Route::post('/{clientes:ruta}/fincas',[FincasController::class,'store'])->name('fincas.store');
Route::get('/{clientes:ruta}/fincas/{finca}/edit',[FincasController::class,'edit'])->name('fincas.edit');
Route::put('/{clientes:ruta}/fincas/{finca}',[FincasController::class,'update'])->name('fincas.update');
Route::delete('/{clientes:ruta}/fincas/{finca}',[FincasController::class,'destroy'])->name('fincas.destroy');

Route::get('/{clientes:ruta}/costosiniciales',[CostosInicialesCotroller::class,'index'])->name('costosiniciales.index');
Route::get('/{clientes:ruta}/costosiniciales/create',[CostosInicialesCotroller::class,'create'])->name('costosiniciales.create');
Route::post('/{clientes:ruta}/costosiniciales',[CostosInicialesCotroller::class,'store'])->name('costosiniciales.store');

Route::get('/{clientes:ruta}/parametrizacion',[ParametrizacionCotroller::class,'index'])->name('parametrizacion.index');
Route::get('/{clientes:ruta}/parametrizacion/create',[ParametrizacionCotroller::class,'create'])->name('parametrizacion.create');
Route::post('/{clientes:ruta}/parametrizacion',[ParametrizacionCotroller::class,'store'])->name('parametrizacion.store');

Route::get('/{clientes:ruta}/rips',[ripsController::class,'index'])->name('rips.index');
Route::get('/{clientes:ruta}/rips/create',[ripsController::class,'create'])->name('rips.create');
/*Route::post('/{clientes:ruta}/rips',[FincasController::class,'store'])->name('rips.store');
Route::get('/{clientes:ruta}/rips/{finca}/edit',[FincasController::class,'edit'])->name('rips.edit');
Route::put('/{clientes:ruta}/rips/{finca}',[FincasController::class,'update'])->name('rips.update');
Route::delete('/{clientes:ruta}/rips/{finca}',[FincasController::class,'destroy'])->name('rips.destroy');
*/

Route::get('/auditarfacturas',[AuditarfacturasController::class,'index'])->name('auditarfacturas.index');
Route::get('/auditarfacturas/create',[AuditarfacturasController::class,'create'])->name('auditarfacturas.create');

Route::get('/informes',[InformesController::class,'index'])->name('informes.index');




Route::Post('/cargarrips/{clientes}',[cargarripsController::class,'store'])->name('cargarrips.store');
/*Route::get('/fincas/create',[Sa_usuariosController::class,'create'])->name('sa_usuarios.create');
Route::post('/fincas',[Sa_usuariosController::class,'store'])->name('sa_usuarios.store');
Route::get('fincas/{usuario}/edit',[Sa_usuariosController::class,'edit'])->name('sa_usuarios.edit');
Route::put('fincas/{usuario}',[Sa_usuariosController::class,'update'])->name('sa_usuarios.update');
Route::delete('fincas/{usuario}',[Sa_usuariosController::class,'destroy'])->name('sa_usuarios.destroy');
*/

Route::get('/export/{rips}',[erroresvalidacionController::class,'exportar_errores'])->name('rips.export');


Route::get('/{clientes:ruta}/costos',[CostosController::class,'index'])->name('costos.index');
Route::get('/{clientes:ruta}/costos/create',[CostosController::class,'create'])->name('costos.create');
Route::post('/{clientes:ruta}/costos',[CostosController::class,'store'])->name('costos.store');


Route::get('/{clientes:ruta}/datatable/ripsmaestro',[DatatableController::class,'ripsmaestro'])->name('datatable.ripsmaestro');



/*
Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
*/

//Route::Post('/cargarrips',[cargarripsController::class,'CargarArhivoViaAjax'])->name('cargarrips.CargarArhivoViaAjax');



//Route::get('/usuarios',[UsuariosController::class,'create'])->name('usuarios.regiter');