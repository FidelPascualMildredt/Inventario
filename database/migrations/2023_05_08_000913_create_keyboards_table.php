<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('model');
            $table->string('brand');
            $table->string('connection_type');
            $table->string('status');
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
        Schema::dropIfExists('keyboards');
    }
}
