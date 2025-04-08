<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'login' => 'adminka',
            'email' => 'admin@example.com',
            'fio' => 'Ковидяев Максим Алексндрович',
            'phone' => '+7(980)-920-10-20',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'login' => 'user',
            'email' => 'user@example.com',
            'fio' => 'Ковидяев Максим Алексндрович',
            'phone' => '+7(980)-920-10-20',
            'password' => Hash::make('password'),
        ]);

        Service::create([
            'name' => 'общий клининг'
        ]);

        Service::create([
            'name' => 'генеральная уборка'
        ]);

        Service::create([
            'name' => 'послестроительная уборка'
        ]);

        Service::create([
            'name' => 'химчистка ковров и мебели'
        ]);
    }
}
