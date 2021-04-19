<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActivityDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activityDetail', function (Blueprint $table){
            $table->bigInteger('activity_id')->primary();
            $table->bigInteger('activity_status');
            $table->string('activity_name');
            $table->dateTime('activity_start_date');
            $table->dateTime('activity_end_date');
            $table->boolean('activity_view');
            $table->string('activity_description');

            $table->foreign('activity_id')->references('activity_id')->on('activities');


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
