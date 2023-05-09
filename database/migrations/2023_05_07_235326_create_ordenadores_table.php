<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenadores', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number', 50)->unique();
            $table->string('model');
            $table->string('brand');
            $table->string('ram');
            $table->string('processor');
            $table->string('hard_disk');
            $table->string('network_connection');
            $table->unsignedBigInteger('equipments_id');
            $table->foreign('equipments_id')->references('id')->on('equipments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenadores');
    }
}
