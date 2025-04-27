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
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Front\ExploreController;
use App\Http\Controllers\Front\VendeurViewController;
use App\Http\Controllers\Front\ProduitViewController;
use App\Http\Controllers\Front\PanierController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // N'oubliez pas d'importer la classe Request
use App\Models\User;
use App\Models\Vendeur;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;

Route::get('/', function (Request $request) {
    // 1️⃣ Période
    $period    = $request->input('period', 'week');
    $startDate = match ($period) {
        'month' => Carbon::now()->subMonth(),
        'year'  => Carbon::now()->subYear(),
        default => Carbon::now()->subWeek(),
    };

    // 2️⃣ Requête avec COUNT(l.id)
    $topSellers = DB::table('users as u')
        ->join('vendeurs         as v',  'v.idUser',      '=', 'u.id')
        ->join('produits         as p',  'p.id_vendeur',  '=', 'v.id')
        ->join('details_commandes as dc', 'dc.id_produit', '=', 'p.id')
        ->join('commandes        as c',  'c.id', '=', 'dc.id_commande')
        ->join('livraisons       as l',  'l.id_commande', '=', 'c.id')
        ->where('l.statut_livraison', 'effectuee')
        ->where('l.date_livraison', '>=',  $startDate)
        ->select(
            'u.*',
            // On compte bien l.id (colonne "id" de la table livraisons)
            DB::raw('COUNT(l.id) AS livraisons_count')
        )
        ->groupBy(
            'u.id',
            'u.email',
            'u.password',
            'u.activation_token',
            'u.email_verified_at',
            'u.remember_token',
            'u.created_at',
            'u.updated_at'
        )
        ->orderByDesc('livraisons_count')
        ->limit(9)
        ->get();
        $topSellingItems = DB::table('details_commandes')
        ->select('id_produit', DB::raw('COUNT(id_produit) as total_sold'))
        ->groupBy('id_produit')
        ->orderByDesc('total_sold')
        ->take(8) // Afficher les 8 articles les plus vendus
        ->get();

    // Récupérer les informations complètes des produits
    $topSellingProducts = \App\Models\Produit::whereIn('id', $topSellingItems->pluck('id_produit'))
        ->get();
    // 3️⃣ Redirections si connecté
    if ($user = auth()->user()) {
        if ($user->hasRole('admin'))   { return redirect('/admin/dashboard'); }
        if ($user->hasRole('vendeur')) { return redirect('/vendeur/dashboard'); }
    }

    $newProducts = Produit::orderByDesc('created_at')
    ->take(6) // Afficher les 6 produits les plus récents
    ->get();

    $randomProducts = Produit::with('images') // Assurez-vous de charger la relation 'images'
            ->inRandomOrder()
            ->take(5) // Ajustez le nombre d'images à afficher
            ->get();
    // 4️⃣ Vue publique
    return view('front.pages.index', compact('topSellers','period','topSellingProducts','newProducts','randomProducts' ));
});

//activation
Route::get('/vendeur/activation/{token}', [ActivationController::class , 'showForm'])->name('vendeur.activation')->middleware('signed');
Route::post('/vendeur/activation/{token}', [ActivationController::class, 'processForm'])->name('vendeur.activation.submit');

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
    Route::get('/admin/notifications/check', [NotificationController::class ,'checkNotifications'])->name('admin.notifications.check');
});

//vendeur
Route::middleware(['auth', 'role:vendeur'])->group(function (){
    Route::get('/vendeurs/dashboard', [VendeurController::class,'index'])->name('vendeur.dashboard');

});

//Acheteur
Route::middleware('auth','role:acheteur')->group(function () {
    Route::get('/panier/ajouter/{produit}', [PanierController::class, 'ajouterAuPanier'])->name('panier.ajouter');
});
// front
Route::get('/front/explore', [ExploreController::class, 'index'])->name('explore.index');
Route::get('/front/vendeur', [VendeurViewController::class, 'index'])->name('vendeurview.index');
Route::get('/front/vendeur/{id}', [VendeurViewController::class, 'view'])->name('vendeur.view');
Route::get('/front/produit/{id}', [ProduitViewController::class, 'View'])->name('produit.view');
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




require __DIR__.'/auth.php';
