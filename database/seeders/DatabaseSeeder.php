<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(BusinessOwnersSeeder::class);
        $this->call(PropertiesSeeder::class);
        $this->call(OwnerPropertiesSeeder::class);
        //  \App\Models\User::factory(50)->create();

      $user = \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Office',
            'email' => 'municipalityofdasol@gmail.com',
            'password' => Hash::make('password'),
        ]);

         $user->attachRole('superadministrator');
    }
}
