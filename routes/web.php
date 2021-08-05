<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreImageController;
use App\Http\Controllers\MessageController;
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

// Landing Page Routes
Route::get('/', [WelcomeController::class, 'index'])->name('/');

// Map Display Routes
Route::get('/map', [WelcomeController::class, 'showMap'])->name('map');

// Admin BarCode Related Routes
Route::get('/barcod', [WelcomeController::class, 'bcode'])->name('barcod');

// Chat Related Routes...
Route::view('/chat', 'chat')->middleware(['role:2']);
Route::resource('/messages', MessageController::class)->only([
    'index',
    'store'
]);

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('registered', [RegisterController::class,'create'])->name('registered');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['role:1,2,3']);

// Admin Dashboard Related Routes...
Route::get('/adminDash', [AdminController::class, 'index'])->name('adminDash')->middleware(['role:1']);

// Admin Menu Related Routes...
Route::get('/addMenu', [AdminController::class, 'createMenu'])->name('addMenu')->middleware(['role:1']);
Route::post('/saveMenu', [AdminController::class, 'storeMenu'])->name('saveMenu')->middleware(['role:1']);
Route::post('/getMenuParentLink', [AdminController::class, 'getMenuParentbyId'])->name('getMenuParentLink')->middleware(['role:1']);

// Admin Attribute Related Routes...
Route::get('/addAttribute', [AdminController::class, 'createAttribute'])->name('addAttribute')->middleware(['role:1']);
Route::post('/saveAttribute', [AdminController::class, 'storeAttribute'])->name('saveAttribute')->middleware(['role:1']);

// Admin Pricing Related Routes...
Route::get('/addPricingType', [AdminController::class, 'createPricingType'])->name('addPricingType')->middleware(['role:1']);
Route::post('/savePricingType', [AdminController::class, 'storePricingType'])->name('savePricingType')->middleware(['role:1']);

// Admin Category Related Routes...
Route::get('/addCategory', [AdminController::class, 'createCategory'])->name('addCategory')->middleware(['role:1']);
Route::post('/saveCategory', [AdminController::class, 'storeCategory'])->name('saveCategory')->middleware(['role:1']);

// Vendor Related Routes...
Route::get('/vendDash', [VendorController::class, 'index'])->name('vendDash')->middleware(['role:2']);

// Vendor Store Related Routes...
Route::get('/storeHome/{id}', [StoreController::class, 'index'])->name('storeHome');
Route::get('/addStore', [VendorController::class, 'create'])->name('addStore')->middleware(['role:2']);
Route::post('/vendor.saveStore', [VendorController::class, 'store'])->name('vendor.saveStore')->middleware(['role:2']);
Route::get('/removeStore/{id}', [VendorController::class, 'eradicateStore'])->name('removeStore')->middleware(['role:2']);

// Vendor Store Image Related Page Routes...
Route::get('/storeImgSet', [StoreImageController::class, 'create'])->name('storeImgSet');
Route::post('/storeImgSave', [StoreImageController::class, 'store'])->name('storeImgSave');

// Vendor Product Related Routes...
Route::get('/addproduct', [VendorController::class, 'createProduct'])->name('addproduct')->middleware(['role:2']);
Route::post('/saveProduct', [VendorController::class, 'storeProduct'])->name('saveProduct')->middleware(['role:2']);
Route::get('/prodLister', [VendorController::class, 'productListing'])->name('prodLister')->middleware(['role:2']);
Route::post('/getProductByStore', [VendorController::class, 'fetchProductByStore'])->name('getProductByStore')->middleware(['role:2']);

// Vendor Product Details Related Routes...
Route::get('/addProductDetails', [VendorController::class, 'createProductDetails'])->name('addProductDetails')->middleware(['role:2']);
Route::post('/saveProductDetails', [VendorController::class, 'storeProductDetails'])->name('saveProductDetails')->middleware(['role:2']);

// Vendor Product Attributes Related Routes...
Route::get('/addProductAttributes', [VendorController::class, 'createProductAttributes'])->name('addProductAttributes')->middleware(['role:2']);
Route::post('/saveProductAttributes', [VendorController::class, 'storeProductAttributes'])->name('saveProductAttributes')->middleware(['role:2']);

// Vendor Services Related Routes...
Route::get('/addservice', [VendorController::class, 'createService'])->name('addservice')->middleware(['role:2']);
Route::post('/saveService', [VendorController::class, 'storeService'])->name('saveService')->middleware(['role:2']);
Route::get('/changeService/{id}', [VendorController::class, 'editService'])->name('changeService')->middleware(['role:2']);
Route::post('/updateService', [VendorController::class, 'renovateService'])->name('updateService')->middleware(['role:2']);
Route::post('/removeService/{id}', [VendorController::class, 'eradicateService'])->name('removeService')->middleware(['role:2']);
Route::get('/showService/{id}', [VendorController::class, 'displayService'])->name('showService')->middleware(['role:2']);
Route::get('/indexServices', [VendorController::class, 'displayAllServices'])->name('indexServices')->middleware(['role:2']);

// Laravel Caches Clear Related Routes...
Route::get('/cls', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize');
    Artisan::call('route:clear');
})->name('cls');