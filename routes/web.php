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

Route::get('/', ['as' => 'index' , 'uses' => function () {
    return view('index');

}]);
Route::get('/dashboard', ['as' => 'dashboard' , 'uses' => function () {
    if (Auth::check()) return view('dashboard');
            return redirect()->route('index');
}]);

Route::get('/account',['as' => 'account' , 'uses' => function () {
  if (!Auth::check())  return view('account');
       return redirect()->route('index');

}]);
Route::get('/password',['as' => 'password' , 'uses' => function () {
  if (!Auth::check())  return view('resetMdp');
       return redirect()->route('index');

}]);
Route::get('/resetPassword/{token?}',['as' => 'resetPassword' , 'uses' => function ($token) {
  if (!Auth::check())  return view('newMdp')->with('token',$token);
       return redirect()->route('index');

}]);
Route::get('/vente', [ 'as' => 'produitForSale' , 'uses' => 'produitController@ForSale' ]);
Route::get('/echange', [ 'as' => 'produitToExchange' , 'uses' => 'produitController@ToExchange' ]);




Route::resource('contact', 'ContactController');
Route::resource('notification', 'NotificationController');
Route::resource('panier', 'PanierController');
Route::resource('reponse', 'ReponseController');
Route::resource('produit', 'ProduitController');
Route::resource('livre', 'LivreController');
Route::resource('fin_offre', 'Fin_offreController');
Route::resource('ventes', 'VentesController');
Route::resource('photo', 'PhotoController');
Route::resource('commentaire', 'CommentaireController');
Route::resource('user', 'userController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


