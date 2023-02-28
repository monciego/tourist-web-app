<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Categories::create([
            'id' => 1,
            'category_name' => 'Resort',
       ]);
         Categories::create([
            'id' => 2,
            'category_name' => 'Room Rentals',
       ]);
    }
}
