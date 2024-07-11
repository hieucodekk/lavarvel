<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeDer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('khach_hangs')->insert(
            [
                [
                    'name' => 'hiếu',
                    'address' => 'hà nội',
                    'phone' => '0988190373',
                    'email' => 'hieugmail.com',
                    'gerder' => 0,
                    'age' => '2004-09-14',
                    'image' => 'ãnhinhtrai',
                    'status' => true,
                ],
                [
                    'name' => 'hiếu',
                    'address' => 'hà nội',
                    'phone' => '0343243212',
                    'email' => 'admingmail.com',
                    'gerder' => 1,
                    'age' => '2004-09-14',
                    'image' => 'nhinhtrai',
                    'status' => true,
                ]
            ]
        );
    }
}
