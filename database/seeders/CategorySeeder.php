<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()
            ->createMany([
                ['name' => '用车服务', 'intro' => '为您提供DSCC超跑俱乐部旗下车辆用车服务'],
                ['name' => '助理服务', 'intro' => '为您提供DSCC超跑俱乐部旗下助理服务'],
                ['name' => '秘书服务', 'intro' => '为您提供DSCC超跑俱乐部旗下秘书服务'],
                ['name' => '汽车服务', 'intro' => '为您提供DSCC超跑俱乐部旗下汽车服务'],
                ['name' => '预订服务', 'intro' => '为您提供DSCC超跑俱乐部旗下预订服务'],
                ['name' => '定制服务', 'intro' => '为您提供DSCC超跑俱乐部旗下定制服务']
            ]);
    }
}
