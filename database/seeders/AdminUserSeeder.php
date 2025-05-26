<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'merolagiuseppe@mig-consulting.it'],
            [
                'name' => 'Giuseppe Merola',
                'password' => Hash::make('Giumida1991'),
                'is_admin' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'merolamichele@mig-consulting.it'],
            [
                'name' => 'Michele Merola',
                'password' => Hash::make('Giumida1965'),
                'is_admin' => true,
            ]
        );
    }
}
