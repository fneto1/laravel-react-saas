<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'cobra',
            'email' => 'cobra@gmail.com',
            'password'=> bcrypt('teste123'),
        ]);

        Feature::create([
            'image' => 'https://static-00.iconduck.com/assets.00/plus-icon-1024x1024-jdaf40nu.png',
            'route_name'=> 'sum.index',
            'name'=> 'Calculate Sum',
            'description'=> 'Calculate sum of two numbers',
            'required_credits'=> 1,
            'active' => true,
        ]);

        Feature::create([
            'image' => 'https://cdn-icons-png.freepik.com/512/6861/6861939.png',
            'route_name'=> 'diff.index',
            'name'=> 'Calculate Difference',
            'description'=> 'Calculate difference of two numbers',
            'required_credits'=> 3,
            'active' => true,
        ]);

        Package::create([
           'name' => 'Basic',
           'price' => 5,
           'credits' => 20
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
         ]);

         Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
         ]);
    }
}
