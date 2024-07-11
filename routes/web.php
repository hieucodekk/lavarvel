<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\admin\SanPhamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// sử dung route để trỏ đến view 
// Route::get('/hello', function () {
//     return view('xinchao');
// });
// Route::view('hello', 'xinchao');

//truyền dữ liệu sang view

// Route::get('/hello', function () {
//     $tille = "thay dinh 2k4";
//     $text = "đep trai nhất fploy";
//     return view('xinchao', ['tille' => $tille, 'text' => $text]);
// });
// Route::view('hello', 'xinchao', [
//     'tille '=> 'hihih' ,
//     'text' => 'xin chào các em nyc'
// ]);

// tạo 1 route trỏ ddense1 hàm trong controller

// Route::get('/san_pham',[SanPhamController::class, 'index']);

Route::get('sanpham/test', [SanPhamController::class, 'test'])->name('sanpham.test');
Route::resource('sanpham', SanPhamController::class);


