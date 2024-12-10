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
        User::insert([
            [
                'name' => 'Vüsal',
                'surname' => 'Mustafayev',
                'position' => 'IT söbəsinin müdiri',
            ],
            [
                'name' => 'Elçin',
                'surname' => 'Həmidov',
                'position' => 'Sistem inzibatçısı',
            ],
            [
                'name' => 'Yaqub',
                'surname' => 'Tağıyev',
                'position' => 'Şəbəkə inzibatçısı',
            ],
            [
                'name' => 'Şəlalə',
                'surname' => 'Şəfiyeva',
                'position' => 'İT koordinator',
            ],
            [
                'name' => 'Kərim',
                'surname' => 'Hümmətli',
                'position' => 'IT mütəxəssisi',
            ],
            [
                'name' => 'Faiq',
                'surname' => 'Ismayılov',
                'position' => 'Təhlükəsizlik mütəxəssisi',
            ]
        ]);
    }
}
