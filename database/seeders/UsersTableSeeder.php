<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Adam',
            'email'         => 'adam@lsv.com',
            'password'      => Hash::make('lsv@'),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'          => 'Lan',
            'email'         => 'lan@lsv.com',
            'password'      => Hash::make('lsv@'),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'          => 'Stuart',
            'email'         => 'stuart@lsv.com',
            'password'      => Hash::make('lsv@'),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'          => 'Tyler',
            'email'         => 'tyler@lsv.com',
            'password'      => Hash::make('lsv@'),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
