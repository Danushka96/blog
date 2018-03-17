<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModUsers2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->String('about')->default("I am a Blogger")->change();
            $table->String('pp')->default("default.jpg")->change();
            $table->String('fname')->default("FirstName")->change();
            $table->String('lname')->default("LastName")->change();
            $table->integer('role')->default(2)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
