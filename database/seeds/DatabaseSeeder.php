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
            'name' => 'Administrator'
        ]);
        DB::table('role')->insert([
            'name' => 'Author'
        ]);
        DB::table('role')->insert([
            'name' => 'Subscriber'
        ]);

    }
}
