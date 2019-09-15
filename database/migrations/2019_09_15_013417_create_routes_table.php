<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idLog');
            $table->string('id_service');
            $table->string('host');
            $table->string('idRoute');
            $table->set('methods', ['GET','POST','PUT','DELETE','PATCH','OPTIONS','HEAD']);
            $table->string('paths');
            $table->boolean('preserve_host');
            $table->boolean('strip_path');
            $table->string('protocols');
            $table->smallInteger('regex_priority');
            $table->timestamps();
            $table->foreign('idLog')->references('id')->on('logs');
            $table->foreign('id_service')->references('id_service')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
