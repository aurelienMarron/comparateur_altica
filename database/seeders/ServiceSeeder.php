<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'idservice' => 1 ,
            'degrequalite' => 50,
            'nomservice' => 'Traduction automatique seule',
            'detail' => 'traduction par un moteur de traduction type Google / DeepL' ,
            'coutmin' => 0 ,
            'coutmax' => 0.06 ,
            'delaimin' => 0,
            'delaimax' => 1
        ]);

        DB::table('services')->insert([
            'idservice' => 2 ,
            'degrequalite' => 85,
            'nomservice' => 'Post-édition légère',
            'detail' => 'relecture rapide de la traduction automatique par un linguiste' ,
            'coutmin' => 0.04 ,
            'coutmax' => 0.09 ,
            'delaimin' => 1,
            'delaimax' => 2
        ]);

        DB::table('services')->insert([
            'idservice' => 3 ,
            'degrequalite' => 90,
            'nomservice' => 'Traduction seule débutant',
            'detail' => 'traduction par un linguiste diplômé (<2 ans expérience)' ,
            'coutmin' => 0.06 ,
            'coutmax' => 0.1 ,
            'delaimin' => 7,
            'delaimax' => 10
        ]);

        DB::table('services')->insert([
            'idservice' => 4 ,
            'degrequalite' => 95,
            'nomservice' => 'Traduction seule confirmé',
            'detail' => 'traduction par un linguiste diplômé et expérimenté (> 2 ans)' ,
            'coutmin' => 0.07 ,
            'coutmax' => 0.12 ,
            'delaimin' => 7,
            'delaimax' => 10
        ]);

        DB::table('services')->insert([
            'idservice' => 5 ,
            'degrequalite' => 90,
            'nomservice' => 'Post-édition complète',
            'detail' => 'relecture détaillée de la traduction automatique par un linguiste' ,
            'coutmin' => 0.05 ,
            'coutmax' => 0.1 ,
            'delaimin' => 6,
            'delaimax' => 8
        ]);

        DB::table('services')->insert([
            'idservice' => 6 ,
            'degrequalite' => 98,
            'nomservice' => 'Post-édition + relecture*',
            'detail' => 'relecture détaillée de la traduction automatique par deux linguistes distincts' ,
            'coutmin' => 0.07 ,
            'coutmax' => 0.12 ,
            'delaimin' => 7,
            'delaimax' => 9
        ]);

        DB::table('services')->insert([
            'idservice' => 7 ,
            'degrequalite' => 98,
            'nomservice' => 'Traduction + relecture*',
            'detail' => 'traduction + relecture par deux linguistes distincts' ,
            'coutmin' => 0.09 ,
            'coutmax' => 0.14 ,
            'delaimin' => 9,
            'delaimax' => 14
        ]);

        DB::table('services')->insert([
            'idservice' => 8 ,
            'degrequalite' => 99,
            'nomservice' => 'Traduction + relecture* + BAT',
            'detail' => 'traduction + relecture par deux linguistes distincts + nouvelle vérification par un linguiste après mise en page' ,
            'coutmin' => 0.1 ,
            'coutmax' => 0.16 ,
            'delaimin' => 14,
            'delaimax' => 18
        ]);
    }
}
