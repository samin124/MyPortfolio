<?php
use App\Models\Certificate;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ContactController;

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/certificates', function () {
    return view('certificates');
})->name('certificates.index');

Route::get('/certificates/{category}', function ($category) {
    $certificates = Certificate::where('category', $category)->get();
    return view('category', compact('certificates', 'category'));
})->name('certificates.category');



Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/skill', function () {
    return view('skill');
});

