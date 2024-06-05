<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'B1', 'barang_nama' => 'Nanas', 'harga_beli' => 10000, 'harga_jual' => 11000, 'kategori_id' => 1, 'image' => 'default.jpg'],
            ['barang_id' => 2, 'barang_kode' => 'B2', 'barang_nama' => 'Apel', 'harga_beli' => 9000, 'harga_jual' => 10000, 'kategori_id' => 1, 'image' => 'default.jpg'],
            ['barang_id' => 3, 'barang_kode' => 'B3', 'barang_nama' => 'Sawi', 'harga_beli' => 1000, 'harga_jual' => 2000, 'kategori_id' => 2, 'image' => 'default.jpg'],
            ['barang_id' => 4, 'barang_kode' => 'B4', 'barang_nama' => 'Selada', 'harga_beli' => 5000, 'harga_jual' => 6000, 'kategori_id' => 2, 'image' => 'default.jpg'],
            ['barang_id' => 5, 'barang_kode' => 'B5', 'barang_nama' => 'Ayam', 'harga_beli' => 30000, 'harga_jual' => 35000, 'kategori_id' => 3, 'image' => 'default.jpg'],
            ['barang_id' => 6, 'barang_kode' => 'B6', 'barang_nama' => 'Sapi', 'harga_beli' => 50000, 'harga_jual' => 55000, 'kategori_id' => 3, 'image' => 'default.jpg'],
            ['barang_id' => 7, 'barang_kode' => 'B7', 'barang_nama' => 'Lele', 'harga_beli' => 20000, 'harga_jual' => 25000, 'kategori_id' => 4, 'image' => 'default.jpg'],
            ['barang_id' => 8, 'barang_kode' => 'B8', 'barang_nama' => 'Salmon', 'harga_beli' => 50000, 'harga_jual' => 55000, 'kategori_id' => 4, 'image' => 'default.jpg'],
            ['barang_id' => 9, 'barang_kode' => 'B9', 'barang_nama' => 'Lada', 'harga_beli' => 3000, 'harga_jual' => 5000, 'kategori_id' => 5, 'image' => 'default.jpg'],
            ['barang_id' => 10, 'barang_kode' => 'B10', 'barang_nama' => 'Garam', 'harga_beli' => 2000, 'harga_jual' => 3000, 'kategori_id' => 5, 'image' => 'default.jpg'],
        ];
        DB::table('m_barang')->insert($data);
    }
}