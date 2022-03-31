<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\SchoolController;

Route::group(['prefix' => 'helpdesk', 'middleware' => ['auth']], function () {

    Route::controller(ComplaintController::class)->group(function () {
        Route::get('complaints/list', 'getComplaints')->name('complaints.list');
    });
    Route::controller(SchoolController::class)->group(function () {
        Route::get('schools/list', 'getSchools')->name('schools.list');
    });

    Route::resource('complaints', ComplaintController::class);
    Route::resource('schools', SchoolController::class);
});
?>