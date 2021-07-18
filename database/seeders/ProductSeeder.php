<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>' ô tô',
                'price'=>2000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>2,
                'name'=>' xếp hình',
                'price'=>3000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>3,
                'name'=>' bắn súng',
                'price'=>4000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>5,
                'name'=>' rubik',
                'price'=>5000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>6,
                'name'=>'  cờ cá ngựa',
                'price'=>6000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>7,
                'name'=>' bi -a',
                'price'=>7000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>8,
                'name'=>' rút gỗ',
                'price'=>8000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>9,
                'name'=>' công chúa ',
                'price'=>9000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>10,
                'name'=>' nấu ăn ',
                'price'=>10000,
                'created_at'=>Carbon::now()->addDays(1)
            ]
            ]);
    }
}
