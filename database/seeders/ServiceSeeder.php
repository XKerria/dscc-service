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
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/a334b61d057193cb77e69a2f7659cce3',
                'intro' => '为您提供车辆租赁服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/3275e2b00fc2851c2dc7714ad60f71ef" />',
                'tip' => '根据实际租赁时间及车型结算费用。',
            ],
            [
                'name' => '接送',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/255e9418a57f2be18a8dcb53993d5f65',
                'intro' => '为您提供车辆接送及私人秘书驾驶车辆服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/8557355f4d355cacc808e4fcefe2eca8" />',
                'tip' => '根据实际服务时间、里程及车型结算费用。',
                'staff_type' => '司机'
            ],
            [
                'name' => '代驾',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/bc0b39fdab45d171f6d9d1eb235ef9fe',
                'intro' => '为您提供私人秘书代驾服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/927ce37fdfd5d8dd4980729e1737761d" />',
                'tip' => '根据实际服务时间及里程结算费用。',
                'prices' => ['km' => 15, 'minute' => 6],
                'staff_type' => '司机'
            ]
        ]);

        $category = Category::where('name', '助理服务')->first();
        $category->services()->createMany([
            [
                'name' => '商品、奢侈品代购',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/52596a83d43b57159c7e027389a91f87',
                'intro' => '为您提供商品、奢侈品代购服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/873e67854e714d9dff4bf02f8de60f77" />',
                'tip' => '根据实际服务时间及里程结算费用。',
                'prices' => ['km' => 5, 'minute' => 6],
                'staff_type' => '秘书'
            ],
            [
                'name' => '物品送取',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/42a19dbdf7cb1f6599cbaa93e75b822d',
                'intro' => '为您提供物品送取服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/c4b86110637736511513f38dc46b4e9c" />',
                'tip' => '根据实际服务时间及里程结算费用',
                'prices' => ['km' => 5, 'minute' => 6],
            ],
            [
                'name' => '家政服务',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/da8724e847c09fd7a21f4e443f641463',
                'intro' => '为您提供，提高家庭生活质量的家政服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/d2eb0ed4cd7263be4884770502f2ef54" />',
                'tip' => '根据实际服务时间结算费用',
                'staff_type' => '家政'
            ]
        ]);

        $category = Category::where('name', '秘书服务')->first();
        $category->services()->createMany([
            [
                'name' => '商务、酒会、聚会、娱乐出席',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/f271b285f40a02623856d91d173cabf1',
                'intro' => '私人秘书伴您出席各类活动',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/c118098e35bcba7428178d6153bc6472" />',
                'tip' => '根据实际服务时间结算费用',
                'prices' => ['minute' => 6],
                'staff_type' => '秘书'
            ]
        ]);

        $category = Category::where('name', '汽车服务')->first();
        $category->services()->createMany([
            [
                'name' => '美容、保养、维修、紧急救援',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/46c5b3a042fc29ed725948d49dd4ca64',
                'intro' => '为您提供美容、保养、维修及紧急救援服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/93651791d4c17d4f6e288efc1cfcddcf" />',
                'tip' => '根据实际服务内容结算费用',
                'items' => ['洗护', '保养', '改装', '机修', '救援']
            ]
        ]);

        $category = Category::where('name', '预订服务')->first();
        $category->services()->createMany([
            [
                'name' => '酒店预订',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/49f7a86cb3f7fe0c36b1907407eae22c',
                'intro' => '为您解决酒店、民宿预定事宜',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/11866e09c31ee7d5cb1d47f8570e57cf" />',
                'tip' => '合作酒店是DSCC超跑俱乐部战略合作商家，给予俱乐部成员优惠价格。',
                'staff_type' => '秘书',
                'partner_type' => '酒店'
            ],
            [
                'name' => '票务预订',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/49f7a86cb3f7fe0c36b1907407eae22c',
                'intro' => '为您解决机票、车票、 船票、演出票、电影票等预订事宜',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/11866e09c31ee7d5cb1d47f8570e57cf" />',
                'tip' => '合作公司是DSCC超跑俱乐部战略合作商家，给予俱乐部成员优惠价格。',
                'staff_type' => '秘书',
                'partner_type' => '票务'
            ],
            [
                'name' => '娱乐预订',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/49f7a86cb3f7fe0c36b1907407eae22c',
                'intro' => '为您解决餐厅、酒吧、户外娱乐等活动预订事宜',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/11866e09c31ee7d5cb1d47f8570e57cf" />',
                'tip' => '合作公司是DSCC超跑俱乐部战略合作商家，给予俱乐部成员优惠价格。',
                'staff_type' => '秘书',
                'partner_type' => '娱乐'
            ]
        ]);

        $category = Category::where('name', '定制服务')->first();
        $category->services()->createMany([
            [
                'name' => '出行定制',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制出行线路及交通工具',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1" />',
                'tip' => '与您的私人秘书联系沟通详细的定制方案。',
                'staff_type' => '秘书',
            ],
            [
                'name' => '接待定制',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制接待流程',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1" />',
                'tip' => '与您的私人秘书联系沟通详细的定制方案。',
                'staff_type' => '秘书',
            ],
            [
                'name' => '宴会定制',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制宴会场地、宴会流程',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1" />',
                'tip' => '与您的私人秘书联系沟通详细的定制方案。',
                'staff_type' => '秘书',
            ],
            [
                'name' => '求婚定制',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制创意求婚计划',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1" />',
                'tip' => '与您的私人秘书联系沟通详细的定制方案。',
                'staff_type' => '秘书',
            ],
            [
                'name' => '旅行定制',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/80d5d515baf5559f68e832c61c66f1d6',
                'intro' => '为您定制专属旅行线路及路书规划',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/cd7468fb174ccca570b8f8e07be875d1" />',
                'tip' => '与您的私人秘书联系沟通详细的定制方案。',
                'staff_type' => '秘书',
            ]
        ]);

        $category = Category::where('name', '托管服务')->first();
        $category->services()->createMany([
            [
                'name' => '车辆托管',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/e2a28e39fd29fcc4b1f7b7373026273b',
                'intro' => '为您提供车辆托管服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/edc4aa3b21da13d5a1ca9683fdb368a2" />',
                'tip' => '与您的私人秘书联系沟通详细的服务方案。'
            ],
            [
                'name' => '首付垫付',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/c8e9d085075f4db64513c8632877fbc6',
                'intro' => '为您提供首付垫付服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/51523ef88f3b6ba98202e01858a0d35b" />',
                'tip' => '与您的私人秘书联系沟通详细的服务方案。'
            ],
            [
                'name' => '征信代购',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/1df3cfb6c6260435624b9ced4248ff4f',
                'intro' => '为您提供征信代购服务',
                'content' => '<img src="https://project-dscc.oss-cn-chengdu.aliyuncs.com/d1e2f8fa036b0f776e089d8cf6397a05" />',
                'tip' => '与您的私人秘书联系沟通详细的服务方案。'
            ],
            [
                'name' => '车辆代售库',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/c7fb03c39b4f7748a1e696ed2658c7bc',
                'intro' => '为您提供车辆代售库服务',
                'tip' => '与您的私人秘书联系沟通详细的服务方案。'
            ],
            [
                'name' => '收益计算',
                'icon_url' => 'https://project-dscc.oss-cn-chengdu.aliyuncs.com/cc16ea8d6bfa28b7c43c99201589a2e4',
                'intro' => '为您提供收益计算服务',
                'tip' => '与您的私人秘书联系沟通详细的服务方案。'
            ],
        ]);
    }
}
