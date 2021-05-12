<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    public function run()
    {
        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/cacc7d4226612e50c644d796bd823407',
            'type' => 'banner',
        ]);
        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/de517d7ed0df7c4ff79715674efef53f',
            'type' => 'banner',
        ]);
        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/c210b9a2c4684f6bd08db3b095cbeeec',
            'type' => 'banner',
        ]);

        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/ef126d5fa0b70c62f76c78dfc150ff3b',
            'type' => 'guide',
            'priority' => 100
        ]);
        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/75b65c75a30041aedbb4b1b310b93a02',
            'type' => 'guide',
            'priority' => 105
        ]);
        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/92e4c92313bfa6f040e83030a3e2b30e',
            'type' => 'guide',
            'priority' => 110
        ]);

        Banner::create([
            'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/9b180c9b3464c93a1bb5c9cd4625acd2',
            'type' => 'qrcode',
        ]);
    }
}
