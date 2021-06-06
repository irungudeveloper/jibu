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

Route::get('/', [DashboardController::class,'landing'])->name('landing');

// Route::resource('/anwser',AnswerController::class);
Route::get('/answer',[AnswerController::class,'index'])->name('answer.index');
Route::get('/answer/create',[AnswerController::class,'create'])->name('answer.create');
Route::post('/answer',[AnswerController::class,'store'])->name('answer.store');
Route::get('/answer/{id}/edit',[AnswerController::class,'edit'])->name('answer.edit');
Route::delete('/answwer/{id}',[AnswerController::class,'destroy'])->name('answer.destroy');
Route::put('/answer/{id}',[AnswerController::class,'update'])->name('answer.update');

Route::resource('/sub',SubscriptionController::class);

Route::resource('/question',QuestionController::class);

Route::post('/answer/option',[AnswerController::class,'getOptions'])->name('answer.option');

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/single/{id}',[AnswerController::class,'single'])->name('answer.single');

Route::get('/pay/{price}/{id}',[PaymentController::class,'singlepay'])->name('pay.singlepay');

Route::get('/subscribe/{sub}',[SubscriptionController::class,'display'])->name('pay.sub');

Route::view('/sub/account/create','sub.account')->name('subaccount.create');

Route::post('/account',[SubscriptionController::class,'accountCreate'])->name('subaccount.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::view('/dash','template.dashboard.dashboard');

Route::view('/new/signin','template.front-end.signin')->name('new.signin');
Route::view('/new/login','template.front-end.login')->name('new.login');
Route::get('/view/question',[DashboardController::class,'getQuestions'])->name('view.question');
Route::get('/view/package',[DashboardController::class,'getPackage'])->name('view.package');

Route::view('essay','template.front-end.writer')->name('essay');

// Route::get('/new/home',[Answ])


