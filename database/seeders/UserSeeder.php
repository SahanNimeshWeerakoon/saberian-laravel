<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [ 'user_level_id' => 3, 'name' =>'Ho User', 'email'=>'ho@headoffice.com', 'password'=>'test', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ],
            [ 'user_level_id' => 2, 'name' =>'Branch Manager User', 'email'=>'bm@branch.com', 'password'=>'test', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ],
            [ 'user_level_id' => 1, 'name' =>'Admin', 'email'=>'admin@admin.com', 'password'=>'test', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ]
        ]);
    }
}
