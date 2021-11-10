<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langues')->insert([
            'idlang' => 1 ,
            'langue' => 'Allemand Allemagne' ,
            'codelang' => 'DE-de'
        ]);

        DB::table('langues')->insert([
            'idlang' => 2 ,
            'langue' => 'Anglais UK' ,
            'codelang' => 'EN-uk'
        ]);

        DB::table('langues')->insert([
            'idlang' => 3 ,
            'langue' => 'Espagnol Espagne' ,
            'codelang' => 'ES-es'
        ]);

        DB::table('langues')->insert([
            'idlang' => 4 ,
            'langue' => 'Français France' ,
            'codelang' => 'FR-fr'
        ]);

        DB::table('langues')->insert([
            'idlang' => 5 ,
            'langue' => 'Italien Italie' ,
            'codelang' => 'IT-it'
        ]);

        DB::table('langues')->insert([
            'idlang' => 6 ,
            'langue' => 'Néerlandais Pays-Bas' ,
            'codelang' => 'NL-nl'
        ]);

        DB::table('langues')->insert([
            'idlang' => 7 ,
            'langue' => 'Roumain' ,
            'codelang' => 'RO'
        ]);

        DB::table('langues')->insert([
            'idlang' => 8 ,
            'langue' => 'Tchèque' ,
            'codelang' => 'CS'
        ]);

        DB::table('langues')->insert([
            'idlang' => 9 ,
            'langue' => 'Estonien' ,
            'codelang' => 'ET'
        ]);

        DB::table('langues')->insert([
            'idlang' => 10 ,
            'langue' => 'Russe' ,
            'codelang' => 'RU'
        ]);

        DB::table('langues')->insert([
            'idlang' => 11 ,
            'langue' => 'Turc' ,
            'codelang' => 'TR'
        ]);

        DB::table('langues')->insert([
            'idlang' => 12 ,
            'langue' => 'Letton' ,
            'codelang' => 'LV'
        ]);

        DB::table('langues')->insert([
            'idlang' => 13 ,
            'langue' => 'Suédois' ,
            'codelang' => 'SV'
        ]);

        DB::table('langues')->insert([
            'idlang' => 14 ,
            'langue' => 'Polonais' ,
            'codelang' => 'PL'
        ]);

        DB::table('langues')->insert([
            'idlang' => 15 ,
            'langue' => 'Portugais Portugal' ,
            'codelang' => 'PT-pt'
        ]);

        DB::table('langues')->insert([
            'idlang' => 16 ,
            'langue' => 'Ukrainien' ,
            'codelang' => 'UK'
        ]);

        DB::table('langues')->insert([
            'idlang' => 17 ,
            'langue' => 'Portugais Brésil' ,
            'codelang' => 'PT-br'
        ]);

        DB::table('langues')->insert([
            'idlang' => 18 ,
            'langue' => 'Japonais' ,
            'codelang' => 'JA'
        ]);

        DB::table('langues')->insert([
            'idlang' => 19 ,
            'langue' => 'Arabe standard moderne' ,
            'codelang' => 'AR'
        ]);

        DB::table('langues')->insert([
            'idlang' => 20 ,
            'langue' => 'Slovaque' ,
            'codelang' => 'SK'
        ]);

        DB::table('langues')->insert([
            'idlang' => 21 ,
            'langue' => 'Grec' ,
            'codelang' => 'EL'
        ]);

        DB::table('langues')->insert([
            'idlang' => 22 ,
            'langue' => 'Norvégien Bokmal' ,
            'codelang' => 'NO-bo'
        ]);

        DB::table('langues')->insert([
            'idlang' => 23 ,
            'langue' => 'Danois' ,
            'codelang' => 'DA'
        ]);

        DB::table('langues')->insert([
            'idlang' => 24 ,
            'langue' => 'Chinois simplifié (Singapore)' ,
            'codelang' => 'ZH-sg'
        ]);

        DB::table('langues')->insert([
            'idlang' => 25 ,
            'langue' => 'Espagnol Mexique' ,
            'codelang' => 'ES-mx'
        ]);

        DB::table('langues')->insert([
            'idlang' => 26 ,
            'langue' => 'Slovène' ,
            'codelang' => 'SL'
        ]);

        DB::table('langues')->insert([
            'idlang' => 27 ,
            'langue' => 'Hongrois' ,
            'codelang' => 'HU'
        ]);

        DB::table('langues')->insert([
            'idlang' => 28 ,
            'langue' => 'Finnois' ,
            'codelang' => 'FI'
        ]);

        DB::table('langues')->insert([
            'idlang' => 29 ,
            'langue' => 'Luxembourgeois' ,
            'codelang' => 'LU'
        ]);

        DB::table('langues')->insert([
            'idlang' => 30 ,
            'langue' => 'Coréen' ,
            'codelang' => 'KO'
        ]);

        DB::table('langues')->insert([
            'idlang' => 31 ,
            'langue' => 'Thaï' ,
            'codelang' => 'TH'
        ]);

        DB::table('langues')->insert([
            'idlang' => 32 ,
            'langue' => 'Afrikaans' ,
            'codelang' => 'AF'
        ]);

        DB::table('langues')->insert([
            'idlang' => 33 ,
            'langue' => 'Albanais' ,
            'codelang' => 'SQ'
        ]);

        DB::table('langues')->insert([
            'idlang' => 34 ,
            'langue' => 'Allemand Autriche' ,
            'codelang' => 'DE-at'
        ]);

        DB::table('langues')->insert([
            'idlang' => 35 ,
            'langue' => 'Allemand Luxembourg' ,
            'codelang' => 'DE-lu'
        ]);

        DB::table('langues')->insert([
            'idlang' => 36 ,
            'langue' => 'Allemand Suisse' ,
            'codelang' => 'DE-ch'
        ]);

        DB::table('langues')->insert([
            'idlang' => 37 ,
            'langue' => 'Anglais US' ,
            'codelang' => 'EN-us'
        ]);

        DB::table('langues')->insert([
            'idlang' => 38 ,
            'langue' => 'Arménien' ,
            'codelang' => 'HY'
        ]);

        DB::table('langues')->insert([
            'idlang' => 39 ,
            'langue' => 'Biélorusse' ,
            'codelang' => 'BE'
        ]);

        DB::table('langues')->insert([
            'idlang' => 40 ,
            'langue' => 'Birman (Myanmar)' ,
            'codelang' => 'MY'
        ]);

        DB::table('langues')->insert([
            'idlang' => 41 ,
            'langue' => 'Bosnien Latin' ,
            'codelang' => 'BS'
        ]);

        DB::table('langues')->insert([
            'idlang' => 42 ,
            'langue' => 'Bulgare' ,
            'codelang' => 'BG'
        ]);

        DB::table('langues')->insert([
            'idlang' => 43 ,
            'langue' => 'Croate' ,
            'codelang' => 'HR'
        ]);

        DB::table('langues')->insert([
            'idlang' => 44 ,
            'langue' => 'Chinois traditionnel (Hong Kong)' ,
            'codelang' => 'ZH-hk'
        ]);

        DB::table('langues')->insert([
            'idlang' => 45 ,
            'langue' => 'Espagnol Argentine' ,
            'codelang' => 'ES-ar'
        ]);

        DB::table('langues')->insert([
            'idlang' => 46 ,
            'langue' => 'Espagnol Catalan' ,
            'codelang' => 'ES-ca'
        ]);

        DB::table('langues')->insert([
            'idlang' => 47 ,
            'langue' => 'Espagnol Colombie' ,
            'codelang' => 'ES-co'
        ]);

        DB::table('langues')->insert([
            'idlang' => 48 ,
            'langue' => 'Français Belgique' ,
            'codelang' => 'FR-be'
        ]);

        DB::table('langues')->insert([
            'idlang' => 49 ,
            'langue' => 'Français Canada' ,
            'codelang' => 'FR-ca'
        ]);

        DB::table('langues')->insert([
            'idlang' => 50 ,
            'langue' => 'Français Congo' ,
            'codelang' => 'FR-cd'
        ]);

        DB::table('langues')->insert([
            'idlang' => 51 ,
            'langue' => 'Français Suisse' ,
            'codelang' => 'FR-ch'
        ]);

        DB::table('langues')->insert([
            'idlang' => 52 ,
            'langue' => 'Français Luxembour' ,
            'codelang' => 'FR-lu'
        ]);

        DB::table('langues')->insert([
            'idlang' => 53 ,
            'langue' => 'Hébreu' ,
            'codelang' => 'HE'
        ]);

        DB::table('langues')->insert([
            'idlang' => 54 ,
            'langue' => 'Hindi' ,
            'codelang' => 'HI'
        ]);

        DB::table('langues')->insert([
            'idlang' => 55 ,
            'langue' => 'Islandais' ,
            'codelang' => 'IS'
        ]);

        DB::table('langues')->insert([
            'idlang' => 56 ,
            'langue' => 'Italien Suisse' ,
            'codelang' => 'IT-ch'
        ]);

        DB::table('langues')->insert([
            'idlang' => 57 ,
            'langue' => 'Indonésien' ,
            'codelang' => 'ID'
        ]);

        DB::table('langues')->insert([
            'idlang' => 58 ,
            'langue' => 'Lituanien' ,
            'codelang' => 'LT'
        ]);

        DB::table('langues')->insert([
            'idlang' => 59 ,
            'langue' => 'Macédonien' ,
            'codelang' => 'MK'
        ]);

        DB::table('langues')->insert([
            'idlang' => 60 ,
            'langue' => 'Malais' ,
            'codelang' => 'MS'
        ]);

        DB::table('langues')->insert([
            'idlang' => 61 ,
            'langue' => 'Mongole' ,
            'codelang' => 'MN'
        ]);

        DB::table('langues')->insert([
            'idlang' => 62 ,
            'langue' => 'Néerlandais Flamant' ,
            'codelang' => 'NL-be'
        ]);

        DB::table('langues')->insert([
            'idlang' => 63 ,
            'langue' => 'Népalais' ,
            'codelang' => 'NE'
        ]);

        DB::table('langues')->insert([
            'idlang' => 64 ,
            'langue' => 'Norvégien Nynorsk' ,
            'codelang' => 'NO-ny'
        ]);

        DB::table('langues')->insert([
            'idlang' => 65 ,
            'langue' => 'Ourdou' ,
            'codelang' => 'UR'
        ]);

        DB::table('langues')->insert([
            'idlang' => 66 ,
            'langue' => 'Persan' ,
            'codelang' => 'FA'
        ]);

        DB::table('langues')->insert([
            'idlang' => 67 ,
            'langue' => 'Serbe' ,
            'codelang' => 'SR'
        ]);

        DB::table('langues')->insert([
            'idlang' => 68 ,
            'langue' => 'Swahili (Kiswahili - Kenya)' ,
            'codelang' => 'SW'
        ]);

        DB::table('langues')->insert([
            'idlang' => 69 ,
            'langue' => 'Tamoul' ,
            'codelang' => 'TA'
        ]);

        DB::table('langues')->insert([
            'idlang' => 70 ,
            'langue' => 'Vietnamien' ,
            'codelang' => 'VI'
        ]);
    }
}
