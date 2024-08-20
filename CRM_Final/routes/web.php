<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerTier;
use App\Http\Controllers\controllerDemande;

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

/*---------------CRM---------------------------------*/
/*---------------Tier--------------------------------*/
Route::get('/accueilCRM',[controllerTier::class,'accueil'])->name('CRM.accueil');
Route::get('/detailTier',[controllerTier::class,'detailTier'])->name('CRM.detailTier');
Route::get('/ajoutTier',[controllerTier::class,'ajoutTier'])->name('CRM.ajoutTier');
Route::get('/listeEtatTier',[controllerTier::class,'listeEtatTier'])->name('CRM.listeEtatTier');
Route::get('/listeQualite',[controllerTier::class,'listeQualite'])->name('CRM.listeQualite');
Route::get('/listeUnite',[controllerTier::class,'listeUnite'])->name('CRM.listeUnite');
/*--------------Demande-----------------------------*/
Route::get('/listeDemande',[controllerDemande::class,'listeDemande'])->name('CRM.listeDemande');


/*--------------------------------------------------*/
