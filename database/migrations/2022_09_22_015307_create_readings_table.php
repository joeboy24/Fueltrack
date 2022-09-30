<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('day');
            $table->string('ps1close', 30)->default(0)->nullable();
            $table->string('ps1open', 30)->default(0)->nullable();
            $table->string('ps1diff', 30)->default(0)->nullable();
            $table->string('ps1profit', 30)->default(0)->nullable();
            $table->string('ps1sales', 30)->default(0)->nullable();

            $table->string('pd1close', 30)->default(0)->nullable();
            $table->string('pd1open', 30)->default(0)->nullable();
            $table->string('pd1diff', 30)->default(0)->nullable();
            $table->string('pd1profit', 30)->default(0)->nullable();
            $table->string('pd1sales', 30)->default(0)->nullable();


            $table->string('ps2close', 30)->default(0)->nullable();
            $table->string('ps2open', 30)->default(0)->nullable();
            $table->string('ps2diff', 30)->default(0)->nullable();
            $table->string('ps2profit', 30)->default(0)->nullable();
            $table->string('ps2sales', 30)->default(0)->nullable();

            $table->string('pd2close', 30)->default(0)->nullable();
            $table->string('pd2open', 30)->default(0)->nullable();
            $table->string('pd2diff', 30)->default(0)->nullable();
            $table->string('pd2profit', 30)->default(0)->nullable();
            $table->string('pd2sales', 30)->default(0)->nullable();


            $table->string('ps3close', 30)->default(0)->nullable();
            $table->string('ps3open', 30)->default(0)->nullable();
            $table->string('ps3diff', 30)->default(0)->nullable();
            $table->string('ps3profit', 30)->default(0)->nullable();
            $table->string('ps3sales', 30)->default(0)->nullable();

            $table->string('pd3close', 30)->default(0)->nullable();
            $table->string('pd3open', 30)->default(0)->nullable();
            $table->string('pd3diff', 30)->default(0)->nullable();
            $table->string('pd3profit', 30)->default(0)->nullable();
            $table->string('pd3sales', 30)->default(0)->nullable();


            $table->string('ps4close', 30)->default(0)->nullable();
            $table->string('ps4open', 30)->default(0)->nullable();
            $table->string('ps4diff', 30)->default(0)->nullable();
            $table->string('ps4profit', 30)->default(0)->nullable();
            $table->string('ps4sales', 30)->default(0)->nullable();

            $table->string('pd4close', 30)->default(0)->nullable();
            $table->string('pd4open', 30)->default(0)->nullable();
            $table->string('pd4diff', 30)->default(0)->nullable();
            $table->string('pd4profit', 30)->default(0)->nullable();
            $table->string('pd4sales', 30)->default(0)->nullable();


            $table->string('ps5close', 30)->default(0)->nullable();
            $table->string('ps5open', 30)->default(0)->nullable();
            $table->string('ps5diff', 30)->default(0)->nullable();
            $table->string('ps5profit', 30)->default(0)->nullable();
            $table->string('ps5sales', 30)->default(0)->nullable();

            $table->string('pd5close', 30)->default(0)->nullable();
            $table->string('pd5open', 30)->default(0)->nullable();
            $table->string('pd5diff', 30)->default(0)->nullable();
            $table->string('pd5profit', 30)->default(0)->nullable();
            $table->string('pd5sales', 30)->default(0)->nullable();

            
            $table->string('t1open', 30)->default(0)->nullable();
            $table->string('t2open', 30)->default(0)->nullable();
            $table->string('t3open', 30)->default(0)->nullable();
            $table->string('t4open', 30)->default(0)->nullable();
            $table->string('t5open', 30)->default(0)->nullable();

            $table->string('t1close', 30)->default(0)->nullable();
            $table->string('t2close', 30)->default(0)->nullable();
            $table->string('t3close', 30)->default(0)->nullable();
            $table->string('t4close', 30)->default(0)->nullable();
            $table->string('t5close', 30)->default(0)->nullable();

            
            $table->string('new_price', 30)->nullable();
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
        Schema::dropIfExists('readings');
    }
}
