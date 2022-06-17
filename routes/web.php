<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JournalController;
use App\Http\Controllers\EditorController;

use App\Models\Journal;
use App\Models\Category;

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
    $journals = Journal::where('status', 1)->latest('sku')->limit(10)->get();
    $categories = Category::orderBy('name')->get();
    $categoryChunk = collect($categories)->chunk(8);

    return view('welcome', compact('journals', 'categoryChunk'));
})->name('home');

Route::get('/journals', [JournalController::class, 'index'])->name('journals');
Route::get('/journals/{category:slug}', [JournalController::class, 'category'])->name('journals.category');
Route::get('/search/', [JournalController::class, 'search'])->name('search');

Route::get('/editors', [EditorController::class, 'index'])->name('editors');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');
// ->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
