<?php
use App\Produit;

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

Route::get('/', function () {
    $produit=Produit::where('id','=',2)->get();
    return view('welcome')->withProd($produit);
});

//Test via POSTMAN

Route::get('produits', function () {
    return $produits=Produit::all();
    //return $produits=Produit::paginate(5);
});

Route::get('produit/{id}', function ($id) {
    return $produit=Produit::find($id);
//    $produit=Produit::find($id);
//    return $produit->description;
});

//Avec un throttle de 5tentatives par 3minutes
Route::group(['prefix'=>'api', 'middleware' => 'throttle:15,3'],function(){
    Route::get('produit/{id}', function ($id) {
        return $produit=Produit::find($id);
    });
});