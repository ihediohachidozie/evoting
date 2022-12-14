<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\NorminationController;
use App\Http\Controllers\AddCandidateController;
use App\Http\Controllers\AccreditationController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('candidates', AddCandidateController::class);
Route::post('/candidates/form', [AddCandidateController::class, 'showform'])->name('candidate.form');

Route::get('/accreditation', [AccreditationController::class, 'showform'])->name('accreditation.form');
Route::post('/accreditation', [AccreditationController::class, 'accredit'])->name('accreditation.accredit');

Route::resource('vote', VoteController::class);
Route::get('vote', [VoteController::class, 'ballotcard'])->name('ballot-card');

Route::resource('normination', NorminationController::class);
Route::get('/access', [NorminationController::class, 'checkmember'])->name('normination.member');
Route::post('/normination/form', [NorminationController::class, 'showform'])->name('show-form');

