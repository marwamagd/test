<?php

namespace Database\Seeders;
use App\Models\Car;
<<<<<<< HEAD
use App\Models\User;
use App\Models\Category;

=======
>>>>>>> fca7a7134065c44a08474e56eb786e69c4eef458
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::factory(10)->create();
        Category::factory(10)->create();

=======
>>>>>>> fca7a7134065c44a08474e56eb786e69c4eef458
        Car::factory(10)->create();
 
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
