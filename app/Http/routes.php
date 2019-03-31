<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// *********************************************************************************************************************************************
// =============================================================================================================================================
// ===== AUTH =====
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// ===== AUTHENTICATION ROUTES =====
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// ===== REGISTRATION ROUTES =====
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// =============================================================================================================================================

// *********************************************************************************************************************************************

// =============================================================================================================================================
// ===== MODEL ROUTES =====
Route::model('berita','App\Http\Models\Berita');
Route::model('berita2','App\Http\Models\Berita2');
Route::model('artikel','App\Http\Models\Artikel');
Route::model('media','App\Http\Models\Media');
Route::model('galery','App\Http\Models\Galery');
Route::model('pengumuman','App\Http\Models\Pengumuman');
// =============================================================================================================================================

// *********************************************************************************************************************************************

// =============================================================================================================================================
// ===== STATIS PAGE ROUTES =====
Route::get('/', 'WelcomeController@index');
Route::get('test', 'WelcomeController@test');
Route::get('home', 'HomeController@index');
Route::get('profile/bupati', 'ProfileController@bupati');
Route::get('profile/wabup', 'ProfileController@wabup');
Route::get('profile/sekda', 'ProfileController@sekda');
Route::get('logo-kbb', 'TentangController@logo');
Route::get('visi-misi', 'TentangController@visimisi');
Route::get('sejarah', 'TentangController@sejarah');
Route::get('geografis', 'TentangController@geografis');
Route::get('profile-kbb', 'TentangController@profile');
// =============================================================================================================================================

// *********************************************************************************************************************************************

// =============================================================================================================================================
// ===== PROFILE SKPD ROUTES =====
Route::get('profile-dcktr', 'ProfileController@profileDcktr');
// =============================================================================================================================================

// *********************************************************************************************************************************************

// =============================================================================================================================================
// ===== SHOW & LIST PAGE BERITA =====
Route::get('/berita/{berita}/show',         ['as' => 'berita.show',     'uses' => 'BeritaController@show']);
Route::get('berita/list',                   ['as' => 'berita.list',     'uses' => 'BeritaController@lists']);

// ===== SHOW & LIST PAGE BERITA TANPA FOTO =====
Route::get('/berita2/{berita2}/show',       ['as' => 'berita2.show',    'uses' => 'Berita2Controller@show']);
Route::get('berita2/list',                  ['as' => 'berita2.list',    'uses' => 'Berita2Controller@lists']);

// ===== SHOW & LIST PAGE ARTIKEL =====
Route::get('/artikel/{artikel}/show',       ['as' => 'artikel.show',    'uses' => 'ArtikelController@show']);
Route::get('artikel/list',                  ['as' => 'artikel.list',    'uses' => 'ArtikelController@lists']);

// ===== SHOW & LIST PAGE MEDIA =====
Route::get('/media/{media}/show',           ['as' => 'media.show',      'uses' => 'MediaController@show']);
Route::get('media/list',                    ['as' => 'media.list',      'uses' => 'MediaController@lists']);

// ===== SHOW & LIST PAGE GALERY =====
Route::get('/galery/{galery}/show',         ['as' => 'galery.show',     'uses' => 'GaleryController@show']);
Route::get('galery/list',                   ['as' => 'galery.list',     'uses' => 'GaleryController@lists']);

// ===== SHOW & LIST PAGE PENGUMUMAN =====
Route::get('/pengumuman/{pengumuman}/show', ['as' => 'pengumuman.show', 'uses' => 'PengumumanController@show']);
Route::get('pengumuman/list',               ['as' => 'pengumuman.list', 'uses' => 'PengumumanController@lists']);
// =============================================================================================================================================

// *********************************************************************************************************************************************

