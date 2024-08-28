<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();

        $user->name = 'Miguel Muñoz';
        $user->email = 'miguel@correo.com';
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();

        $user->name = 'Miguel Muñoz 2';
        $user->email = 'miguel2@correo.com';
        $user->password = bcrypt('12345678');

        $user->save();
    }
}
