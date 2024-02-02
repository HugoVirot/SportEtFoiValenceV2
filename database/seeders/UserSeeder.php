<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'HugoAdmin',
            'first_name' => 'Hugo',
            'last_name' => 'VIROT',
            'email' => 'hugo@test.fr',
            'password' => Hash::make('Azerty88@'),
            'role_id' => 1,
        ]);

        User::create([
            'user_name' => 'JPTab',
            'first_name' => 'Jean-Paul',
            'last_name' => 'TABOYAN',
            'email' => 'jp@test.fr',
            'password' => Hash::make('Azerty99@'),
            'role_id' => 1,
        ]);
        
        User::create([
            'user_name' => 'JohnDoe',
            'first_name' => 'John',
            'last_name' => 'DOE',
            'email' => 'johndoe@test.fr',
            'password' => Hash::make('Azerty99@'),
        ]);

        User::factory(17)->create();
    }
}
