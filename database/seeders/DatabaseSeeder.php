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
        // \App\Models\User::factory(10)->create();

      $user = \App\Models\User::factory()->create([
            'name' => 'Office',
            'email' => 'municipalityofdasol@gmail.com',
            'password' => Hash::make('password'),
        ]);

         $user->attachRole('superadministrator');
    }
}
