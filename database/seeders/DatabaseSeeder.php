<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Tandarts',
            'email' => 'tandarts@smilepro.nl',
            'password' => \Illuminate\Support\Facades\Hash::make('Hussein90'),
            'rolename' => 'tandarts',
        ]);

        User::create([
            'name' => 'Mondhygienist',
            'email' => 'mondhygienist@smilepro.nl',
            'password' => \Illuminate\Support\Facades\Hash::make('Hussein90'),
            'rolename' => 'mondhygienist',
        ]);

        User::create([
            'name' => 'Assistent',
            'email' => 'assistent@smilepro.nl',
            'password' => \Illuminate\Support\Facades\Hash::make('Hussein90'),
            'rolename' => 'assistent',
        ]);

        User::create([
            'name' => 'Praktijkmanagement',
            'email' => 'praktijkmanagement@smilepro.nl',
            'password' => \Illuminate\Support\Facades\Hash::make('Hussein90'),
            'rolename' => 'praktijkmanagement',
        ]);

        User::create([
            'name' => 'Patient',
            'email' => 'patient@smilepro.nl',
            'password' => \Illuminate\Support\Facades\Hash::make('Hussein90'),
            'rolename' => 'patient',
        ]);
    }
}
