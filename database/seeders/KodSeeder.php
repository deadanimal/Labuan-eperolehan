<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kod::create ([
            'jenis_kod'=>'08-Kejuteraan Awam, Binaan dan Kelengkapan Kemudahan Awam',
            'kategori_kod'=>'01-Kelengkapan/ Kemudahan Awam',
            'pengkhususan_kod'=>'02',
            'deskripsi_kod'=>'Kontena'
        ]);

        Kod::create ([
            'jenis_kod'=>'09-Bahan Binaan dan Peralatan Keselamatan Jalan Raya',
            'kategori_kod'=>'01-Bahan Binaan',
            'pengkhususan_kod'=>'02',
            'deskripsi_kod'=>'Paip dan Kelengkapan'
        ]);
    }
}
