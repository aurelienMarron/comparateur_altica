<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualiteClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualiteclients')->insert([
            'idqualite' => 1 ,
            'besoinclient' => 'Sens général du texte'
        ]);

        DB::table('qualiteclients')->insert([
            'idqualite' => 2 ,
            'besoinclient' => 'Usage interne'
        ]);

        DB::table('qualiteclients')->insert([
            'idqualite' => 3 ,
            'besoinclient' => 'Diffusion externe'
        ]);

        DB::table('qualiteclients')->insert([
            'idqualite' => 4 ,
            'besoinclient' => 'Publication/image de la société'
        ]);
    }
}
