<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(LangueSeeder::class);
        $this->command->info('Langues table seeded!');

        $this->call(QualiteClientSeeder::class);
        $this->command->info('Qualiteclients table seeded!');

        $this->call(ServiceSeeder::class);
        $this->command->info('Services table seeded!');

        $this->call(RecommandationSeeder::class);
        $this->command->info('Recommandations table seeded!');
    }
}
