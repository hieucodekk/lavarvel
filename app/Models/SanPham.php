<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;
    //cách 1 :sử dụng raw query 
    // public function getList()
    // {
    //     $listSanPham = DB::select('select * from san_phams');
    //     return $listSanPham;
    // }

    //cách 2:query builder
    public function getList()  {
        $listSanPham = DB::table('san_phams')
        ->orderBy('id', 'DESC')
        ->get();
        return $listSanPham;
    }

    //cách 3: sử dụng Eloquent
    // protected $table = 'san_phams';
    // protected $fillable =[
    //     'ma_san_pham',
    //     'ten_san_pham',
    //     'hinh_anh',
    //     'gia',
    //     'so_luong',
    //     'ngay_nhap',
    //     'mo_ta',
    //     'trang_thai'
    // ];
}
