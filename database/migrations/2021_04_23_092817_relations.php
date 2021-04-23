<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities',function (Blueprint $table){
            $table->foreign('activity_id')->references('activity_id')->on('activityDetail');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('activityDetail',function (Blueprint $table){
            $table->foreign('activity_createdBy')->references('id')->on('users');
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
