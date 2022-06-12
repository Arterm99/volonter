<?php


use App\Http\Controllers\Volonter\AddController;
use App\Http\Controllers\Product\CategoriesController;
use App\Http\Controllers\Product\DeleteProductController;
use App\Http\Controllers\Product\PageEditController;
use App\Http\Controllers\Product\EditProductController;
use App\Http\Controllers\Product\OneShowProductController;
use App\Http\Controllers\Product\RegProdController;
use App\Http\Controllers\Product\ShowController;
use App\Http\Controllers\Product\TagColorController;
use App\Http\Controllers\Volonter\AddressController;
use App\Http\Controllers\Volonter\OneVolontertController;
use App\Http\Controllers\Volonter\SkillsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Volonter\ShowOrgController;
use App\Http\Controllers\Volonter\ShowVolonterController;






// My project
use Illuminate\Support\Facades\Cache;
use App\Models\AdminPanel;
use App\Models\Category;
use App\Models\Tag;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

require __DIR__.'/auth.php';


// My project
// Volonter
Route::group(['namespace' => 'volonter'], function() {

    // Волонтеры
    Route::get('volonter', [ShowVolonterController::class, '__invoke'])
        ->name('volonter');

    // Categories
    Route::get('skills{skills_id}', [SkillsController::class, '__invoke'])
        ->name('skills');
    Route::get('address{addres_id}', [AddressController::class, '__invoke'])
        ->name('address');

    Route::get('/volonter/{id}', [OneVolontertController::class, '__invoke'])
        ->name('one-volonter');

    // Неком Орг
    Route::get('org', [ShowOrgController::class, '__invoke'])
        ->name('org');

});

// Index
Route::get('/', function () {
    return view('index');
})->middleware('throttle:6,1')->name('home');
