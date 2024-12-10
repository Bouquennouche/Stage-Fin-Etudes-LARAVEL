<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DomainesController;
use App\Http\Controllers\EncdrantsController;
use App\Http\Controllers\EntitesController;
use App\Http\Controllers\EtablissementsController;
use App\Http\Controllers\FabricantsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\LabelsController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\ReferencesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UtilisateursController;
use App\Models\Ayoub;
use App\Models\Encdrants;
use App\Models\Etablissements;
use App\Models\Materials;
use App\Models\Stagiaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Label;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
    Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');

    Route::get('billing', function () {
        return view('billing');
    })->name('billing');

    Route::get('profile', function () {
        return view('profile');
    })->name('profile');



    // Route::get('liste-stagiaires', function () {
    //     $stagiaires = Stagiaires::all();
    //     return view('laravel-examples/liste-stagiaires')->with('stagiaires', $stagiaires);
    // })->name('liste-stagiaires');

    Route::get('tables', function () {
        return view('tables');
    })->name('tables');

    Route::get('virtual-reality', function () {
        return view('virtual-reality');
    })->name('virtual-reality');

    Route::get('static-sign-in', function () {
        return view('static-sign-in');
    })->name('sign-in');

    Route::get('static-sign-up', function () {
        return view('static-sign-up');
    })->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
    Route::get('/admin-profil', [InfoUserController::class, 'create']);
    Route::post('/admin-profil', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
        return view('dashboard');
    })->name('sign-up');


    // ------------------------------------------ Stagiaire ------------------------------------------ // 

    Route::post('/storeStagiaire', [StagiairesController::class, 'store']);
    Route::get('/liste-stagiaires', [StagiairesController::class, 'index'])->name('liste-stagiaire');
    Route::get('/stagiaire/{id}', [StagiairesController::class, 'edit'])->name('edit-stagiaire');
    Route::put('/update-stagiaire', [StagiairesController::class, 'update'])->name('update-stagiaire');
    Route::delete('delete-stagiaire',[StagiairesController::class,'destroy'])->name('delete-stagiaire');

    // ------------------------------------------ Domaines ------------------------------------------ // 
    
    Route::get('liste-domaines', [DomainesController::class, 'index'])->name('liste-domaines');
    Route::post('/storeDomaine', [DomainesController::class, 'store']);
    Route::get('/domaine/{id}' , [DomainesController::class , 'edit'])->name('edit-domaine');
    Route::put('update-domaine',[DomainesController::class , 'update'])->name('update-domaine');
    Route::delete('/delete-domaine',[DomainesController::class , 'destroy'])->name('delete-domaine');



    // ------------------------------------------ Stages ------------------------------------------ // 

    Route::get('stage/{id}',[StagesController::class, 'index'])->name('stage');
    Route::post('/storeStage{id}', [StagesController::class, 'store']);
    Route::get('editStage/{id}',[StagesController::class, 'edit'])->name('edit-stage');
    Route::put('update-stage',[StagesController::class, 'update'])->name('update-stage');
    Route::delete('delete-stage',[StagesController::class, 'destroy'])->name('delete-stage');

    // ------------------------------------------ Etablissements ------------------------------------------ // 

    Route::get('liste-etabs',[EtablissementsController::class, 'index'])->name('liste-etabs');
    Route::post('store-etabe',[EtablissementsController::class, 'store'])->name('store-etab');
    Route::get('/etablissement/{id}',[EtablissementsController::class,'edit'])->name('edit-etab');
    Route::put('/update-etabe',[EtablissementsController::class,'update'])->name('update-etabe');
    Route::delete('delete-etab',[EtablissementsController::class,'destroy'])->name('delete-etab');

    // ------------------------------------------ Encadrants ------------------------------------------ // 
    Route::get('liste-encadrants',[EncdrantsController::class, 'index'])->name('liste-encadrants');
    Route::post('store-encadrant',[EncdrantsController::class, 'store'])->name('store-encadrant');
    Route::get('/encadrant/{id}',[EncdrantsController::class,'edit'])->name('edit-encadrant');
    Route::put('/update-encadrant',[EncdrantsController::class,'update'])->name('update-encadrant');
    Route::delete('delete-encadrant',[EncdrantsController::class,'destroy'])->name('delete-encadrant');

    // ------------------------------------------ labels ------------------------------------------ //  

    Route::get('labels',[LabelsController::class, 'index'])->name('labels');
    Route::post('/store-label',[LabelsController::class, 'store'])->name('store-label');
    Route::get('labels/{id}',[LabelsController::class,'edit'])->name('edit-label');
    Route::put('update-label',[LabelsController::class,'update'])->name('update-label');
    Route::delete('delete-label',[LabelsController::class,'destroy'])->name('delete-label');


    // ------------------------------------------ materials ------------------------------------------ // 

    Route::get('materials/{id}',[MaterialsController::class, 'index'])->name('materials');
    Route::get('/types/{fabricantId}', [MaterialsController::class, 'getTypesByFabricant']);
    Route::get('/references/{typeId}', [MaterialsController::class, 'getReferencesByType']);
    Route::post('/store-material',[MaterialsController::class, 'store'])->name('store-material');
    Route::delete('delete-material',[MaterialsController::class,'destroy'])->name('delete-material');
    Route::get('/utilisateurs/{entiteId}', [MaterialsController::class, 'getUtilisateursByEntite']);
    Route::get('/material/{id}', [MaterialsController::class, 'edit']);
    Route::put('update-material',[MaterialsController::class,'update'])->name('update-material');

     // ------------------------------------------ entites ------------------------------------------ // 
     Route::get('entites',[EntitesController::class, 'index'])->name('entites');
     Route::post('/storeEntite', [EntitesController::class, 'store']);
     Route::get('/entite/{id}', [EntitesController::class, 'edit']);
     Route::put('update-entite',[EntitesController::class,'update'])->name('update-entite');
     Route::delete('delete-entite',[EntitesController::class,'destroy'])->name('delete-entite');

    // ------------------------------------------ utilisateurs ------------------------------------------ // 
     Route::get('utilisateur/{id}',[UtilisateursController::class, 'index'])->name('utilisateur');
     Route::post('/storeUtilisateur{id}', [UtilisateursController::class, 'store']);
     Route::get('/ut/{id}', [UtilisateursController::class, 'edit']);
     Route::put('/update-utilisateur',[UtilisateursController::class,'update'])->name('update-utilisateur');
     Route::delete('delete-utilisateur',[UtilisateursController::class,'destroy'])->name('delete-utilisateur');

      // ------------------------------------------ fabricants ------------------------------------------ // 
      Route::get('fabricants',[FabricantsController::class, 'index'])->name('fabricants');
      Route::post('/storeFabricant', [FabricantsController::class, 'store']);
      Route::get('/fabricant/{id}', [FabricantsController::class, 'edit']);
      Route::put('/update-fabricant',[FabricantsController::class,'update'])->name('update-fabricant');
      Route::delete('delete-fabricant',[FabricantsController::class,'destroy'])->name('delete-fabricant');

      // ------------------------------------------ types ------------------------------------------ // 
      Route::get('tps/{id}',[TypesController::class, 'index'])->name('tps');
      Route::post('/storeType{id}', [TypesController::class, 'store']);
      Route::get('/type/{id}', [TypesController::class, 'edit']);
      Route::put('/update-type',[TypesController::class,'update'])->name('update-type');
      Route::delete('delete-type',[TypesController::class,'destroy'])->name('delete-type');

      // ------------------------------------------ references ------------------------------------------ // 
      Route::get('refs/{id}',[ReferencesController::class, 'index'])->name('refs');
      Route::post('/storeReference{id}', [ReferencesController::class, 'store']);
      Route::get('/reference/{id}', [ReferencesController::class, 'edit']);
      Route::put('/update-reference',[ReferencesController::class,'update'])->name('update-reference');
      Route::delete('delete-reference',[ReferencesController::class,'destroy'])->name('delete-reference');

    Route::get('liste-stages', function () {
        return view('stages');
    });


});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
