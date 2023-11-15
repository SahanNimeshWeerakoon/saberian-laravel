<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_levels')->insert([
            [ 'name' => 'Admin', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ],
            [ 'name' => 'BranchManager', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ],
            [ 'name' => 'Admin', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ]
        ]);
    }
}
