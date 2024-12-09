<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Vüsal',
            "surname" => "Mustafayev",
            "position" => 'IT söbəsinin müdiri'
        ]);
        User::create([
            'name' => 'Elçin',
            "surname" => "Həmidov",
            "position" => 'Sisadmin'
        ]);
    }
}
