<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ShowpropertyController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('landing');
});


// Route::get('/home/properties', function () {
//     return view('propertyview');
// });

Route::get('/home/properties', [ShowpropertyController::class, 'index'])->name('propertyview');

Route::get('/home/properties/filter', [ShowpropertyController::class, 'filterProperties'])->name('propertyview.filter');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/properties', function () {
        return view('property.properties');
    })->name('property.properties');
    // Route::get('/admin/agents', [AgentController::class, 'showview'])->name('agent.showview');
    Route::get('/admin/agents', function () {
        return view('agent.agents');
    })->name('agent.agents');
});

//agent Routes List
Route::middleware(['auth', 'user-access:agent'])->group(function () {

    Route::get('/agent/home', [HomeController::class, 'agentHome'])->name('agent.home');
});


Route::resource('properties', PropertyController::class)-> middleware(['auth']);

Route::resource("/agent", AgentController::class);


