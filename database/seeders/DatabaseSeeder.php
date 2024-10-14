<?php

namespace Database\Seeders;
use App\Models\user;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //   $this->call([
    //     DatabaseSeeder::class


    //   ]);
    user::factory()->count(5)->create();



    }

}
