<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTulajdonosok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tulajdonosok', function (Blueprint $table) {
            $table->id("t_id");
            $table->string("tulajdonos_neve",50);
            $table->date("tulajdonjog_kezdete");
            $table->date("tulajdonjog_vege");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tulajdonosok');
    }
}
