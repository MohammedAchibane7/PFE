<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CandidatController;

use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DemandeEmploiController;

/*
|--------------------------------------------------------------------------
| web routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['guest'])->name('index');


///lguests en generale

Route::middleware('guest')->group(function () {


Route::get('/registration', [RegisteredUserController::class, 'create'])->name('registration.create');
Route::post('/recruteur/registration', [RegisteredUserController::class, 'storeRecruteur'])->name('recruteur.registration.store');
Route::post('/candidat/registration', [RegisteredUserController::class, 'storeCandidat'])->name('candidat.registration.store');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');


Route::get('/recruteurs', function () {
    return view('recruteur.index');
})->name('recruteurs.index');
Route::get('/candidats', function () {
    return view('candidat.index');
})->name('candidats.index');

});


//db recruteur


Route::middleware('recruteur')->group(function () {

    Route::get('/recr', function () {
        return view('recruteur.index');
    })->name('recruteurs.index');

    Route::get('/recruteurs/{id}/show', [RecruteurController::class, 'show'])
    ->where('id', '\d+')
    ->name('recruteurs.show');
        
    Route::get('/recruteurs/{recruteur}/edit',[RecruteurController::class,'edit'])->name('recruteurs.edit');
    Route::put('/recruteurs/{recruteur}',[RecruteurController::class,'update'])->name('recruteurs.update');


    // Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
    Route::get('/annonces/create',[AnnonceController::class, 'create'])->name('annonces.create');
    Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store');
    Route::get('/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
    Route::put('/annonces/{annonce}', [AnnonceController::class, 'update'])->name('annonces.update');
    Route::delete('/annonces/{annonce}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');
    Route::get('/annonce/{annonceId}', [AnnonceController::class, 'show'])->name('annonce.show');


    


});
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admins.index');
    Route::prefix('admin/candidat')->group(function () {
        Route::get('/', [AdminController::class, 'list'])->name('admins.list');
        Route::get('/{candidat}/edit', [AdminController::class, 'edit'])->name('candi.edit');
        Route::put('/{candidat}', [AdminController::class, 'update'])->name('candi.update');
        Route::delete('/{candidat}', [AdminController::class, 'destroy'])->name('candi.destroy');
        // Additional candidat routes can be defined here
    });

    // Routes for Recruteur
    Route::prefix('admin/recruteur')->group(function () {
        Route::get('/', [AdminController::class, 'listrec'])->name('adminss.list');
        Route::get('/{recruteur}/edit', [AdminController::class, 'editrec'])->name('rec.edit');
        Route::put('/{recruteur}', [AdminController::class, 'updaterec'])->name('rec.update');
        Route::delete('/{recruteur}', [AdminController::class, 'destroyrec'])->name('rec.destroy');
        Route::get('/admin/{id}/show', [AdminController::class, 'showrec'])
        ->where('id', '\d+')
        ->name('rec.show');
        // Additional recruteur routes can be defined here
    });

    // Generic routes for both candidat and recruteur
    Route::get('/admin/{id}/show', [AdminController::class, 'show'])
        ->where('id', '\d+')
        ->name('candid.show');
});




// admin's routes 
// Route::middleware('admin')->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])
//     ->name('admins.index');
//     Route::get('/admin/candidat', [AdminController::class, 'list'])->name('admins.list');
//     // Route::get('/admin/{id}/show', [AdminController::class, 'show'])
//     // ->where('id', '\d+')
//     // ->name('candid.show');
//     Route::get('/admin/{candidat}/edit',[AdminController::class,'edit'])->name('candi.edit');
//     Route::put('/admin/{candidat}',[AdminController::class,'update'])->name('candi.update');
//     Route::delete('/admin/{candidat}',[AdminController::class,'destroy'])->name('candi.destroy');
//    // Route::post('/candidat/registration', [RegisteredUserController::class, 'storeCandidat'])->name('candidat.registration.store');
//    /*------------------------------------------- recruteur  -------------------------------------------*/
//    Route::get('/admin/recruteur', [AdminController::class, 'listrec'])->name('adminss.list');
//    Route::get('/admin/{id}/show', [AdminController::class, 'showrec'])
//    ->where('id', '\d+')
//    ->name('rec.show');
//    Route::get('/admin/{recruteur}/edit',[AdminController::class,'editrec'])->name('rec.edit');
//    Route::put('/admin/{recruteur}',[AdminController::class,'updaterec'])->name('rec.update');
//    Route::delete('/admin/{recruteur}',[AdminController::class,'destroyrec'])->name('rec.destroy');
// });
   







