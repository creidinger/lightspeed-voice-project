<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ecommerce
        DB::table('tasks')->insert([
            'task_name'          => 'Product Pages',
            'hours'         => 5,
            'project_id'    => 3,
            'assigned_to'   => 1,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'Shopping Cart',
            'hours'         => 10,
            'project_id'    => 3,
            'assigned_to'   => 4,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'My Account',
            'hours'         => 5,
            'project_id'    => 3,
            'assigned_to'   => 1,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        // websocket
        DB::table('tasks')->insert([
            'task_name'          => 'Add to Socket.IO',
            'hours'         => 2,
            'project_id'    => 1,
            'assigned_to'   => 3,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'Enable Broadcasting',
            'hours'         => 5,
            'project_id'    => 1,
            'assigned_to'   => 3,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'Adjust Interface',
            'hours'         => 3,
            'project_id'    => 1,
            'assigned_to'   => 3,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        // angular upgrade
        DB::table('tasks')->insert([
            'task_name'          => 'Upgrade Angular',
            'hours'         => 15,
            'project_id'    => 2,
            'assigned_to'   => 2,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'Fix Broken Things',
            'hours'         => 10,
            'project_id'    => 2,
            'assigned_to'   => 3,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('tasks')->insert([
            'task_name'          => 'Test',
            'hours'         => 10,
            'project_id'    => 2,
            'assigned_to'   => 2,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
