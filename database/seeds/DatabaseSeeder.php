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
        DB::table('role')->insert([
            'role' => 'Administrator'
        ]);
        DB::table('role')->insert([
            'role' => 'Author'
        ]);
        DB::table('role')->insert([
            'role' => 'Subscriber'
        ]);

    }
}
