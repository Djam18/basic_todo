<?php

use App\Post;
use App\Video;
use App\Contracts\BillingInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/todos', function () {
    return view('todos.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form-csrf', function () {
    return view('test-csrf');
});

Route::post('/form-csrf', function () {
    return 'Données soumises en toute sécurité.';
})->middleware('check.useragent');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
Route::get('/restricted', function () {
    return 'Bienvenue sur la page restreinte !';
})->middleware('check.age');

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', [FormController::class, 'handle']);

Route::get('/products', [ProductController::class, 'index']);

Route::post('/form-submit', function (\Illuminate\Http\Request $request) {
    $name = $request->input('name');
    return "Nom soumis : " . $name;
});
Route::get('/test-1', function() {
    return response()->json('test response');
});

Route::get('info-prive', function() {
    return redirect()->route('login');
});


Route::get('simple-response', function() {
    return 'Hello';
});

Route::get('/profile/{id}', function ($id) {
    return 'Profil utilisateur : ' . $id;
})->name('profile');

Route::get('/store-session', function () {
    Session::put('user', 'Djamal');
    return 'Session enregistrée.';
});

Route::get('/get-session', function () {
    return 'Utilisateur : ' . Session::get('user');
});

Route::get('/forget-session', function () {
    Session::forget('user');
    return 'Session supprimée.';
});

Route::post('/contact', 'ContactController@submit');

Route::get('/test-erreur', function () {
    abort(404);
});

Route::get('/test-log', function () {
    Log::info('Visite de la page test-log à ' . now());
    Log::warning('Ceci est un avertissement pour test');
    Log::error('Erreur simulée pour démonstration');
    return 'Logs générés !';
});

Route::get('/test-billing', function (BillingInterface $billing) {
    return $billing->charge(5000);
});

// routes/web.php
Route::get('/facade-exemple', function () {
    \Illuminate\Support\Facades\Cache::put('visite', now(), 5);
    \Illuminate\Support\Facades\Log::info('Page vue à ' . now());
    view()->share('year', date('Y'));
    return view('facade');
});

Route::get('/test-queue', 'TestQueueController@trigger');
Route::post('upload-cv', 'ResumeController@uploadCV')->name('add.resume');

Route::get('/helpers/array', 'HelperController@arrayHelpers');
Route::get('/helpers/str', 'HelperController@stringHelpers');
Route::get('/helpers/debug', 'HelperController@debugHelpers');
Route::get('/posts/{post}/edit', 'PostController@update');
Route::resource('users', 'UserController');
// routes/web.php
Route::get('/query-demo', 'QueryBuilderDemoController@showActiveUsers');
Route::get('/transaction-test', 'TransactionDemoController@createUserWithProfile');
Route::get('/users', 'UserListController@index');
Route::get('/user/{id}/profile', function ($id) {
    return User::find($id)->profile;
});

Route::get('/user/{id}/posts', function ($id) {
    return User::find($id)->posts;
});

Route::get('/post/{id}/tags', function ($id) {
    return Post::find($id)->tags;
});

Route::get('/post/{id}/comments', function ($id) {
    return Post::find($id)->comments;
});

Route::get('/video/{id}/comments', function ($id) {
    return Video::find($id)->comments;
});
