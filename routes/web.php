<?php

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
    return view('auth/login');
});

Route::get('login', function () {
    return view('auth/login');
});

Route::get('register', function () {
    return view('auth/login');
});


Route::get('logout', function () {
    return view('auth/login');
});


Route::get('webngi', function () {
    return view('webngi');
});

Route::get('/admin', function () {
    return view('admin/dashboardmaster');
});

Route::get('webngi2', function () {
    return view('webngi2');
});









Route::get('/webngi', [\App\Http\Controllers\webngiController::class, 'TampilLayanan'])->name('webngi');
Route::get('/webngi2', [\App\Http\Controllers\webngi2Controller::class, 'index'])->name('webngi2');


Route::get('/login', [\App\Http\Controllers\webngi2Controller::class, 'login'])->name('dashboard');




Auth::routes(['verify' => true]);

Route::group(['middleware' => ['web']], function () {
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin.dashboard', [App\Http\Controllers\DashboardController::class, 'Tampil'])->name('admin.dashboard');



// Artikel
Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
Route::get('/artikel', [\App\Http\Controllers\artikelController::class, 'index'])->name('artikel');
Route::get('/artikel/create-artikel', [\App\Http\Controllers\artikelController::class, 'create'])->name('create-artikel');
Route::post('/simpan-artikel', [\App\Http\Controllers\artikelController::class, 'store'])->name('simpan-artikel');
Route::post('/simpan-gambar', [\App\Http\Controllers\artikelController::class, 'storeImage'])->name('simpan-gambar');
Route::get('/update-artikel/{id}', [\App\Http\Controllers\artikelController::class, 'edit'])->name('update-artikel');
Route::post('/ubah-artikel/{id}', [\App\Http\Controllers\artikelController::class, 'update'])->name('ubah-artikel');
Route::get('/delete-artikel/{id}', [\App\Http\Controllers\artikelController::class, 'destroy'])->name('delete-artikel');
Route::get('/artikel/trash-artikel', [\App\Http\Controllers\artikelController::class, 'trash'])->name('trash-artikel');
Route::get('/artikel/restore-artikel/{id?}', [\App\Http\Controllers\artikelController::class, 'restore'])->name('restore-artikel');
Route::get('/artikel/delete-permanent/{id?}', [\App\Http\Controllers\artikelController::class, 'delete'])->name('delete-permanent-artikel');
Route::get('/artikel/{id}/show', [\App\Http\Controllers\artikelController::class, 'show'])->name('show-artikel');

//Images
Route::get('/image', [\App\Http\Controllers\imageController::class, 'index'])->name('image');
Route::get('/slider/create-image', [\App\Http\Controllers\imageController::class, 'create'])->name('create-image');
Route::post('/simpan-gambar', [\App\Http\Controllers\imageController::class, 'store'])->name('simpan-gambar');
Route::get('/update-image/{id}', [\App\Http\Controllers\imageController::class, 'edit'])->name('update-image');
Route::post('/ubah-image/{id}', [\App\Http\Controllers\imageController::class, 'update'])->name('ubah-image');
Route::get('/delete-image/{id}', [\App\Http\Controllers\imageController::class, 'destroy'])->name('delete-image');
Route::get('/image/trash-image', [\App\Http\Controllers\imageController::class, 'trash'])->name('trash-image');
Route::get('/image/restore-image/{id?}', [\App\Http\Controllers\imageController::class, 'restore'])->name('restore-image');
Route::get('/image/delete-permanent/{id?}', [\App\Http\Controllers\imageController::class, 'delete'])->name('delete-permanent-image');

//logo

Route::get('/logo', [\App\Http\Controllers\logoController::class, 'index'])->name('logo');
Route::get('/logo/create-logo', [\App\Http\Controllers\logoController::class, 'create'])->name('create-logo');
Route::post('/simpan-logo', [\App\Http\Controllers\logoController::class, 'store'])->name('simpan-logo');
Route::get('/update-logo/{id}', [\App\Http\Controllers\logoController::class, 'edit'])->name('update-logo');
Route::post('/ubah-logo/{id}', [\App\Http\Controllers\logoController::class, 'update'])->name('ubah-logo');
Route::get('/delete-logo/{id}', [\App\Http\Controllers\logoController::class, 'destroy'])->name('delete-logo');
Route::get('/logo/trash-logo', [\App\Http\Controllers\logoController::class, 'trash'])->name('trash-logo');
Route::get('/logo/restore-logo/{id?}', [\App\Http\Controllers\logoController::class, 'restore'])->name('restore-logo');
Route::get('/logo/delete-permanent/{id?}', [\App\Http\Controllers\logoController::class, 'delete'])->name('delete-permanent-logo');


//layanan
Route::get('/layanan', [\App\Http\Controllers\layananController::class, 'index'])->name('layanan');
Route::get('/layanan/create-layanan', [\App\Http\Controllers\layananController::class, 'create'])->name('create-layanan');
Route::post('/simpan-layanan', [\App\Http\Controllers\layananController::class, 'store'])->name('simpan-layanan');
Route::get('/update-layanan/{id}', [\App\Http\Controllers\layananController::class, 'edit'])->name('update-layanan');
Route::post('/ubah-layanan/{id}', [\App\Http\Controllers\layananController::class, 'update'])->name('ubah-layanan');
Route::get('/delete-layanan/{id}', [\App\Http\Controllers\layananController::class, 'destroy'])->name('delete-layanan');
Route::get('/layanan/trash-layanan', [\App\Http\Controllers\layananController::class, 'trash'])->name('trash-layanan');
Route::get('/layanan/restore-layanan/{id?}', [\App\Http\Controllers\layananController::class, 'restore'])->name('restore-layanan');
Route::get('/layanan/delete-permanent/{id?}', [\App\Http\Controllers\layananController::class, 'delete'])->name('delete-permanent-layanan');


//card
Route::get('/card', [\App\Http\Controllers\cardController::class, 'index'])->name('card');
Route::get('/card/create-card', [\App\Http\Controllers\cardController::class, 'create'])->name('create-card');
Route::post('/simpan-card', [\App\Http\Controllers\cardController::class, 'store'])->name('simpan-card');
Route::get('/update-card/{id}', [\App\Http\Controllers\cardController::class, 'edit'])->name('update-card');
Route::post('/ubah-card/{id}', [\App\Http\Controllers\cardController::class, 'update'])->name('ubah-card');
Route::get('/delete-card/{id}', [\App\Http\Controllers\cardController::class, 'destroy'])->name('delete-card');
Route::get('/card/trash-card', [\App\Http\Controllers\cardController::class, 'trash'])->name('trash-card');
Route::get('/card/restore-card/{id?}', [\App\Http\Controllers\cardController::class, 'restore'])->name('restore-card');
Route::get('/card/delete-permanent/{id?}', [\App\Http\Controllers\cardController::class, 'delete'])->name('delete-permanent-card');

Route::get('/service-card/{id}', [\App\Http\Controllers\cardController::class, 'service'])->name('service-card');


//header
Route::get('/header', [\App\Http\Controllers\headerController::class, 'index'])->name('header');
Route::get('/header/create-header', [\App\Http\Controllers\headerController::class, 'create'])->name('create-header');
Route::post('/simpan-header', [\App\Http\Controllers\headerController::class, 'store'])->name('simpan-header');
Route::get('/update-header/{id}', [\App\Http\Controllers\headerController::class, 'edit'])->name('update-header');
Route::post('/ubah-header/{id}', [\App\Http\Controllers\headerController::class, 'update'])->name('ubah-header');
Route::get('/delete-header/{id}', [\App\Http\Controllers\headerController::class, 'destroy'])->name('delete-header');
Route::get('/header/trash-header', [\App\Http\Controllers\headerController::class, 'trash'])->name('trash-header');
Route::get('/header/restore-header/{id?}', [\App\Http\Controllers\headerController::class, 'restore'])->name('restore-header');



//Kontak
Route::get('/kontak', [\App\Http\Controllers\kontakController::class, 'index'])->name('kontak');
Route::get('/kontak/create-kontak', [\App\Http\Controllers\kontakController::class, 'create'])->name('create-kontak');
Route::post('/simpan-kontak', [\App\Http\Controllers\kontakController::class, 'store'])->name('simpan-kontak');
Route::get('/update-kontak/{id}', [\App\Http\Controllers\kontakController::class, 'edit'])->name('update-kontak');
Route::post('/ubah-kontak/{id}', [\App\Http\Controllers\kontakController::class, 'update'])->name('ubah-kontak');
Route::get('/delete-kontak/{id}', [\App\Http\Controllers\kontakController::class, 'destroy'])->name('delete-kontak');


//Video

Route::get('/video', [\App\Http\Controllers\videoController::class, 'index'])->name('video');
Route::get('/video/create-video', [\App\Http\Controllers\videoController::class, 'create'])->name('create-video');
Route::post('/simpan-video', [\App\Http\Controllers\videoController::class, 'store'])->name('simpan-video');
Route::get('/update-video/{id}', [\App\Http\Controllers\videoController::class, 'edit'])->name('update-video');
Route::post('/ubah-video/{id}', [\App\Http\Controllers\videoController::class, 'update'])->name('ubah-video');
Route::get('/delete-video/{id}', [\App\Http\Controllers\videoController::class, 'destroy'])->name('delete-video');

//Compro
Route::get('/compro', [\App\Http\Controllers\comproController::class, 'index'])->name('compro');
Route::get('/compro/create-compro', [\App\Http\Controllers\comproController::class, 'create'])->name('create-compro');
Route::post('/simpan-compro', [\App\Http\Controllers\comproController::class, 'store'])->name('simpan-compro');
Route::get('/update-compro/{id}', [\App\Http\Controllers\comproController::class, 'edit'])->name('update-compro');
Route::post('/ubah-compro/{id}', [\App\Http\Controllers\comproController::class, 'update'])->name('ubah-compro');
Route::get('/delete-compro/{id}', [\App\Http\Controllers\comproController::class, 'destroy'])->name('delete-compro');

//subheader
Route::get('/subheader', [\App\Http\Controllers\subheaderController::class, 'index'])->name('subheader');
Route::get('/subheader/create-subheader', [\App\Http\Controllers\subheaderController::class, 'create'])->name('create-subheader');
Route::post('/simpan-subheader', [\App\Http\Controllers\subheaderController::class, 'store'])->name('simpan-subheader');
Route::get('/update-subheader/{id}', [\App\Http\Controllers\subheaderController::class, 'edit'])->name('update-subheader');
Route::post('/ubah-subheader/{id}', [\App\Http\Controllers\subheaderController::class, 'update'])->name('ubah-subheader');
Route::get('/delete-subheader/{id}', [\App\Http\Controllers\subheaderController::class, 'destroy'])->name('delete-subheader');

//kontakdetail
Route::get('/detailkontak', [\App\Http\Controllers\detailkontakController::class, 'index'])->name('detailkontak');

Route::get('/contact-detail', [\App\Http\Controllers\kontakdetailController::class, 'TampilLogo'])->name('contact-detail');
Route::get('/contact-detail', [\App\Http\Controllers\kontakdetailController::class, 'index'])->name('contact-detail');
Route::get('/contact-detail/create-contact-detail', [\App\Http\Controllers\kontakdetailController::class, 'create'])->name('create-contact-detail');
Route::post('/simpan-contact-detail', [\App\Http\Controllers\kontakdetailController::class, 'store'])->name('simpan-contact-detail');
Route::get('/delete-contact-detail/{id}', [\App\Http\Controllers\kontakdetailController::class, 'destroy'])->name('delete-contact-detail');
Route::get('/delete-contactus/{id}', [\App\Http\Controllers\kontakdetailController::class, 'destroy'])->name('delete-detailkontak');


//sett
Route::get('/sett', [\App\Http\Controllers\sett::class, 'index'])->name('sett');

//Portfolio

Route::get('/detailcard/{id?}', [\App\Http\Controllers\detailcardController::class, 'index'])->name('detailcard');

//DetailArtikel
Route::get('/detailartikel/{id?}', [\App\Http\Controllers\detailartikelController::class, 'index'])->name('detailartikel');

//Profile
Route::get('/admin.profile', [\App\Http\Controllers\profileController::class, 'index'])->name('admin.profile');

//banking
Route::get('/banking', [\App\Http\Controllers\bankingController::class, 'index'])->name('banking');
Route::get('/banking/create-banking', [\App\Http\Controllers\bankingController::class, 'create'])->name('create-banking');
Route::post('/simpan-banking', [\App\Http\Controllers\bankingController::class, 'store'])->name('simpan-banking');
Route::get('/update-banking/{id}', [\App\Http\Controllers\bankingController::class, 'edit'])->name('update-banking');
Route::post('/ubah-banking/{id}', [\App\Http\Controllers\bankingController::class, 'update'])->name('ubah-banking');
Route::get('/delete-banking/{id}', [\App\Http\Controllers\bankingController::class, 'destroy'])->name('delete-banking');
Route::get('/banking/trash-banking', [\App\Http\Controllers\bankingController::class, 'trash'])->name('trash-banking');
Route::get('/banking/restore-banking/{id?}', [\App\Http\Controllers\bankingController::class, 'restore'])->name('restore-banking');
Route::get('/banking/delete-permanent/{id?}', [\App\Http\Controllers\bankingController::class, 'delete'])->name('delete-permanent-banking');

//services
Route::get('/services', [\App\Http\Controllers\servicesController::class, 'index'])->name('services');
Route::get('/services/create-services', [\App\Http\Controllers\servicesController::class, 'create'])->name('create-services');
Route::post('/simpan-services', [\App\Http\Controllers\servicesController::class, 'store'])->name('simpan-services');
Route::get('/update-services/{id}', [\App\Http\Controllers\servicesController::class, 'edit'])->name('update-services');
Route::post('/ubah-services/{id}', [\App\Http\Controllers\servicesController::class, 'update'])->name('ubah-services');
Route::get('/delete-services/{id}', [\App\Http\Controllers\servicesController::class, 'destroy'])->name('delete-services');
Route::get('/services/trash-services', [\App\Http\Controllers\servicesController::class, 'trash'])->name('trash-services');
Route::get('/services/restore-services/{id?}', [\App\Http\Controllers\servicesController::class, 'restore'])->name('restore-services');
Route::get('/services/delete-permanent/{id?}', [\App\Http\Controllers\servicesController::class, 'delete'])->name('delete-permanent-services');

//retails
Route::get('/retails', [\App\Http\Controllers\retailsController::class, 'index'])->name('retails');
Route::get('/retails/create-retails', [\App\Http\Controllers\retailsController::class, 'create'])->name('create-retails');
Route::post('/simpan-retails', [\App\Http\Controllers\retailsController::class, 'store'])->name('simpan-retails');
Route::get('/update-retails/{id}', [\App\Http\Controllers\retailsController::class, 'edit'])->name('update-retails');
Route::post('/ubah-retails/{id}', [\App\Http\Controllers\retailsController::class, 'update'])->name('ubah-retails');
Route::get('/delete-retails/{id}', [\App\Http\Controllers\retailsController::class, 'destroy'])->name('delete-retails');
Route::get('/retails/trash-retails', [\App\Http\Controllers\retailsController::class, 'trash'])->name('trash-retails');
Route::get('/retails/restore-retails/{id?}', [\App\Http\Controllers\retailsController::class, 'restore'])->name('restore-retails');
Route::get('/retails/delete-permanent/{id?}', [\App\Http\Controllers\retailsController::class, 'delete'])->name('delete-permanent-retails');


//travel
Route::get('/travel', [\App\Http\Controllers\travelController::class, 'index'])->name('travel');
Route::get('/travel/create-travel', [\App\Http\Controllers\travelController::class, 'create'])->name('create-travel');
Route::post('/simpan-travel', [\App\Http\Controllers\travelController::class, 'store'])->name('simpan-travel');
Route::get('/update-travel/{id}', [\App\Http\Controllers\travelController::class, 'edit'])->name('update-travel');
Route::post('/ubah-travel/{id}', [\App\Http\Controllers\travelController::class, 'update'])->name('ubah-travel');
Route::get('/delete-travel/{id}', [\App\Http\Controllers\travelController::class, 'destroy'])->name('delete-travel');
Route::get('/travel/trash-travel', [\App\Http\Controllers\travelController::class, 'trash'])->name('trash-travel');
Route::get('/travel/restore-travel/{id?}', [\App\Http\Controllers\travelController::class, 'restore'])->name('restore-travel');
Route::get('/travel/delete-permanent/{id?}', [\App\Http\Controllers\travelController::class, 'delete'])->name('delete-permanent-travel');

//productifity
Route::get('/productifity', [\App\Http\Controllers\productifityController::class, 'index'])->name('productifity');
Route::get('/productifity/create-productifity', [\App\Http\Controllers\productifityController::class, 'create'])->name('create-productifity');
Route::post('/simpan-productifity', [\App\Http\Controllers\productifityController::class, 'store'])->name('simpan-productifity');
Route::get('/update-productifity/{id}', [\App\Http\Controllers\productifityController::class, 'edit'])->name('update-productifity');
Route::post('/ubah-productifity/{id}', [\App\Http\Controllers\productifityController::class, 'update'])->name('ubah-productifity');
Route::get('/delete-productifity/{id}', [\App\Http\Controllers\productifityController::class, 'destroy'])->name('delete-productifity');
Route::get('/productifity/trash-productifity', [\App\Http\Controllers\productifityController::class, 'trash'])->name('trash-productifity');
Route::get('/productifity/restore-productifity/{id?}', [\App\Http\Controllers\productifityController::class, 'restore'])->name('restore-productifity');
Route::get('/productifity/delete-permanent/{id?}', [\App\Http\Controllers\productifityController::class, 'delete'])->name('delete-permanent-productifity');

Route::get('/kategoris', [\App\Http\Controllers\kategorisController::class, 'index'])->name('kategoris');

//user
Route::get('/user', [\App\Http\Controllers\userController::class, 'index'])->name('user');
Route::post('/simpan-user', [\App\Http\Controllers\userController::class, 'store'])->name('simpan-user');
Route::get('/update-user/{id}', [\App\Http\Controllers\userController::class, 'edit'])->name('update-user');
Route::post('/ubah-user/{id}', [\App\Http\Controllers\userController::class, 'update'])->name('ubah-user');
Route::get('/delete-user/{id}', [\App\Http\Controllers\userController::class, 'destroy'])->name('delete-user');
