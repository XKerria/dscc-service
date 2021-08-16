<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::factory()->createMany([
            ['name' => 'kerria', 'phone' => '18166750612', 'password' => '111111'],
            ['name' => '苏省南', 'phone' => '15985101597'],
            ['name' => '张经理', 'phone' => '17585908252'],
        ]);
    }
}
