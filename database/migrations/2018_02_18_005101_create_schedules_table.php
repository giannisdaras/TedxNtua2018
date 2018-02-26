<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('visible')->default(false);
            $table->char('hour', 5);
            $table->text('img_src');
            $table->text('type');
            $table->unsignedInteger('speaker_id')->nullable();
            $table->json('event_title');
            $table->json('event_prev');
            $table->json('subtitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
