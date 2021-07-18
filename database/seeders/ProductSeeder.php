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
                'name'=>' banh da cua',
                'price'=>2000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>2,
                'name'=>' banh chung',
                'price'=>3000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>3,
                'name'=>' lạc vung',
                'price'=>4000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>5,
                'name'=>' bún bò huế',
                'price'=>5000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>6,
                'name'=>'  da cua',
                'price'=>6000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>7,
                'name'=>' phở',
                'price'=>7000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>8,
                'name'=>' cơm rang',
                'price'=>8000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>9,
                'name'=>' banh mỳ',
                'price'=>9000,
                'created_at'=>Carbon::now()->addDays(1)
            ],[
                'id'=>10,
                'name'=>' xôi',
                'price'=>10000,
                'created_at'=>Carbon::now()->addDays(1)
            ]
            ]);
    }
}
