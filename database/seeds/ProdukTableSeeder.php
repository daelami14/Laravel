<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produk')->insert([
            'nama_produk' => 'Monitor',
            'sku' => 'MN0011',
            'brand' => 'LG',
            'deskripsi' => 'test',
            'id_variasi' => '2'
        ]);
    }
}
