	<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabelController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/labels/create', [LabelController::class, 'create'])->name('labels.create.page');
Route::get('/labels/get', [LabelController::class, 'getNew'])->name('labels.get');
Route::post('/labels/create/new', [LabelController::class, 'newLabel'])->name('labels.create');
Route::post('/labels/delete/{label}/{user}', [LabelController::class, 'deleteLabel'])->name('labels.delete');
Route::get('/labels/create/success', [LabelController::class, 'success'])->name('labels.success');