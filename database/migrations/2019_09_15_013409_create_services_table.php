<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_service');
            $table->unsignedBigInteger('idLog');
            $table->string('host');
            $table->string('name');
            $table->string('path');
            $table->string('protocol');
            $table->string('port');
            $table->integer('read_timeout');
            $table->integer('connect_timeout');
            $table->integer('write_timeout');
            $table->integer('retries');
            $table->timestamps();
            $table->foreign('idLog')->references('id')->on('logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
