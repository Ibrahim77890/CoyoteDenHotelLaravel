<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About page
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/service', [HomeController::class, 'service'])->name('service');


// Rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');

// Services
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Bookings
Route::get('/bookings/create/{room}', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::middleware('auth')->group(function () {
    Route::get('services.create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services.store', [ServiceController::class, 'store'])->name('services.store');
    Route::put('services.update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('services.edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::delete('services.destroy/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
});


Route::get('services.index', [ServiceController::class, 'index'])->name('services.index');
require __DIR__.'/auth.php';