<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::factory()->createMany([
            [
                'title' => '用车服务/助理服务/秘书服务可用',
                'type' => '代金券',
                'value' => 500,
                'expire' => 1,
                'expire_unit' => 'month',
                'remark' => '满10小时可用'
            ],
            [
                'title' => '用车服务/助理服务/秘书服务可用',
                'type' => '代金券',
                'value' => 1000,
                'expire' => 1,
                'expire_unit' => 'month',
                'remark' => '满5小时可用'
            ],
            [
                'title' => '用车服务/助理服务/秘书服务可用',
                'type' => '代金券',
                'value' => 2000,
                'expire' => 1,
                'expire_unit' => 'month',
                'remark' => '满2天可用'
            ],
        ]);
    }
}
