<?php

namespace Database\Seeders;

use App\Models\BusinessOwners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BusinessOwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner_one = \App\Models\User::factory()->create([
            'id' => 2,
            'name' => 'Olimpo Nikki R.',
            'email' => 'olimpo.nikki@dasol.com',
            'password' => Hash::make('$PasswordOwner1234'),
        ]);

         $owner_one->attachRole('owner');

        $owner_two = \App\Models\User::factory()->create([
            'id' => 3,
            'name' => 'Nebre Leticia C.',
            'email' => 'nebre.leticia@dasol.com',
            'password' => Hash::make('$PasswordOwner1234'),
        ]);

         $owner_two->attachRole('owner');

        $owner_three = \App\Models\User::factory()->create([
            'id' => 4,
            'name' => 'Saltivan Rodelio C.',
            'email' => 'saltivan.rodelio@dasol.com',
            'password' => Hash::make('$PasswordOwner1234'),
        ]);

         $owner_three->attachRole('owner');

        $owner_four = \App\Models\User::factory()->create([
            'id' => 5,
            'name' => 'Langga Melba D.',
            'email' => 'langga.melba@dasol.com',
            'password' => Hash::make('$PasswordOwner1234'),
        ]);

         $owner_four->attachRole('owner');

        //  business owner information
            BusinessOwners::create([
                'id' => 1,
                'user_id' => 2,
                'name_of_registrant' => 'Olimpo, Nikki R.',
                'owner_address' => 'Tambobong',
                'owner_gender' => 'female',
                'owner_date_of_birth' => '1987-11-24',
                'owner_contact_number' => '0921-6558-281',
       ]);

            BusinessOwners::create([
                'id' => 2,
                'user_id' => 3,
                'name_of_registrant' => 'Nebre, Leticia C.',
                'owner_address' => 'Tambobong',
                'owner_gender' => 'female',
                'owner_date_of_birth' => '1955-12-05',
                'owner_contact_number' => '0998-2120-362',
       ]);

            BusinessOwners::create([
                'id' => 3,
                'user_id' => 4,
                'name_of_registrant' => 'Saltivan, Rodelio C.',
                'owner_address' => 'Osmeña',
                'owner_gender' => 'male',
                'owner_date_of_birth' => '1967-12-29',
                'owner_contact_number' => '0995-8115-391',
       ]);

            BusinessOwners::create([
                'id' => 4,
                'user_id' => 5,
                'name_of_registrant' => 'Langga, Melba D.',
                'owner_address' => 'Tambobong',
                'owner_gender' => 'female',
                'owner_date_of_birth' => '1959-08-30',
                'owner_contact_number' => '0995-7401-857',
       ]);


    }
}
