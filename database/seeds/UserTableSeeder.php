<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin PPDB',
            'email' => 'adminppdb@smkbatik2ska.sch.id',
            'password' => bcrypt('adminppdb')
        ]);
    }
}
