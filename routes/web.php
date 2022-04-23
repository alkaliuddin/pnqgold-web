<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\SchoolController;

require __DIR__ . '/helpdesk.php';

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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'guest'], function () {
    Route::get('helpdesk', [GuestController::class, 'index'])->name('guest.index');
});

Route::group(['prefix' => 'helpdesk', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Auth::routes();

?>