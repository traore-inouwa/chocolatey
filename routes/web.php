<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GerantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServeurController;

Route::get('/',[HomeController::class, 'my_home']);


Route::get('/delete_personnels/{id}', [AdminController::class, 'delete_personnels']);

Route::post('/update_personnels/personnels', [AdminController::class, 'update_personnels_admin']);

Route::get('/update_personnels/{id}', [AdminController::class, 'update_personnels']);

Route::get('/personnels', [AdminController::class, 'personnels']);

Route::get('/ajouter', [AdminController::class, 'ajouter_personnels']);

Route::post('/ajouter/personnels', [AdminController::class, 'ajouter_personnels_admin']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/add_food', [AdminController::class, 'add_food']);

Route::post('/upload_food', [AdminController::class, 'upload_food']);

Route::get('/view_food', [AdminController::class, 'view_food']);

Route::get('/delete_food/{id}', [AdminController::class, 'delete_food']);

Route::get('/update_food/{id}', [AdminController::class, 'update_food']);

Route::post('/edit_food/{id}', [AdminController::class, 'edit_food']);


Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

Route::get('/my_cart', [HomeController::class, 'my_cart']);

Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

Route::post('/confirm_order', [HomeController::class, 'confirm_order']);

Route::get('/orders', [AdminController::class, 'orders']);

Route::get('/on_the_way/{id}', [AdminController::class, 'on_the_way']);

Route::get('/delivered/{id}', [AdminController::class, 'delivered']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::post('/book_table', [HomeController::class, 'book_table']);

Route::get('/reserver', [GerantController::class,'reserver']);

Route::get('/ajouter_reserver', [GerantController::class,'ajouter_reserver']);

Route::post('/ajouter_reserver/gerant', [GerantController::class, 'ajouter_reserver_gerant']);

Route::get('/update_reserver_book/{id}', [GerantController::class,'update_reserver_book']);

Route::get('/update_reservation/{id}', [GerantController::class,'update_reservation']);

Route::post('/update_reservation/gerant', [GerantController::class,'update_reservation_gerant']);

Route::post('/update_reserver_book/gerant', [GerantController::class,'update_reserverBook_gerant']);

Route::get('/delete_reserver_book/{id}', [GerantController::class,'delete_reserver_book']);

Route::get('/delete_reservation/{id}', [GerantController::class,'delete_reservation']);






Route::get('/commandes', [GerantController::class, 'commandes']);

Route::get('/on_the_way_cm/{id}', [GerantController::class, 'on_the_way_cm']);

Route::get('/delivered_cm/{id}', [GerantController::class, 'delivered_cm']);

Route::get('/canceled_cm/{id}', [GerantController::class, 'canceled_cm']);


Route::get('/voir_commandes', [GerantController::class,'voir_commandes']);

Route::get('/ajouter_commandes', [GerantController::class,'ajouter_commandes']);

Route::post('/ajouter_commandes/gerant', [GerantController::class, 'ajouter_commandes_gerant']);




Route::get('/update_comd/{id}', [GerantController::class,'update_comd']);

Route::post('/update_comd/gerant', [GerantController::class, 'update_comd_gerant']);

Route::get('/delete_comd/{id}', [GerantController::class,'delete_comd']);



Route::get('/paiement', [GerantController::class,'paiement']);

Route::post('/ajouter_paiement/gerant', [GerantController::class, 'ajouter_paiement_gerant']);

Route::get('/facture', [GerantController::class,'facture']);

Route::get('/update_paie/{id}', [GerantController::class,'update_paie']);

Route::post('/update_paie/gerant', [GerantController::class, 'update_paie_gerant']);

Route::get('/delete_paie/{id}', [GerantController::class,'delete_paie']);

Route::get('/download_paie/{id}', [GerantController::class,'download_paie']);


Route::get('/cuisinier', [ServeurController::class,'cuisinier']);

Route::get('/ajout_cm', [ServeurController::class,'ajout_cm']);


Route::post('/ajout_cm/serveur', [ServeurController::class,'ajout_cm_serveur']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});
