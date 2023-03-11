<?php

namespace Database\Seeders;

use App\Models\Properties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Properties::create([
            'id' => 1,
            'user_id' => 2,
            'category_id' => 2,
            'permit_number' => '2022-0066',
            'property_name' => 'Nikki\'s Cottages Rental',
            'property_description' => 'Rental of rooms, cottages and others for leisure.',
            'property_address' => 'Tambobong',
            'date_of_registration' => '2019-02-06',
            'date_of_app' => '2022-01-05',
            'app_number' => 'B-0001',
       ]);

         Properties::create([
            'id' => 2,
            'user_id' => 3,
            'category_id' => 2,
            'permit_number' => '2022-0110',
            'property_name' => 'Princess Sophia Homestay',
            'property_description' => 'Rental of rooms, cottages and others for leisure.',
            'property_address' => 'Tambobong',
            'date_of_registration' => '2017-01-11',
            'date_of_app' => '2022-01-06',
            'app_number' => 'B-0003',
       ]);

         Properties::create([
            'id' => 3,
            'user_id' => 4,
            'category_id' => 1,
            'permit_number' => '2022-0169',
            'property_name' => 'Recudo Residence Resort',
            'property_description' => 'Operation of Class AA Resorts.',
            'property_address' => 'Osmeña',
            'date_of_registration' => '2018-12-21',
            'date_of_app' => '2022-01-10',
            'app_number' => 'B-0005',
       ]);

         Properties::create([
            'id' => 4,
            'user_id' => 5,
            'category_id' => 1,
            'permit_number' => '2022-0187',
            'property_name' => 'De Guzman Beach Resort',
            'property_description' => 'Operation of Class AA Resorts.',
            'property_address' => 'Tambobong',
            'date_of_registration' => '2017-11-14',
            'date_of_app' => '2022-01-10',
            'app_number' => 'B-0006',
       ]);

    }
}
