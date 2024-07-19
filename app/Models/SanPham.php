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
    public function getList()
    {
        $listSanPham = DB::table('san_phams')
            ->orderBy('id', 'DESC')
            ->get();
        return $listSanPham;
    }

    public function createProduct($data)
    {
        DB::table('san_phams')->insert($data);
    }
    public function getDetailProduct($id)
    {
        $san_pham = DB::table('san_phams')->where('id', $id)->first();

        return $san_pham;
    }
    public function upadtelProduct($id, $params)
    {
       DB::table('san_phams')->where('id',$id)->update($params);
    }
    public function deletelProduct($id, $params)
    {
        DB::table('san_phams')->where('id', $id)->delete();
    }
    // cách 3: sử dụng Eloquent
    protected $table = 'san_phams';
    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai'
    ];
}
