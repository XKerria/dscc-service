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
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => '司机'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => '司机'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => '司机'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => '司机'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => '司机'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => '司机']
        ]);
        Staff::factory()->createMany([
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => '秘书'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => '秘书'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => '秘书'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => '秘书'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => '秘书'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => '秘书']
        ]);
        Staff::factory()->createMany([
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/069ca36704ffbf16ec338aed9b2dbd11', 'type' => '家政'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/85d84ae340f0df237fda68cd40da850a', 'type' => '家政'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/2cf5056ef526753bce65d81203f50b7d', 'type' => '家政'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e98625b8fd0333950f4cf0c46febd247', 'type' => '家政'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/667cb0aa56c9bb15c7a60f566af01e37', 'type' => '家政'],
            ['avatar_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e26ab6fb66af40c486e4a5abf1f92b43', 'type' => '家政']
        ]);
    }
}
