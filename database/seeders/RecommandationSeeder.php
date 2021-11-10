<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecommandationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recommandations')->insert([
            'idservice' => 1 ,
            'idqualite' => 1
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 2 ,
            'idqualite' => 1
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 3 ,
            'idqualite' => 1
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 3 ,
            'idqualite' => 2
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 4 ,
            'idqualite' => 1
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 4 ,
            'idqualite' => 2
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 5 ,
            'idqualite' => 2
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 5 ,
            'idqualite' => 3
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 6 ,
            'idqualite' => 3
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 7 ,
            'idqualite' => 3
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 7 ,
            'idqualite' => 4
        ]);

        DB::table('recommandations')->insert([
            'idservice' => 8 ,
            'idqualite' => 4
        ]);
    }
}
