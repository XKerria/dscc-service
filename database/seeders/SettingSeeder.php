<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run() {
        Setting::create([
            'name' => 'logo',
            'type' => 'image',
            'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/db19d70034be44d737fe2951aa8a86c8',
            'priority' => 0,
        ]);
        Setting::create([
            'name' => '名称',
            'value' => 'DSCC',
            'priority' => 1,
        ]);
        Setting::create([
            'name' => '副标题',
            'value' => '超跑俱乐部',
            'priority' => 2,
        ]);
        Setting::create([
            'name' => '客服人员',
            'value' => 'Mr.杨',
            'priority' => 3,
        ]);
        Setting::create([
            'name' => '客服电话',
            'value' => '13017466661',
            'priority' => 4,
        ]);
        Setting::create([
            'name' => '客服二维码',
            'type' => 'image',
            'value' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/bd7c494d59c1ced707b9a4c488433c8d',
            'priority' => 5,
        ]);
    }
}
