<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActivityStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activityStatus', function (Blueprint $table){
            $table->tinyInteger('activity_status')->primary();
            $table->bigInteger('activity_id');
            $table->string('activity_id');

            $table->foreign('activity_id')->references('activity_id')->on('activities');
        });
        Schema::table('activityDetail',function (Blueprint $table){
            $table->foreign('activity_status')->references('activity_status')->on('activityStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
