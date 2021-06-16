<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\PerPage;
use App\Http\Middleware\trainer_logic;
use App\Http\Controllers\CustomAuthController;

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


Route::get('/companies', [CompanyController::class, 'getCompanies'])
    ->middleware('per_page');

Route::get('/trainers', [TrainerController::class, 'getTrainers'])
    ->middleware('trainer_logic');

Route::get('/searchCompany',[SearchController::class,'searchCompany']);

Route::get('/categories',[CategoryController::class,'getCompanyByCategory'])
->middleware('per_page');

Route::get('/searchCategory',[SearchController::class,'searchCompanyByCategory']);

Route::fallback(function () {
    return view('404');
})->name('NotFound');

Route::get('/error', function () {
    return view('error');
})->name('Error');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');