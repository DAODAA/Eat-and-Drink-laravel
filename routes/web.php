<?php

use App\Http\Controllers\ContacController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//  return view('welcome');
//     // return 'Salut'.$id;

// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', [HomeController::class, 'laravel_blade']);

/*Route::get('login',
['as' => 'login', 'uses' => 'App\Http\Controllers\HomeController@index']
);*/

// Route::get('login/{id?}',[HomeController::class,'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContacController::class, 'index']); //route vers le midddeleware admin
Route::post('/contact', [ContacController::class, 'store'])->name('soumission'); //affichage des donnees du contact.blade.php

Route::get('/login', [LoginController::class, 'login'])->name('login'); //affichage de la page login
Route::get('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/admin', [AdminController::class, 'admin'])->name('admin'); //affichage de la page admin
Route::get('admin/addGestionnaire', [AdminController::class, 'addGestionnaire'])->name('addGestionnaire');
Route::get('admin/addProduit', [AdminController::class, 'addProduit'])->name('addProduit');
Route::get('admin/addCategorie', [AdminController::class, 'addCategorie'])->name('addCategorie');


//Ajout des routes d'enregistrements des donnees du formulaire a la BD
Route::post('/register', [RegisterController::class, 'store'])->name('store-user');
Route::post('admin/addGestionnaire', [AdminController::class, 'storeGestionnaire'])->name('store-gestionnaire');
Route::post('admin/addCategorie', [AdminController::class, 'storeCategorie'])->name('store-categorie');
Route::post('admin/addProduit', [AdminController::class, 'storeProduit'])->name('store-produit');
