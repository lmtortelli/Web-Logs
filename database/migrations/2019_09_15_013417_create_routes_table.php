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
            $table->string('id');
            $table->primary('id');
            $table->string('id_service');
            $table->string('hosts');
            $table->string('methods');
            $table->string('paths');
            $table->boolean('preserve_host');
            $table->boolean('strip_path');
            $table->string('protocols');
            $table->smallInteger('regex_priority');
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
        Schema::dropIfExists('routes');
    }
}
