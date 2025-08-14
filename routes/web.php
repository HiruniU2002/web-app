<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Admin\CakeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Models\Slider;
use App\Models\HomeSetting;
use App\Models\Cake;


Route::get('/', function () {
    $sliders = Slider::all();
    $HomeSettings = HomeSetting::all();
    $weddingCakes = Cake::where('cake_type', 'Wedding Cakes')->take(4)->get();
    $birthdayCakes = Cake::where('cake_type', 'Birthday Cakes')->take(4)->get();
    $cupcakes = Cake::where('cake_type', 'Cup Cakes')->take(4)->get();
    $brownies = Cake::where('cake_type', 'Brownies')->take(4)->get();
    
    return view('frontend.home', compact('sliders', 'HomeSettings', 'weddingCakes', 'birthdayCakes', 'cupcakes', 'brownies'));
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
});



Route::get('/product', function () {
     $cakes = Cake::all();
     $Asc = Cake::query();
    return view('frontend.product',compact('cakes','Asc'));
})->name('product');

Route::post('/admin/cakes/filter', [CakeController::class, 'filter'])->name('cakes.filter');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.add');

Route::put('/cart/increase-qunatity/{rowId}',[CartController::class,'increase_item_quantity'])->name('cart.increase.qty');
Route::put('/cart/reduce-qunatity/{rowId}',[CartController::class,'reduce_item_quantity'])->name('cart.reduce.qty');
Route::delete('/cart/remove/{rowId}',[CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,'empty_cart'])->name('cart.empty');

Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout');
Route::post('/place-order',[CartController::class,'place_order'])->name('cart.place.order');
Route::get('/order-confirmation',[CartController::class,'confirmation'])->name('cart.confirmation');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');



// Profile routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profileIndex', [ProfileController::class, 'index'])->name('index');
    Route::put('/profileUpdate', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
 
        Route::get('/SliderIndex', [SliderController::class, 'Index'])->name('index'); // URL: /slider/index
        Route::post('/saveSlider', [SliderController::class, 'storeslider'])->name('slider.store');
        Route::post('/sliderUpdate', [SliderController::class, 'updateslider'])->name('slider.update');
        Route::get('/deleteSlider/{id}', [SliderController::class, 'deleteslider'])->name('slider.delete');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
 
        Route::get('/homeIndex', [HomeController::class, 'index'])->name('home.index'); // URL: /slider/index
        Route::post('/savehome', [HomeController::class, 'storehomesetting'])->name('storehomesetting.store');
        Route::post('/homeUpdate', [HomeController::class, 'updatehomesetting'])->name('updatehomesetting.update');
        Route::get('/deletehome/{id}', [HomeController::class, 'deletehomesetting'])->name('deletehomesetting.delete');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
 
        Route::get('/permissionIndex', [PermissionController::class, 'index'])->name('permission.index'); // URL: /slider/index
        Route::post('/savePermission', [PermissionController::class, 'storepermission'])->name('permission.store');
        Route::post('/PermissionUpdate', [PermissionController::class, 'updatepermission'])->name('permission.update');
        Route::get('/deletePermission/{id}', [PermissionController::class, 'deletepermission'])->name('permission.delete');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
        Route::get('/roleIndex', [RoleController::class, 'index'])->name('role.index'); // URL: /slider/index
        Route::post('/saveRole', [RoleController::class, 'storerole'])->name('role.store');
        Route::post('/RoleUpdate', [RoleController::class, 'updaterole'])->name('role.update');
        Route::get('/deleteRole/{id}', [RoleController::class, 'deleterole'])->name('role.delete');

        Route::get('/permissionToRole/{id}', [RoleController::class, 'givePermissionToRole'])->name('role.givePermissionToRole');
        Route::put('/givePermissionToRole/{id}', [RoleController::class, 'giveRoleToPermission'])->name('role.giveRoleToPermission');
});


Route::middleware(['auth', 'verified','role:admin'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
        Route::get('/userIndex', [UserController::class, 'index'])->name('user.index'); // URL: /slider/index
        Route::post('/saveUser', [UserController::class, 'storeuser'])->name('user.store');
        Route::post('/updateUser', [UserController::class, 'updateuser'])->name('user.update');
        Route::get('/deleteUser/{id}', [UserController::class, 'deleteuser'])->middleware(['role:admin'])->name('user.delete');      
    
});
Route::middleware(['auth', 'verified'])->group(function () {
    // Cake Management Routes
    Route::get('/cakes', [CakeController::class, 'index'])->name('admin.cakes');
    Route::post('/cakes', [CakeController::class, 'store'])->name('admin.cakes.store');
    Route::put('/cakes/{id}', [CakeController::class, 'update'])->name('admin.cakes.update');
    Route::delete('/cakes/{id}', [CakeController::class, 'destroy'])->name('admin.cakes.destroy');
});


Route::middleware(['auth', 'verified','role:admin'])->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');
    Route::POST('/contact/store',[ContactController::class,'contact_store'])->name('Contact.store');
    Route::get('/contact/admin',[ContactController::class,'contact'])->name('contacts.admin');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});

require __DIR__.'/auth.php';
