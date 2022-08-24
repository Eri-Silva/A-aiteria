<?php

use Illuminate\Support\Request;
use Illuminate\Support\Facades\Route;
// importando o controlador referente a visibility
use App\Http\Controllers\VisibilityController;
// importando o controlador referente a admin
use App\Http\Controllers\AdminController;
// importando o controlador referente a admin
use App\Http\Controllers\AuthController;


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
    return view('index');
});

//rotas do login de clientes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authLogin']);

//rotas do registro de clientes
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'createRegister']);

//rotas da pasta visibility
Route::get('/calls', [VisibilityController::class, 'index1']);
Route::post('/calls', [VisibilityController::class, 'index2']);

Route::get('/address', [VisibilityController::class, 'index1']);
Route::post('/address', [VisibilityController::class, 'index3']);

Route::get('/datasheet', [VisibilityController::class, 'index1']);
Route::post('/datasheet', [VisibilityController::class, 'index4']);

//rotas para pasta admin
Route::get('/login/admin', [AdminController::class, 'index1']);
Route::post('/login/admin', [AdminController::class, 'index1']);

Route::get('/dashboard', [AdminController::class, 'index1']);
Route::post('/dashboard', [AdminController::class, 'index2']);

Route::get('/store', [AdminController::class, 'index1']);
Route::post('/store', [AdminController::class, 'index3']);