<?php
namespace App\Http\Controllers\Shop;
use Illuminate\Support\Facades\Route;

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

Route::get('/',"App\\Http\\Controllers\\Shop\\MainController@indexation")->name('accueil');
Route::get('/offres',"App\\Http\\Controllers\\Shop\\MainController@listeOffres")->name('listeOffres');
Route::get('/offre/{id}',"App\\Http\\Controllers\\Shop\\MainController@detailOffre")->name('detailOffre');
Route::get('/ufr/{id}',"App\\Http\\Controllers\\Shop\\MainController@offresParUfr")->name('offresParUfr');
Route::get('/tag/{id}',"App\\Http\\Controllers\\Shop\\MainController@viewByTag")->name('voir_emploi_par_tag');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
