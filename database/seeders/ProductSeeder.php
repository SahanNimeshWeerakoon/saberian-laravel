<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'vendor_id' => 1,
                'branch_manager_id' =>1,
                'name'=>'Nokia XR21',
                'description'=>'im too lazy to add stuff',
                'price' => 10000.00,
                'count' => 10,
                'img' => 'https://images.ctfassets.net/wcfotm6rrl7u/1raiQiaxmaiqtZP03cc3ZL/4f61824db43ada7b1907df7e33433860/nokia_XR21-midnight_black-front-back-int.png?h=1000&fm=png&fl=png8',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'vendor_id' => 1,
                'branch_manager_id' =>1,
                'name'=>'Nokia G310 5G',
                'description'=>'im too lazy to add stuff',
                'price' => 20000.00,
                'count' => 10,
                'img' => 'https://images.ctfassets.net/wcfotm6rrl7u/4AJ88z46jdcgVTPXM5MGED/51e64954aa16781d3c489657d7140e8a/nokia_G3105G-blue-front-back-us.png',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
            [
                'vendor_id' => 1,
                'branch_manager_id' =>1,
                'name'=>'Nokia C310',
                'description'=>'im too lazy to add stuff',
                'price' => 30000.00,
                'count' => 10,
                'img' => 'https://fdn2.gsmarena.com/vv/bigpic/nokia-c210.jpg',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        ]);
    }
}
