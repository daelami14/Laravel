<?php

use Illuminate\Database\Seeder;

class VariasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('variasi')->insert([
            'id_variasi' => '2',
            'nama' => 'Black',
            'sku' => 'BL011',
            'harga_jual' => '250000'
        ]);
    }
}
