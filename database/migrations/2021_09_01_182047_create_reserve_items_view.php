<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateReserveItemsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function dropView(): string
    {
        return <<<SQL
            DROP VIEW IF EXISTS `reserve_items`;
        SQL;
    }

    private function createView(): string
    {
        return <<<SQL
            create or replace view reserve_items as
            select
                u.nickname, u.gender, u.country, u.province, u.city, u.phone as user_phone,
                (select `name` from services s where s.id = r.service_id) service_name,
                (select `name` from staffs s where s.id = r.staff_id) staff_name,
                t.partner_name,
                t.coupon_value,
                r.*
            from reserves r
                     left join users u on r.user_id = u.id
                     left join (
                select
                    (select `value` from coupons c where c.id = t.coupon_id) coupon_value,
                    (select `name` from partners p where p.id = t.partner_id) partner_name,
                    t.*
                from tickets t
            ) t on t.id = r.ticket_id;
        SQL;
    }
}
