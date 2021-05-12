<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {
        $logo = 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/8a635ec363b4e84420b801adfc45bff4';
        $image = 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/c0e3f2a23524b2dc7ffb0cda30965184';

        Car::factory()->createMany([
            ['name' => '阿斯顿马丁 One-77', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 幻影（标准）', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 幻影（长轴）', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 曜影', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 魅影', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 古斯特', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '劳斯莱斯 库里南', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 穆拉', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 康塔什', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 鬼怪', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 蝙蝠', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 埃文塔多', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 盖拉多', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 飓风', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 毒药', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 雷文顿', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 第六元素', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
            ['name' => '兰博基尼 自私', 'logo' => $logo, 'image' => $image, 'rent' => 6160, 'fare' => 30],
        ]);
    }
}
