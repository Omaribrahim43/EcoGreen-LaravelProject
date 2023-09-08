<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image');
            $table->string('location');
            $table->string('description');
            $table->float('budget')->nullable();
            $table->date('start_day');
            $table->date('end_day');
            $table->boolean('status');
            $table->string('tree_type')->nullable();
            $table->string('fertilizer')->nullable();
            $table->string('equipments')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoty_id');
            $table->string('volunteering_days')->nullable();
            $table->time('volunteering_hours_start')->nullable();
            $table->time('volunteering_hours_end')->nullable();
            $table->integer('volunteering_number')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
