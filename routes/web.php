<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//my routes
Route::group(['middleware' => ['auth', 'verified']], function() {
   

    Route::get('/client',[ClientController::class,'index'])->name('client.index'); //url path, funtion in controller, route name
    Route::get('/client/create',[ClientController::class,'create'])->name('client.create');
    
    Route::get('/client/createitem',[ClientController::class,'createitem'])->name('client.createitem'); //item create page
    Route::post('/client/storeitem',[ClientController::class,'storeitem'])->name('client.storeitem'); //check url path if error
    
    Route::post('/client',[ClientController::class,'store'])->name('client.store');
    Route::get('/client/{item}/edit',[ClientController::class,'edit'])->name('item.edit');
    Route::put('/client/{item}/update',[ClientController::class,'update'])->name('item.update');
    Route::delete('/client/{item}/destroy',[ClientController::class,'destroy'])->name('item.destroy');
});
