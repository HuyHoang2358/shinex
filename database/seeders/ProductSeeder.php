<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(1, 10) as $index){
            product::create([
                'name' => $faker->name,
                'images' => null,
                'slug' => 'default',
                'description' => $faker->text,
                'content' => $faker->text
            ]);
        }
    }
}
