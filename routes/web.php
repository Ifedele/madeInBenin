<?php

use App\Http\Controllers\ProfileController;
use App\Models\SousCategorie;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\AcheteurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SousCategorieController;
use App\Http\Controllers\AdminVendeurController;
use App\Http\Controllers\Vendeur\ActivationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//activation
Route::get('/vendeur/activation/{token}', [ActivationController::class , 'showForm'])->name('vendeur.activation')->middleware('signed');
Route::post('/vendeur/activation/{token}', [ActivationController::class, 'processForm'])->name('vendeur.activation.submit');

Route::get('/', function () {
    if(auth()->check()){
        $user =auth()->user();

        if($user->hasRole('admin')) {
            return redirect('/admin/dashboard');
        }
        if ($user->hasRole('vendeur')) {
            return redirect('/vendeur/dashboard');
        }
    }
    return view('front.pages.index');
});

// Route::get('/admin/dashboard', function () {
    // return view('admin/pages/index');:

// })->middleware(['auth', 'verified'])->name('admin.dashboard');
//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/vendeurs', [UserController::class,'vendeurs'])->name('admin.vendeurs');
    Route::get('/vendeurs/create', [AdminVendeurController::class,'create'])->name('admin.vendeurs.create');
    Route::post('/vendeurs/store', [AdminVendeurController::class,'store'])->name('admin.vendeurs.store');
    Route::get('/acheteurs', [UserController::class,'acheteurs'])->name('admin.acheteurs');
    Route::get('/vendeur/{user}', [UserController::class,'showVendeur'])->name('admin.vendeurShow');
    Route::get('/acheteur/{user}', [UserController::class,'showAcheteur'])->name('admin.acheteurShow');
    Route::get('/admin/vendeurs/pdf', [UserController::class, 'exportVendeursPdf'])->name('admin.vendeurs.pdf');
    Route::get('/admin/acheteurs/pdf', [UserController::class, 'exportAcheteursPdf'])->name('admin.acheteurs.pdf');
});

//vendeur
Route::middleware(['auth', 'role:vendeur'])->group(function (){
    Route::get('/vendeur/dashboard', [VendeurController::class,'index'])->name('vendeur.dashboard');

});


//Catégorie
Route::middleware('auth')->group(function (){
    Route::get('/categorie/addCat', [CategorieController::class, 'create'])->name('categorie.add');
    Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
    Route::get('/categorie/showCat', [CategorieController::class, 'index'])->name('categorie.show');
    Route::get('/categorie/editCat/{id}', [CategorieController::class, 'edit'])->name('categorie.edit');
    Route::put('/categorie/update/{id}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::get('/categorie/toggle/{id}', [CategorieController::class, 'toggle'])->name('categorie.toggle');
});

//sous Catégorie
Route::middleware('auth')->group(function (){
    Route::get('/sousCategorie/create', [SousCategorieController::class, 'create'])->name('sousCategorie.create');
    Route::post('/sousCategorie/store', [SousCategorieController::class, 'store'])->name('sousCategorie.store');
    Route::get('/sousCategorie/index', [SousCategorieController::class, 'index'])->name('sousCategorie.index');
    Route::get('/sousCategorie/edit/{id}', [SousCategorieController::class, 'edit'])->name('sousCategorie.edit');
    Route::put('/sousCategorie/update/{id}', [SousCategorieController::class, 'update'])->name('sousCategorie.update');
    Route::get('/sousCategorie/toggle/{id}', [SousCategorieController::class, 'toggle'])->name('sousCategorie.toggle');
});

//Produits
Route::middleware('auth')->group(function (){
    Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
    Route::post('/produits/store', [ProduitController::class, 'store'])->name('produits.store');
    Route::get('/produits/index', [ProduitController::class, 'index'])->name('produits.index');
    Route::get('/produits/show/{id}', [ProduitController::class, 'show'])->name('produits.show');
    Route::get('/produits/edit/{id}', [ProduitController::class, 'edit'])->name('produits.edit');
    Route::put('/produits/update/{id}', [ProduitController::class, 'update'])->name('produits.update');
    Route::delete('/produits/{destroy}', [ProduitController::class, 'destroy'])->name('produits.destroy');
});

Route::get('/session-test', function( Request $request) {
    session(['test'=>'Session fonctionne !']);return session('test');
});

Route::get('/test-session', function( Request $request) {
    session(['test_key' => 'session fonctionne bien!']);
    return session()->all();
});
Route::post('/test-session-form', function( ) {
    return view('auth.test-session');
});


require __DIR__.'/auth.php';
