<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    $post = Post::latest()->first();
    if (is_null($post)) {
        $post = (object)[
        'title'=>'Super APP',
        'content'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Suscipit quod quaerat ad, asperiores excepturi, ipsa eligendi eum nostrum
        et quia similique dolore accusantium odio sunt!'
    ];
    }

    return view('welcome', ['post'=>$post]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
