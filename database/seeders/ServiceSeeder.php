<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('name', '用车服务')->first();
        $category->services()->createMany([
            [
                'name' => '自驾',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/a334b61d057193cb77e69a2f7659cce3',
                'intro' => '为您提供车辆租赁服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/3275e2b00fc2851c2dc7714ad60f71ef'
            ],
            [
                'name' => '接送',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/255e9418a57f2be18a8dcb53993d5f65',
                'intro' => '为您提供车辆接送及私人秘书驾驶车辆服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/8557355f4d355cacc808e4fcefe2eca8'
            ],
            [
                'name' => '代驾',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/bc0b39fdab45d171f6d9d1eb235ef9fe',
                'intro' => '为您提供私人秘书代驾服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/927ce37fdfd5d8dd4980729e1737761d'
            ]
        ]);

        $category = Category::where('name', '助理服务')->first();
        $category->services()->createMany([
            [
                'name' => '商品、奢侈品代购',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/52596a83d43b57159c7e027389a91f87',
                'intro' => '为您提供商品、奢侈品代购服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/873e67854e714d9dff4bf02f8de60f77'
            ],
            [
                'name' => '物品送取',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/42a19dbdf7cb1f6599cbaa93e75b822d',
                'intro' => '为您提供物品送取服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/c4b86110637736511513f38dc46b4e9c'
            ],
            [
                'name' => '家政服务',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/da8724e847c09fd7a21f4e443f641463',
                'intro' => '为您提供，提高家庭生活质量的家政服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/d2eb0ed4cd7263be4884770502f2ef54'
            ]
        ]);

        $category = Category::where('name', '秘书服务')->first();
        $category->services()->createMany([
            [
                'name' => '商务、酒会、聚会、娱乐出席',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/f271b285f40a02623856d91d173cabf1',
                'intro' => '私人秘书伴您出席各类活动',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/c118098e35bcba7428178d6153bc6472'
            ]
        ]);

        $category = Category::where('name', '汽车服务')->first();
        $category->services()->createMany([
            [
                'name' => '美容、保养、维修、紧急救援',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/46c5b3a042fc29ed725948d49dd4ca64',
                'intro' => '为您提供美容、保养、维修及紧急救援服务',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/93651791d4c17d4f6e288efc1cfcddcf'
            ]
        ]);

        $category = Category::where('name', '预订服务')->first();
        $category->services()->createMany([
            [
                'name' => '酒店、票务、娱乐预订',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/49f7a86cb3f7fe0c36b1907407eae22c',
                'intro' => '为您预定酒店民宿、机票  、车票 、 船票 、演出票 、电影票等事宜事宜；为您预订餐厅、酒吧、户外娱乐活动事宜',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/11866e09c31ee7d5cb1d47f8570e57cf'
            ]
        ]);

        $category = Category::where('name', '定制服务')->first();
        $category->services()->createMany([
            [
                'name' => '出行、接待、宴会、求婚、旅行定制',
                'cover' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制出行线路及交通工具；接待流程；宴会场地；宴会流程；创意求婚计划；专属旅行线路及路书规划等事宜',
                'image' => 'https://dscc-all.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1'
            ]
        ]);
    }
}
