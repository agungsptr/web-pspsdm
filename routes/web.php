<?php

use App\Model\Category;
use App\Model\Content;
use Illuminate\Routing\RouteGroup;
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

Auth::routes();

Route::get('/', function () {
    $posts = Content::where("category_id", 107)->get()->take(3);
    return view('home.index', ["posts" => $posts]);
})->name('home');

// disable route '/register'
Route::match(["GET", "POST"], "/register", function () {
    return abort(404);
});



//admin page
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect()->route("post.index");
    });
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('gallery', 'GalleryController');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('category/{category}', 'PostDetailController@byCategory')->name('post.bycategory');
    Route::get('id/{id}', 'PostDetailController@byId')->name('post.byid');
});

Route::group(['prefix' => 'getdata'], function () {
    Route::get('user', 'DataTableController@getUser')->name('getdata.user');
    Route::get('category', 'DataTableController@getCategory')->name('getdata.category');
    Route::get('post', 'DataTableController@getPost')->name('getdata.post');
    Route::get('gallery', 'DataTableController@getGallery')->name('getdata.gallery');
});



//profile page
Route::get('sejarah', function () {
    return view('home.sejarah');
})->name('home.sejarah');

Route::get('visi-misi', function () {
    return view('home.visi-misi');
})->name('home.visi-misi');

Route::get('pengalaman-proyek', function () {
    return view('home.pengalaman-proyek');
})->name('home.pengalaman-proyek');

Route::get('galery', 'PostDetailController@gallery')->name('home.gallery');

Route::get('buletin', function () {
    $post = Content::whereNotNull('document')->paginate(10);
    return view('home.buletin', ['files' => $post]);
})->name('home.buletin');

Route::get('program', function () {
    return view('home.category.list');
})->name('home.list-program');

Route::get('program/category/{category_id}', 'PostDetailController@byCategory')
    ->name('home.list-category-post');

Route::get('program/detail/{post_id}/post', function ($post_id) {
    $post = Content::findOrFail($post_id);
    return view('home.post.detail', ['post' => $post]);
})->name('home.detail-post');
