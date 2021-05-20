<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubscriptionController;


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

Route::get('/', [DashboardController::class,'landing']);

// Route::resource('/anwser',AnswerController::class);

Route::get('/answer/create',[AnswerController::class,'create'])->name('answer.create');
Route::post('/answer',[AnswerController::class,'store'])->name('answer.store');
Route::get('/answer/{id}/edit',[AnswerController::class,'edit'])->name('answer.edit');
Route::delete('/answwer/{id}',[AnswerController::class,'delete'])->name('answer.delete');
Route::put('/answer/{id}',[AnswerController::class,'update'])->name('answer.update');

Route::resource('/sub',SubscriptionController::class);

Route::resource('/question',QuestionController::class);

Route::post('/answer/option',[AnswerController::class,'getOptions'])->name('answer.option');

Route::get('/home',[HomeController::class,'home']);

Route::get('/single/{id}',[AnswerController::class,'single'])->name('answer.single');

Route::get('/pay/{price}/{id}',[PaymentController::class,'singlepay'])->name('pay.singlepay');

Route::get('/subscribe/{sub}',[SubscriptionController::class,'display'])->name('pay.sub');

Route::view('/sub/account/create','sub.account')->name('subaccount.create');

Route::post('/account',[SubscriptionController::class,'accountCreate'])->name('subaccount.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


