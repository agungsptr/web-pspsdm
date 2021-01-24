<?php

use App\Model\Category;
use App\Model\Content;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

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
Route::get('/', function () {
    $posts = Content::where("category_id", 100)->get()->take(3);
    return view('home.index', ["posts" => $posts]);
})->name('home');
Route::view('sejarah', 'home.sejarah')->name('home.sejarah');
Route::view('visi-misi', 'home.visi-misi')->name('home.visi-misi');
Route::view('pengalaman-proyek', 'home.pengalaman-proyek')->name('home.pengalaman-proyek');
Route::view('program', 'home.program-kerja.index')->name('home.program-kerja');

//program kerja
Route::get('pertanian', 'ProgramKerjaController@Pertanian')->name('home.pk.pertanian');
Route::get('kesehatan', 'ProgramKerjaController@Kesehatan')->name('home.pk.kesehatan');
Route::get('air-bersih', 'ProgramKerjaController@AirBersih')->name('home.pk.airbersih');
Route::get('pendidikan', 'ProgramKerjaController@Pendidikan')->name('home.pk.pendidikan');
Route::get('pemberdayaan-perempuan', 'ProgramKerjaController@PemberdayaanPerempuan')->name('home.pk.pp');
Route::get('usaha-ekonomi-produktif', 'ProgramKerjaController@UsahaEkonomiProduktif')->name('home.pk.uep');
Route::get('hutan-kemasyarakatan','ProgramKerjaController@HutanKemasyarakatan')->name('home.pk.hkm');
Route::get('padat-karya', 'ProgramKerjaController@PadatKarya')->name('home.pk.padatkarya');
Route::get('penelitian-dan-pelatihan', 'ProgramKerjaController@PenelitianDanPelatihan')->name('home.pk.pdp');
Route::get('pemberdayaan-masyarakat-adat', 'ProgramKerjaController@PemberdayaanAdat')->name('home.pk.pma');


// mungkin berubah
Route::get('program/category/{category_id}', 'PostDetailController@byCategory')->name('home.list-category-post');

Route::get('program/detail/{post_id}/post', function ($post_id) {
    $post = Content::findOrFail($post_id);
    return view('home.post.detail', ['post' => $post]);
})->name('home.detail-post');

Route::get('buletin', function () {
    $post = Content::whereNotNull('document')->paginate(10);
    return view('home.buletin', ['files' => $post]);
})->name('home.buletin');
