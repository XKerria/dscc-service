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
            'value' => 'https://project-default-template.oss-cn-chengdu.aliyuncs.com/afc00701a23ac137f4a351d8fbb28af6',
            'priority' => 0,
        ]);
        Setting::create([
            'name' => '名称',
            'value' => 'APP',
            'priority' => 1,
        ]);
        Setting::create([
            'name' => '副标题',
            'value' => 'This is a App',
            'priority' => 2,
        ]);
    }
}
