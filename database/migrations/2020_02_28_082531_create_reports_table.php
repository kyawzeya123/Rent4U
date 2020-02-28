<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rent_id');
            $table->string('description');
            $table->string('fee');
            $table->unsignedBigInteger('driver_id');
            $table->timestamps();

            $table->foreign('rent_id')
            ->references('id')->on('rents')
            ->onDelete('cascade');

            $table->foreign('driver_id')
            ->references('id')->on('drivers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
