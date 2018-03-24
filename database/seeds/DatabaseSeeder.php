<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Administrator'
        ]);
        DB::table('roles')->insert([
            'role' => 'Author'
        ]);
        DB::table('roles')->insert([
            'role' => 'Subscriber'
        ]);

    }
}
