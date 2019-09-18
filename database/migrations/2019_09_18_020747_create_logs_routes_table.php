<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idLog');
            $table->string('idRoute');
            $table->foreign('idLog')->references('id')->on('logs');
            $table->foreign('idRoute')->references('id')->on('routes');
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
        Schema::dropIfExists('logs_routes');
    }
}
