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
                        'name'=>'khu vui choi',
                        'address'=>'số 8 hoàn kiếm hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>2,
                        'name'=>'sân vận động mỹ đình ',
                        'address'=>'số 9 hồ tùng mậu',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>3,
                        'name'=>'trường sĩ quan chính trị ',
                        'address'=>'thạch thát hà nội  ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>4,
                        'name'=>'khu jopga',
                        'address'=>'nguyễn trãi -hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ],[
                        'id'=>5,
                        'name'=>'siêu thị ',
                        'address'=>'19-hoàn kiếm -hà nội ',
                        'created_at'=>Carbon::now()->addDays(1)
                    ]
                    ]);
    }
}
