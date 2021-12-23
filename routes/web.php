<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
//use App\Http\Controllers\EmpleadoController;

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
    return view('welcome2');
});

//Adición
//Route::get ('/redirect/{service}', 'socialController@redirect');
//Route::get ('/callback/{service}', 'socialController@callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

//Adición
//after scan QR code
Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');
//Route::get('/complete-registration', [App\Http\Controllers\Auth\RegisterController::class, 'completeRegistration'])->name('register2');

Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');


Route::resource('empleados', EmpleadoController::class);
Route::resource('puesto-trabajos', PuestoTrabajoController::class);
Route::resource('seccion-departamentos', SeccionDepartamentoController::class);
Route::resource('departamento-empresas', DepartamentoEmpresaController::class);
Route::resource('users', UserController::class);
//Adición
//Route::resource('complete-registration', App\Http\Controllers\Auth\RegisterController::class);



/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
