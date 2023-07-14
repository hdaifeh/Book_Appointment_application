<?php

use App\Http\Controllers\AppointmentController;

// Route for displaying the form to book appointments
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');

// Route for storing the appointment data
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Route for viewing all appointments
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
