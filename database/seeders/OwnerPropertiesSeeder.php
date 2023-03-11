<?php

namespace Database\Seeders;

use App\Models\OwnerProperties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         OwnerProperties::create([
            'id' => 1,
            'property_id' => 1,
            'feature' => '',
            'property_tag' => 'Rental of Rooms',
            'property_est' => '2017',
            'property_address' => 'Tambobong',
            'image_one' => '',
            'image_two' => '',
            'image_three' => '',
            'image_four' => '',
            'images' => '',
            'property_description' => 'Rental of rooms, cottages and others for leisure.',
            'property_offers' => 'Rooms, Cottages, Reservation Tables, Availability of Sari-sari store',
            'property_details' => '',
            'property_price' => '150',
            'latitude' => '15.9441',
            'longitude' => '119.7831'

         ]);

         OwnerProperties::create([
            'id' => 2,
            'property_id' => 2,
            'feature' => '',
            'property_tag' => 'Rental of Rooms',
            'property_est' => '2021',
            'property_address' => 'Tambobong',
            'image_one' => '',
            'image_two' => '',
            'image_three' => '',
            'image_four' => '',
            'images' => '',
            'property_description' => 'Rental of rooms, cottages and others for leisure.',
            'property_offers' => 'Rooms, Cottages, Reservation Tables, Availability of Sari-sari store',
            'property_details' => '',
            'property_price' => '150',
            'latitude' => '15.9441',
            'longitude' => '119.7831'
         ]);
    }
}
