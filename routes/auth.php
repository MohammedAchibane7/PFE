<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['web', 'RedirectIfAuthenticated'])->group(function () {
//   Route::get('/candidats', function () {
//       return view('candidat.index');
//   })->name('candidats.index');

//   Route::get('/candidats/register', [RegisteredUserController::class, 'create'])
//       ->name('candidat.register');
//   Route::post('/candidats/register', [RegisteredUserController::class, 'store']);

//   Route::get('/candidats/login', [AuthenticatedSessionController::class, 'create'])
//       ->name('candidat.login');
//   Route::post('/candidats/login', [AuthenticatedSessionController::class, 'store']);

//   Route::middleware(['auth:candidat'])->group(function () {
//       // Your protected routes here
//   });
// });
    // Route::get('verify-email', EmailVerificationPromptController::class)
    //             ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //             ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'update'])->name('password.update');





// Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
// ->name('password.request');

// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
// ->name('password.email');

// Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
// ->name('password.reset');

// Route::post('reset-password', [NewPasswordController::class, 'store'])
// ->name('password.store');
