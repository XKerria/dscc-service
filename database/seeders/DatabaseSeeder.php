<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() {
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
            VipSeeder::class,
            BannerSeeder::class,
            CategorySeeder::class,
            ServiceSeeder::class,
        ]);

        if (app()->environment() == 'local') {
            $this->call([
                VehicleSeeder::class,
                StaffSeeder::class,
                PartnerSeeder::class,
                CouponSeeder::class,
                SaleSeeder::class
            ]);
        }
    }
}
