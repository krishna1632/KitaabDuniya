<?php

use App\Http\Controllers\BookApproveController;
use App\Http\Controllers\CompetitiveController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\GraduationController;
use App\Http\Controllers\MySalesController;
use App\Http\Controllers\OrganisationRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permissions Routes
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/permissions', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    // Roles Routes
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

    // Users Routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Orgainsation Request Routes
    Route::get('/org_request', [OrganisationRequestController::class, 'index'])->name('org_request.index');
    Route::get('/org_request/add-user/{id}', [OrganisationRequestController::class, 'addUser'])->name('org_request.addUser');

    // Sell Routes
    Route::get('/sell', [SellController::class, 'index'])->name('sell.index');
    // Route::get('/sell/create_graduation', [SellController::class, 'createGraduation'])->name('sell.create_graduation');
    // Route::get('/sell/create_general', [SellController::class, 'createGeneral'])->name('sell.create_general');
    // Route::get('/sell/create_competitive', [SellController::class, 'createCompetitive'])->name('sell.create_competitive');

    // Schools Routes
    Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::post('/schools', [SchoolController::class, 'store'])->name('schools.store');

    // Graduation routes
    Route::get('/graduations/create', [GraduationController::class, 'create'])->name('graduations.create');
    Route::post('/graduations', [GraduationController::class, 'store'])->name('graduations.store');

    // General routes
    Route::get('/generals/create', [GeneralController::class, 'create'])->name('generals.create');
    Route::post('/generals', [GeneralController::class, 'store'])->name('generals.store');

    // Competitive routes
    Route::get('/competitives/create', [CompetitiveController::class, 'create'])->name('competitives.create');
    Route::post('/competitives', [CompetitiveController::class, 'store'])->name('competitives.store');

    // Approve Book routes
    Route::get('/approve_book', [BookApproveController::class, 'index'])->name('approve_book.index');
    Route::post('/approve-book/{id}', [BookApproveController::class, 'approveBook'])->name('approve.book');

    // Sales Routes
    Route::get('/sales/index', [MySalesController::class, 'index'])->name('sales.index');

    // Search book routes
    Route::get('/search_books', [SearchController::class, 'searchBooks'])->name('books.search');
    Route::get('/search_books/{type}/{id}', [SearchController::class, 'show'])->name('search_books.show');

});

require __DIR__ . '/auth.php';
