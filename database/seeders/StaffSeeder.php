<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::factory()->createMany([
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => 'driver'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => 'driver'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => 'driver'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => 'driver'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => 'driver'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => 'driver']
        ]);
        Staff::factory()->createMany([
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => 'secretory'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => 'secretory'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => 'secretory'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => 'secretory'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => 'secretory'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => 'secretory']
        ]);
        Staff::factory()->createMany([
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => 'housekeeper'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => 'housekeeper'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => 'housekeeper'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => 'housekeeper'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => 'housekeeper'],
            ['image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => 'housekeeper']
        ]);
    }
}