Route::middleware('candidat')->group(function () {

    // Routes accessible only to Candidats

    Route::get('/candidats/{id}/show', [CandidatController::class, 'show'])
    ->where('id', '\d+')
    ->name('candidats.show');
    Route::get('/candidats/{candidat}/edit',[CandidatController::class,'edit'])->name('candidats.edit');
    Route::put('/candidats/{candidat}',[CandidatController::class,'update'])->name('candidats.update');
    Route::post('/candidats/logout', [AuthenticatedSessionController::class, 'destroy'])->name('candidats.logout');
    Route::delete('/candidats/{candidat}',[CandidatController::class,'destroy'])->name('candidats.destroy');


    Route::get('/publications',[PublicationController::class,'index'])->name('publications.index');
    Route::get('/publications/create',[PublicationController::class,'create'])->name('publications.create');
    Route::post('/publications',[PublicationController::class,'store'])->name('publications.store');
    Route::get('/publications/{id}/show', [PublicationController::class, 'show'])
    ->where('id', '\d+')
    ->name('publications.show');
    Route::get('/publications/{publication}/edit',[PublicationController::class,'edit'])->name('publications.edit');
    Route::put('/publications/{publication}',[PublicationController::class,'update'])->name('publications.update');
    Route::delete('/publications/{publication}',[PublicationController::class,'delete'])->name('publications.delete');


    Route::get('/postuler/{annonce_id}',[DemandeEmploiController::class,'form'] )->name('demande.form');
    Route::post('/postuler/{annonce_id}', [DemandeEmploiController::class,'postuler'])->name('demande.postuler');

});

require __DIR__.'/auth.php';




// Route::middleware('guest')->group(function () {
//     // Routes accessible only to guest users

//     // Define the route for displaying the registration view
// Route::get('/registration', [RegisteredUserController::class, 'create'])->name('registration.create');
//     // Route for Candidat registration
// Route::post('/candidat/registration', [RegisteredUserController::class, 'storeCandidat'])->name('candidat.registration.store');

// // Route for Recruteur registration
// Route::post('/recruteur/registration', [RegisteredUserController::class, 'storeRecruteur'])->name('recruteur.registration.store');


//     Route::get('/recruteurs', function () {
//         return view('recruteur.index');
//     })->name('recruteurs.index');
//     Route::get('/candidats', function () {
//         return view('candidat.index');
//     })->name('candidats.index');
//     // Route::get('/candidats/register', [RegisteredUserController::class, 'create'])
//     //     ->name('candidat.register');
//     Route::post('/candidats/register', [RegisteredUserController::class, 'store']);
    
  
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
//     // Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

// });





// require __DIR__.'/candidat.php'; 
 // Route::middleware('auth')->group(function () {
    // Route::get('/candidats', [RegisteredUserController::class, 'index'])->name('candidats.index');
    // Route::get('/candidats/create',[RegisteredUserController::class,'create'])->name('candidats.register');
    // Route::post('/candidats/create', [RegisteredUserController::class, 'store'])->name('store');
    // Route::get('/candidat', [CandidatController::class, 'edit'])->name('candidats.edit');
    // Route::patch('/candidats', [CandidatController::class, 'update'])->name('candidats.update');
    // Route::delete('/candidats', [CandidatController::class, 'destroy'])->name('candidats.destroy');
// });
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');