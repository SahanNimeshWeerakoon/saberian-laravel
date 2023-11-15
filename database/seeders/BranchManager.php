<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BranchManager extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch_managers')->insert([
            [ 'branch_manager_uid' => 1, 'name' =>'Branch Manager Name', 'branch_name'=>'Branch A', 'status'=>true, 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ],
        ]);
    }
}
