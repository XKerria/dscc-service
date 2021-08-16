<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run()
    {
        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/cacc7d4226612e50c644d796bd823407',
            'type' => 'Banner',
        ]);
        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/de517d7ed0df7c4ff79715674efef53f',
            'type' => 'Banner',
        ]);
        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/c210b9a2c4684f6bd08db3b095cbeeec',
            'type' => 'Banner',
        ]);

        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/ef126d5fa0b70c62f76c78dfc150ff3b',
            'type' => '引导页',
            'priority' => 100
        ]);
        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/75b65c75a30041aedbb4b1b310b93a02',
            'type' => '引导页',
            'priority' => 105
        ]);
        Banner::create([
            'image_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/92e4c92313bfa6f040e83030a3e2b30e',
            'type' => '引导页',
            'priority' => 110
        ]);
    }
}
