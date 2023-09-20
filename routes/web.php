<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lecturerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('lecturers/delete/{id}',[lecturerController::class,'delete'])->name('delete');
route::get('/lecturers',[lecturerController::class,'index'])->name('index');
route::post('lecturers/insert',[lecturerController::class,'insert'])->name('insert');
