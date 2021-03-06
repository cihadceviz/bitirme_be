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
            $table->bigIncrements('activity_id');
            $table->bigInteger('activity_status');
            $table->string('activity_name');
            $table->bigInteger('activity_createdBy');
            $table->dateTime('activity_start_date');
            $table->dateTime('activity_end_date');
            $table->json('activity_invited_user');
            $table->boolean('activity_view');
            $table->string('activity_description')->nullable();



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
