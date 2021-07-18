<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
                DB::table('customers')->truncate();
                DB::table('customers')->insert([
                    [
                        'id'=>1,
                        'name'=>'hoàng hà',
                        'address'=>'số 8 hoàn kiếm hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>2,
                        'name'=>'hoàng mai ',
                        'address'=>'số 9 hồ tùng mậu',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>3,
                        'name'=>'hải hòa ',
                        'address'=>'thạch thát hà nội  ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>4,
                        'name'=>'hải lợi',
                        'address'=>'nguyễn trãi -hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>5,
                        'name'=>'hải sâm ',
                        'address'=>'19-hoàn kiếm -hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ]
                    ]);
    }
}
