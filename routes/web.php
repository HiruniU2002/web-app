<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\Slider;
use App\Models\HomeSetting;


Route::get('/', function () {
    $sliders = Slider::all();
    $HomeSettings = HomeSetting::all();
    return view('frontend.home',compact('sliders','HomeSettings'));
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product', function () {
    return view('frontend.product');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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


Route::middleware(['auth', 'verified'])->group(function () {
    // Prefix URL with '/slider' and route names with 'slider.'
        Route::get('/userIndex', [UserController::class, 'index'])->name('user.index'); // URL: /slider/index
        Route::post('/saveUser', [UserController::class, 'storeuser'])->name('user.store');
        Route::post('/updateUser', [UserController::class, 'updateuser'])->name('user.update');
        Route::get('/deleteUser/{id}', [UserController::class, 'deleteuser'])->name('user.delete');

       
    
});


require __DIR__.'/auth.php';
