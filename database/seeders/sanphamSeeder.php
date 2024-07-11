<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tìm hiểu tạo dữ liệu mẫu bằng faker trong laravel
        
        // sử dụng query buider để thêm dữ liệu mẫu
        DB::table('san_phams')->insert(
            [
                [
                    'ma_san_pham' => 'fb88',
                    'ten_san_pham' => 'fb88',
                    'gia' => 10000,
                    'so_luong' => 10,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'nhà cái hàng đầu châu á',
                    'trang_thai' => true,
                ],
                [
                    'ma_san_pham' => 'sp88',
                    'ten_san_pham' => 'fb88',
                    'gia' => 13000,
                    'so_luong' => 40,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'nhà cái hàng đầu số 2 châu á',
                    'trang_thai' => true,
                ],
                [
                    'ma_san_pham' => 'sp1288',
                    'ten_san_pham' => 'f123b88',
                    'gia' => 1300,
                    'so_luong' => 40,
                    'ngay_nhap' => '2024-11-20',
                    'mo_ta' => 'nhà cái hàng đầu số 2 châu á',
                    'trang_thai' => true,
                ]
            ]

        );
    }
}
