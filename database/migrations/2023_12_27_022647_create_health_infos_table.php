<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthInfosTable extends Migration
{
    public function up()
    {
        Schema::create('health_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('rec_datetime');
            $table->double('bd_temp');
            $table->double('bd_weight');
            $table->integer('bp_up');
            $table->integer('bp_down');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_infos');
    }
}

