<?php

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

// Route::view('/coba','client.galeri.formPembuatan');
Route::get('/coba','galeriController@coba');
Route::resource('/berita','beritaController', ['only' => ['index']]);
Route::get('/keuangan','KeuanganController@index');
Route::get('/keuangan/download/{id}','KeuanganController@download');
Route::get('/galeri','GaleriController@index');
Route::get('/galeri/show/{id}','GaleriController@show');
Route::resource('/forum','forumController', ['only' => ['index','show','create']]);


Auth::routes();


Route::group(['middleware'=>'admin'],function(){
  Route::view('/admin','layouts.dashboard');

  Route::post('/admin/galeri/upload','galeriController@upload');
  Route::view('/admin/galeri/create','admin.galeriFormPembuatan');
  Route::delete('/admin/galeri/{id}','GaleriController@destroy');

  Route::get('/admin/keuangan','KeuanganController@list');
  Route::post('/admin/keuangan/upload','KeuanganController@upload');
  Route::delete('/admin/keuangan/{id}','KeuanganController@destroy');

  Route::get('/admin/surat','SuratPengantarController@list');
  Route::delete('/admin/surat/{id}', 'SuratPengantarController@destroy');

  Route::get('/admin/warga/list', 'CitizenControler@list');

  Route::get('/admin/berita/list', 'beritaController@list');
  Route::resource('/admin/berita', 'beritaController',['except' => ['index']]);
});


Route::group(['middleware'=>'auth'],function(){
  // Route::view('/forum/buat', 'client.forum.create');
  Route::get('/home', 'HomeController@index')->name('home'); //nantinya buat nampilin info warga

  Route::get('/surat','SuratPengantarController@showSubmitForm');
  Route::post('/surat/preview','SuratPengantarController@showpdfview');
  Route::post('/surat/store','SuratPengantarController@print')->name('pdfview'); //ubah jadi post nanti

  Route::resource('/forum', 'forumController', ['except' => ['index', 'show']]);

  Route::post('/forum-comment/{id}','ForumCommentController@store');
  Route::delete('/forum-comment/{id}','ForumCommentController@destroy');

  Route::post('/berita-comment/{id}','BeritaCommentController@store');
  Route::delete('/forum-comment/{id}','BeritaCommentController@destroy');


  // Route::resource('/forum', 'forumController', ['except' => ['index','show']]);
});
