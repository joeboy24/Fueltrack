<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('pump_id');
            $table->string('day');
            $table->string('opening1')->default(0);
            $table->string('opening2')->default(0);
            $table->string('closing1')->default(0);
            $table->string('closing2')->default(0);
            $table->string('sales')->default(0);
            $table->string('remarks')->nullable();
            $table->string('status')->default('active');
            $table->string('del')->default('no');
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
        Schema::dropIfExists('attendances');
    }
}
