<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Eventos;
use App\Models\Eventos_config;
use App\Models\Eventos_lote;
use App\Models\Eventos_vaga;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory()->count(10)->create();
        Eventos::factory()->count(10)->create();
        //Eventos_config::factory()->count(22)->create();
        //Eventos_lote::factory()->count(22)->create();
        //Eventos_vaga::factory()->count(22)->create();



        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$this->call([
            //UserSeeder::class,
            //EventosSeeder::class,
        //]);
    }
}
