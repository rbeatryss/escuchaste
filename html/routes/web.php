<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnippetController;
use App\Models\Snippet;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("user/new", [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store'])->name('user_store');


Route::get('/', function () {
    return view('auth/login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/login', function () {
    return view('feed');
});

Route::post('/signup', function () {
    return view('feed');
});

Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::get('/feed', function () {
    $userName = 'Maria';
    return view('feed')->with('userName', $userName);
})->name('feed');

Route::get('/feed', function () {
    $snippets = App\Models\Snippet::all();
    return view('feed', ['snippets' => $snippets]);
})->name('feed');


Route::get('snippet', [SnippetController::class, "index"]);

Route::get('snippet/create', [SnippetController::class, "create"])->name("snippet.create");
// Route::post('snippet/create', [Snippet::class, "store"]);
Route::post('/snippet', [SnippetController::class, 'store'])->name('snippet.store');


Route::get('/create', function () {
    return view('snippet');
});

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
