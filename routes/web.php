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

Route::get('/', [WelcomeController::class, 'index'])->name('/');
Route::get('/map', [WelcomeController::class, 'showMap'])->name('map');
Route::get('/barcod', [WelcomeController::class, 'bcode'])->name('barcod');

Route::view('/chat', 'chat')->middleware(['role:2']);
Route::resource('/messages', MessageController::class)->only([
    'index',
    'store'
]);


Route::get('/storeHome/{id}', [StoreController::class, 'index'])->name('storeHome');

Route::get('/storeImgSet', [StoreImageController::class, 'create'])->name('storeImgSet');
Route::post('/storeImgSave', [StoreImageController::class, 'store'])->name('storeImgSave');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('registered', [RegisterController::class,'create'])->name('registered');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['role:1,2,3']);
Route::get('/adminDash', [AdminController::class, 'index'])->name('adminDash')->middleware(['role:1']);

Route::get('/addMenu', [AdminController::class, 'createMenu'])->name('addMenu')->middleware(['role:1']);
Route::post('/saveMenu', [AdminController::class, 'storeMenu'])->name('saveMenu')->middleware(['role:1']);
Route::post('/getMenuParentLink', [AdminController::class, 'getMenuParentbyId'])->name('getMenuParentLink')->middleware(['role:1']);

Route::get('/addAttribute', [AdminController::class, 'createAttribute'])->name('addAttribute')->middleware(['role:1']);
Route::post('/saveAttribute', [AdminController::class, 'storeAttribute'])->name('saveAttribute')->middleware(['role:1']);

Route::get('/addPricingType', [AdminController::class, 'createPricingType'])->name('addPricingType')->middleware(['role:1']);
Route::post('/savePricingType', [AdminController::class, 'storePricingType'])->name('savePricingType')->middleware(['role:1']);

Route::get('/addCategory', [AdminController::class, 'createCategory'])->name('addCategory')->middleware(['role:1']);
Route::post('/saveCategory', [AdminController::class, 'storeCategory'])->name('saveCategory')->middleware(['role:1']);

Route::get('/vendDash', [VendorController::class, 'index'])->name('vendDash')->middleware(['role:2']);
Route::get('/addStore', [VendorController::class, 'create'])->name('addStore')->middleware(['role:2']);
Route::post('/vendor.saveStore', [VendorController::class, 'store'])->name('vendor.saveStore')->middleware(['role:2']);

Route::get('/addproduct', [VendorController::class, 'createProduct'])->name('addproduct')->middleware(['role:2']);
Route::post('/saveProduct', [VendorController::class, 'storeProduct'])->name('saveProduct')->middleware(['role:2']);
Route::get('/prodLister', [VendorController::class, 'productListing'])->name('prodLister')->middleware(['role:2']);
Route::post('/getProductByStore', [VendorController::class, 'fetchProductByStore'])->name('getProductByStore')->middleware(['role:2']);

Route::get('/addProductDetails', [VendorController::class, 'createProductDetails'])->name('addProductDetails')->middleware(['role:2']);
Route::post('/saveProductDetails', [VendorController::class, 'storeProductDetails'])->name('saveProductDetails')->middleware(['role:2']);

Route::get('/addProductAttributes', [VendorController::class, 'createProductAttributes'])->name('addProductAttributes')->middleware(['role:2']);
Route::post('/saveProductAttributes', [VendorController::class, 'storeProductAttributes'])->name('saveProductAttributes')->middleware(['role:2']);

Route::get('/addservice', [VendorController::class, 'createService'])->name('addservice')->middleware(['role:2']);
Route::post('/saveService', [VendorController::class, 'storeService'])->name('saveService')->middleware(['role:2']);

Route::get('/cls', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize');
    Artisan::call('route:clear');
})->name('cls');