// =============================================================================================================================================
// ===== DASHBOARD <ADMIN PAGE> =====
Route::group(['middleware' => 'auth' ,] , function() {
    get('/dashboard', function()
    {
        return view('/home');
    });
    Route::get('admin', 'DashboardController@index');

    // ===== ADMIN BERITA CONTROLLER ROUTES =====
    Route::get('berita/index',          ['as' => 'berita.index',        'uses' => 'BeritaController@index']);
    Route::get('berita/create',         ['as' => 'berita.create',       'uses' => 'BeritaController@create']);
    Route::post('berita',               ['as' => 'berita.store',        'uses' => 'BeritaController@store']);
    Route::get('berita/{berita}',       ['as' => 'berita.edit',         'uses' => 'BeritaController@edit']);
    Route::put('berita/{berita}',       ['as' => 'berita.update',       'uses' => 'BeritaController@update']);
    Route::patch('berita/{berita}',     ['as' => '',                    'uses' => 'BeritaController@update']);
    Route::delete('berita/{berita}',    ['as' => 'berita.destroy',      'uses' => 'BeritaController@destroy']);

    // ===== ADMIN BERITA TANPA FOTO CONTROLLER ROUTES =====
    Route::get('berita2/index',         ['as' => 'berita2.index',       'uses' => 'Berita2Controller@index']);
    Route::get('berita2/create',        ['as' => 'berita2.create',      'uses' => 'Berita2Controller@create']);
    Route::post('berita2',              ['as' => 'berita2.store',       'uses' => 'Berita2Controller@store']);
    Route::get('berita2/{berita2}',     ['as' => 'berita2.edit',        'uses' => 'Berita2Controller@edit']);
    Route::put('berita2/{berita2}',     ['as' => 'berita2.update',      'uses' => 'Berita2Controller@update']);
    Route::patch('berita2/{berita2}',   ['as' => '',                    'uses' => 'Berita2Controller@update']);
    Route::delete('berita2/{berita2}',  ['as' => 'berita2.destroy',     'uses' => 'Berita2Controller@destroy']);

    // ===== ADMIN ARTIKEL CONTROLLER ROUTES =====
    Route::get('artikel/index',         ['as' => 'artikel.index',       'uses' => 'ArtikelController@index']);
    Route::get('artikel/create',        ['as' => 'artikel.create',      'uses' => 'ArtikelController@create']);
    Route::post('artikel',              ['as' => 'artikel.store',       'uses' => 'ArtikelController@store']);
    Route::get('artikel/{artikel}',     ['as' => 'artikel.edit',        'uses' => 'ArtikelController@edit']);
    Route::put('artikel/{artikel}',     ['as' => 'artikel.update',      'uses' => 'ArtikelController@update']);
    Route::patch('artikel/{artikel}',   ['as' => '',                    'uses' => 'ArtikelController@update']);
    Route::delete('artikel/{artikel}',  ['as' => 'artikel.destroy',     'uses' => 'ArtikelController@destroy']);

    // ===== ADMIN MEDIA CONTROLLER ROUTES =====
    Route::get('media/index',           ['as' => 'media.index',        'uses' => 'MediaController@index']);
    Route::get('media/create',          ['as' => 'media.create',       'uses' => 'MediaController@create']);
    Route::post('media',                ['as' => 'media.store',        'uses' => 'MediaController@store']);
    Route::get('media/{media}',         ['as' => 'media.edit',         'uses' => 'MediaController@edit']);
    Route::put('media/{media}',         ['as' => 'media.update',       'uses' => 'MediaController@update']);
    Route::patch('media/{media}',       ['as' => '',                   'uses' => 'MediaController@update']);
    Route::delete('media/{media}',      ['as' => 'media.destroy',      'uses' => 'MediaController@destroy']);

    // ===== ADMIN GALERY CONTROLLER ROUTES =====
    Route::get('galery/index',          ['as' => 'galery.index',       'uses' => 'GaleryController@index']);
    Route::get('galery/create',         ['as' => 'galery.create',      'uses' => 'GaleryController@create']);
    Route::post('galery',               ['as' => 'galery.store',       'uses' => 'GaleryController@store']);
    Route::get('galery/{galery}',       ['as' => 'galery.edit',        'uses' => 'GaleryController@edit']);
    Route::put('galery/{galery}',       ['as' => 'galery.update',      'uses' => 'GaleryController@update']);
    Route::patch('galery/{galery}',     ['as' => '',                   'uses' => 'GaleryController@update']);
    Route::delete('galery/{galery}',    ['as' => 'galery.destroy',     'uses' => 'GaleryController@destroy']);

    // ===== ADMIN PENGUMUMAN CONTROLLER ROUTES =====
    Route::get('pengumuman/index',              ['as' => 'pengumuman.index',        'uses' => 'PengumumanController@index']);
    Route::get('pengumuman/create',             ['as' => 'pengumuman.create',       'uses' => 'PengumumanController@create']);
    Route::post('pengumuman',                   ['as' => 'pengumuman.store',        'uses' => 'PengumumanController@store']);
    Route::get('pengumuman/{pengumuman}',       ['as' => 'pengumuman.edit',         'uses' => 'PengumumanController@edit']);
    Route::put('pengumuman/{pengumuman}',       ['as' => 'pengumuman.update',       'uses' => 'PengumumanController@update']);
    Route::patch('pengumuman/{pengumuman}',     ['as' => '',                        'uses' => 'PengumumanController@update']);
    Route::delete('pengumuman/{pengumuman}',    ['as' => 'pengumuman.destroy',      'uses' => 'PengumumanController@destroy']);
// =============================================================================================================================================
} );
