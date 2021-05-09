<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run() {
        User::create([
            'username' => 'admin',
            'password' => '111111',
            'admin' => true
        ]);
    }
}
