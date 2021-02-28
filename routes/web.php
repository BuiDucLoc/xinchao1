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
    return view('welcome');
});
Route::get('helo',function(){
	return 'hhihihi';
});

route::get('session',function(){
	// $cart = Session::get('cart');
	// if ($cart==true) {
	// 	$cart[2] = [
	// 		'id'=>'1',
	// 		'ten'=>'buiducloc',
	// 		'tuoi'=>'12',
	// 		'noi o'=>'bình dinh',
	// 	];
	// }
	// else{
	// 	$cart[1] = [
	// 		'ten'=>'buiducloc',
	// 		'tuoi'=>'12',
	// 		'noi o'=>'bình dinh',
	// 	];
	// }
	// Session::put('cart',$cart);
	// print_r($cart);
	Session::put('id','1');
	Session::put('name','buiducloc');
	echo Session::get('id');
	echo Session::get('name');
});
route::get('getsession',function(){
	echo Session::get('name');
});