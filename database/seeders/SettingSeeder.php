<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder {
    public function run() {
        Setting::factory()->createMany([
            [
                'name' => 'LOGO',
                'type' => 'image',
                'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/db19d70034be44d737fe2951aa8a86c8',
            ],
            ['name' => '平台名称', 'value' => 'DSCC超跑俱乐部'],
            ['name' => '登录背景', 'type' => 'image', 'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/77f8dc72a68b3de9b42cd649b087baf9'],
            ['name' => '上传最大限制', 'value' => '500000000'],
            ['name' => '表格默认行数', 'value' => '50'],

            [
                'name' => '关联小程序ID',
                'value' => 'wxd3f015dca219b365'
            ],
            [
                'name' => '优惠券背景',
                'type' => 'image',
                'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/5091542fb1295543e5cf42e5e0f83e60',
            ],
            [
                'name' => '职员类型',
                'type' => 'array',
                'value' => '秘书,司机,家政',
            ],
            ['name' => '客服人员', 'value' => 'Mr.杨'],
            ['name' => '客服电话', 'value' => '13017466661'],
            [
                'name' => '客服二维码',
                'type' => 'image',
                'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/bd7c494d59c1ced707b9a4c488433c8d',
            ]
        ]);
    }
}
