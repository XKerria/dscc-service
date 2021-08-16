<?php

namespace Database\Seeders;

use App\Models\Vip;
use Illuminate\Database\Seeder;

class VipSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Vip::factory()->createMany([
            [
                'name' => 'SVIP',
                'icon_url' => 'http://project-dscc.oss-cn-chengdu.aliyuncs.com/b8e43b0dc9094a87d6ad32d076cabd26'
            ]
        ]);
    }
}
