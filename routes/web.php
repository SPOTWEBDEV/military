<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['as' => "frontend."], function(){
    Route::get('/',[FrontendController::class, "index"])->name('index');
    Route::get('/apply-leave',[FrontendController::class, "applyLeave"])->name('applyLeave');
    Route::get('/carepack',[FrontendController::class, "carepack"])->name('carepack');
    Route::get('/flight',[FrontendController::class, "flight"])->name('flight');
    Route::get('/flight-application',[FrontendController::class, "flightApplication"])->name('flightApplication');
    Route::get('/leave-application',[FrontendController::class, "leaveApplication"])->name('leaveApplication');
    // Route::post('/leave-application',[FrontendController::class, "storeLeave"])->name('storeLeave');
    Route::get('/track',[FrontendController::class, "track"])->name('track');
    Route::post('/track',[FrontendController::class, "trackId"])->name('trackId');
});

Route::post('send-email', [adminController::class, 'sendemail'])->name('sendemail');
Route::get('view-email',[adminController::class, 'viewemail'])->name('viewemail');


Route::group(["as" => "leave."], function () {
    Route::post('/store', [LeaveController::class, 'create'])->name('store');
    Route::patch('update/{id}', [LeaveController::class, 'update'])->name('update');
    Route::post('delete/{id}', [LeaveController::class, 'delete'])->name('delete');
});
Route::group(["as" => "flight."], function () {
    Route::post('store', [FlightController::class, 'create'])->name('store');
    Route::patch('update/{id}', [FlightController::class, 'update'])->name('update');
    Route::patch('delete/{id}', [FlightController::class, 'delete'])->name('delete');
});


Route::group(["prefix" => "admin", "as" => "admin.", "middleware" => "checkUserRole"], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/leaves', [AdminController::class, 'leaves'])->name('leaves');
    Route::get('/flights', [AdminController::class, 'flights'])->name('flights');
    Route::get('/leave-email/{id}', [AdminController::class, 'leaveEmail'])->name('leaveEmail');
    Route::get('/flight-email/{id}', [AdminController::class, 'flightEmail'])->name('flightEmail');
    Route::get('/soldiers', [AdminController::class, 'soldiers'])->name('soldiers');
    Route::post('/soldier', [AdminController::class, 'soldier'])->name('soldier');
    Route::get('/soldier-profile', [AdminController::class, 'soldierProfile'])->name('soldierProfile');
    Route::get('/soldier-edit/{id}', [AdminController::class, 'soldierEdit'])->name('soldier.edit');
    Route::put('/soldier-update/{id}', [AdminController::class, 'soldierUpdate'])->name('soldier.update');
    Route::post('/soldier-delete/{id}', [AdminController::class, 'soldierDelete'])->name('soldier.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
