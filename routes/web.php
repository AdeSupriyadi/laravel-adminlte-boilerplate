<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// AdminLTE scaffold routes
Route::middleware(['web', 'auth'])->prefix('admin')->name('adminlte.')->group(function () {
    // [adminlte:roles]
    Route::get('roles', [\App\Http\Controllers\AdminLte\RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [\App\Http\Controllers\AdminLte\RoleController::class, 'create'])->name('roles.create');
    Route::post('roles', [\App\Http\Controllers\AdminLte\RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{role}/edit', [\App\Http\Controllers\AdminLte\RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{role}', [\App\Http\Controllers\AdminLte\RoleController::class, 'update'])->name('roles.update');
    Route::delete('roles/{role}', [\App\Http\Controllers\AdminLte\RoleController::class, 'destroy'])->name('roles.destroy');

    // [adminlte:users]
    Route::get('users', [\App\Http\Controllers\AdminLte\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [\App\Http\Controllers\AdminLte\UserController::class, 'create'])->name('users.create');
    Route::post('users', [\App\Http\Controllers\AdminLte\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [\App\Http\Controllers\AdminLte\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [\App\Http\Controllers\AdminLte\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [\App\Http\Controllers\AdminLte\UserController::class, 'destroy'])->name('users.destroy');

    // [adminlte:activity-log]
    Route::get('activity', [\App\Http\Controllers\AdminLte\ActivityController::class, 'index'])->name('activity.index');

    // [adminlte:impersonation]
    Route::get('impersonate/{user}', [\App\Http\Controllers\AdminLte\ImpersonationController::class, 'start'])->name('impersonate.start');
    Route::get('impersonate-leave', [\App\Http\Controllers\AdminLte\ImpersonationController::class, 'stop'])->name('impersonate.stop');

    // [adminlte:notifications]
    Route::get('notifications', [\App\Http\Controllers\AdminLte\NotificationController::class, 'index'])->name('notifications.index');
    Route::put('notifications/read-all', [\App\Http\Controllers\AdminLte\NotificationController::class, 'readAll'])->name('notifications.read-all');
    Route::put('notifications/{id}/read', [\App\Http\Controllers\AdminLte\NotificationController::class, 'read'])->name('notifications.read');
    Route::delete('notifications/{id}', [\App\Http\Controllers\AdminLte\NotificationController::class, 'destroy'])->name('notifications.destroy');

    // [adminlte:faq]
    Route::view('faq', 'adminlte.faq.index')->name('faq.index');

    // [adminlte:pricing]
    Route::view('pricing', 'adminlte.pricing.index')->name('pricing.index');

    // [adminlte:invoice]
    Route::get('invoice', [\App\Http\Controllers\AdminLte\InvoiceController::class, 'show'])->name('invoice.show');

    // [adminlte:settings]
    Route::get('settings', [\App\Http\Controllers\AdminLte\SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [\App\Http\Controllers\AdminLte\SettingsController::class, 'update'])->name('settings.update');

    // [adminlte:profile]
    Route::get('profile', [\App\Http\Controllers\AdminLte\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\AdminLte\ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [\App\Http\Controllers\AdminLte\ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('profile/avatar', [\App\Http\Controllers\AdminLte\ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
    Route::put('profile/other-sessions', [\App\Http\Controllers\AdminLte\ProfileController::class, 'logoutOtherDevices'])->name('profile.sessions.logout-others');
    Route::delete('profile', [\App\Http\Controllers\AdminLte\ProfileController::class, 'destroy'])->name('profile.destroy');

    // [adminlte:file-manager]
    Route::get('file-manager', [\App\Http\Controllers\AdminLte\FileManagerController::class, 'index'])->name('file-manager.index');
    Route::post('file-manager/upload', [\App\Http\Controllers\AdminLte\FileManagerController::class, 'upload'])->name('file-manager.upload');
    Route::delete('file-manager', [\App\Http\Controllers\AdminLte\FileManagerController::class, 'destroy'])->name('file-manager.destroy');

    // [adminlte:projects]
    Route::get('projects', [\App\Http\Controllers\AdminLte\ProjectsController::class, 'index'])->name('projects.index');
    Route::post('projects', [\App\Http\Controllers\AdminLte\ProjectsController::class, 'store'])->name('projects.store');
    Route::put('projects/{project}', [\App\Http\Controllers\AdminLte\ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('projects/{project}', [\App\Http\Controllers\AdminLte\ProjectsController::class, 'destroy'])->name('projects.destroy');

    // [adminlte:calendar]
    Route::get('calendar', [\App\Http\Controllers\AdminLte\CalendarController::class, 'index'])->name('calendar.index');
    Route::get('calendar/feed', [\App\Http\Controllers\AdminLte\CalendarController::class, 'feed'])->name('calendar.feed');
    Route::post('calendar', [\App\Http\Controllers\AdminLte\CalendarController::class, 'store'])->name('calendar.store');
    Route::put('calendar/{event}', [\App\Http\Controllers\AdminLte\CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/{event}', [\App\Http\Controllers\AdminLte\CalendarController::class, 'destroy'])->name('calendar.destroy');

    // [adminlte:kanban]
    Route::get('kanban', [\App\Http\Controllers\AdminLte\KanbanController::class, 'index'])->name('kanban.index');
    Route::post('kanban/cards', [\App\Http\Controllers\AdminLte\KanbanController::class, 'storeCard'])->name('kanban.cards.store');
    Route::post('kanban/reorder', [\App\Http\Controllers\AdminLte\KanbanController::class, 'reorder'])->name('kanban.reorder');

    // [adminlte:chat]
    Route::get('chat', [\App\Http\Controllers\AdminLte\ChatController::class, 'index'])->name('chat.index');
    Route::get('chat/{conversation}', [\App\Http\Controllers\AdminLte\ChatController::class, 'index'])->name('chat.show');
    Route::post('chat/{conversation}', [\App\Http\Controllers\AdminLte\ChatController::class, 'store'])->name('chat.store');

    // [adminlte:mailbox]
    Route::get('mailbox', [\App\Http\Controllers\AdminLte\MailboxController::class, 'index'])->name('mailbox.index');
    Route::get('mailbox/compose', [\App\Http\Controllers\AdminLte\MailboxController::class, 'create'])->name('mailbox.create');
    Route::post('mailbox', [\App\Http\Controllers\AdminLte\MailboxController::class, 'store'])->name('mailbox.store');
    Route::get('mailbox/{message}', [\App\Http\Controllers\AdminLte\MailboxController::class, 'show'])->name('mailbox.show');
    Route::delete('mailbox/{message}', [\App\Http\Controllers\AdminLte\MailboxController::class, 'destroy'])->name('mailbox.destroy');

    // [adminlte:dashboard]
    Route::get('dashboard', [\App\Http\Controllers\AdminLte\DashboardController::class, 'index'])->name('dashboard');
});

// AdminLTE authentication routes
Route::middleware('guest')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

    Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

    Route::get('forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('reset-password/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    // Email verification — protect app routes with the `verified` middleware once
    // your User model implements MustVerifyEmail (adminlte:make-auth wires it in).
    Route::get('email/verify', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'notice'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'verify'])
        ->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [\App\Http\Controllers\Auth\EmailVerificationController::class, 'send'])
        ->middleware('throttle:6,1')->name('verification.send');

    // Password confirmation — guard sensitive actions with the `password.confirm` middleware.
    Route::get('confirm-password', [\App\Http\Controllers\Auth\ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [\App\Http\Controllers\Auth\ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
