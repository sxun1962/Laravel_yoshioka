<?php


// database/migrations/xxxx_xx_xx_xxxxxx_create_health_info_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthInfoTable extends Migration
{
    public function up()
    {
        Schema::create('health_info', function (Blueprint $table) {
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
        Schema::dropIfExists('health_info');
    }
}



// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('health_info', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('health_info');
//     }
// };
