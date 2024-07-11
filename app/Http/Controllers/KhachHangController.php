<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    //
    public function index()
    {
        $tille = "danh sách khách hàng";
        return view('khachhang.index', ['tille' => $tille]);
    }
    public function sua_khach_hang()
    {
        $tille = "trang sửa khách hàng";
        return view('khachhang.sua_khach_hang', ['tille' => $tille]);
    }
    public function them_khach_hang()
    {
        $tille = "Thêm mới khách hàng";
        return view('khachhang.add_khach_hang', ['tille' => $tille]);
    }
}
