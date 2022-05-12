<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\SchoolController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('complaints/create')->name('complaints.create');
    Route::get('schools/create')->name('schools.create');

    Route::controller(ComplaintController::class)->group(function () {
        Route::get('complaints/list', 'getComplaints')->name('complaints.list');
    });

    Route::controller(SchoolController::class)->group(function () {
        Route::get('schools/list', 'getSchools')->name('schools.list');
        Route::post('/import_parse', 'parseImport')->name('import_parse');
        Route::post('/import_process', 'processImport')->name('import_process');
    });

    Route::resource('complaints', ComplaintController::class);
    Route::resource('schools', SchoolController::class);
});