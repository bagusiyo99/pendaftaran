<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaOperatorController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\admin\AdminAbout;
use App\Http\Controllers\admin\AdminAuth;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminBlog;
use App\Http\Controllers\admin\AdminDasboard;
use App\Http\Controllers\admin\AdminInformasi;
use App\Http\Controllers\admin\AdminPendaftaran;
use App\Http\Controllers\admin\AdminPesan;
use App\Http\Controllers\admin\AdminFormulir;
use App\Http\Controllers\admin\AdminFoto;
use App\Http\Controllers\AdminDaftarOnline;
use App\Http\Controllers\AdminKomen;
use App\Http\Controllers\AdminSiswa;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeBlog;
use App\Http\Controllers\HomeContact;
use App\Http\Controllers\HomeDaftarOnline;
use App\Http\Controllers\HomeFoto;
use App\Http\Controllers\HomePendaftaran;
use App\Http\Controllers\HomeSiswa;
use App\Http\Controllers\komenController;
use App\Http\Controllers\Kwitansi;
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

Route::get('/', [Home::class, 'index']);
Route::get('/detail/{id}', [Home::class, 'detail']);
Route::get('/informasi/{id}', [Home::class, 'informasi']);


Route::get('/formulir', [Home::class, 'formulir']);

Route::get('/foto', [HomeFoto::class, 'index']);
Route::get('/show/{id}', [HomeFoto::class,'detail']);

//  Route::resource('/komen', HomeBlog::class);




// Route::get('/daftar', [HomeDaftar::class, 'index']);
// Route::post('/daftar/send', [HomeDaftar::class, 'send']);

Route::get('/contact', [HomeContact::class, 'index']);
Route::post('/contact/send', [HomeContact::class, 'send']);

// Rute untuk menampilkan formulir input komentar
Route::get('/komentar', [KomenController::class, 'comen'])->name('komentar.comen');

// Rute untuk menyimpan komentar
Route::post('/komentar/send', [KomenController::class, 'send'])->name('komentar.send');


Route::get('/blog', [HomeBlog::class, 'blog'])->name('blog.index');

// Route to display a specific blog post and its comments
Route::get('/blog/{id}', [HomeBlog::class, 'detailBlog'])->name('blog.detail');
// Route::get('/pendaftaran', [HomePendaftaran::class, 'index']);
// Route::post('/pendaftaran/send', [HomePendaftaran::class, 'send']);

Route::get('/daftar_online', [HomeDaftarOnline::class, 'index']);
Route::post('/daftar_online/send', [HomeDaftarOnline::class, 'send']);


Route::get('/pendaftaran-export', [AdminPendaftaran::class, 'export']);
Route::get('/daftar_online-export', [AdminDaftarOnline::class, 'export']);

Route::middleware('check.pendaftar.limit')->group(function () {
Route::get('/pendaftaran', [HomePendaftaran::class, 'index']);
Route::post('/pendaftaran/send', [HomePendaftaran::class, 'send']);

});

Route::get('/download-kwitansi/{nama}', [HomePendaftaran::class, 'downloadKwitansi']);

Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/sukses', function () {
    $data = [
        'content'=> 'home/sukses/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/penuh', function () {
    $data = [
        'content'=> 'home/penuh/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/full', function () {
    $data = [
        'content'=> 'home/full/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/alamat', function () {
    $data = [
        'content'=> 'home/alamat/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/prosedur', function () {
    $data = [
        'content'=> 'home/prosedur/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/home', function () {
 return redirect();
});

Auth::routes();



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function(){
     Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');

    
    Route::resource('/about', AdminAbout::class);
    Route::resource('/pesan', AdminPesan::class);
    Route::resource('/komen', AdminKomen::class);

    Route::resource('/pendaftaran', AdminPendaftaran::class);
    Route::resource('setting', SettingController::class);

        Route::resource('/siswa1', AdminSiswa::class);




    Route::resource('/daftar_online', AdminDaftarOnline::class);

    Route::resource('/banner', AdminBanner::class);
    Route::resource('/informasi', AdminInformasi::class);
    Route::resource('/blog', AdminBlog::class);
    Route::resource('/formulir', AdminFormulir::class);
    Route::resource('/foto', AdminFoto::class);

});




Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');



