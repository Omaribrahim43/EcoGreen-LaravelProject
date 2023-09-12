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
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->float('budget')->nullable();
            $table->date('start_day')->nullable();
            $table->date('end_day')->nullable();
            $table->boolean('status')->default('1');
            $table->string('tree_type')->nullable();
            $table->string('fertilizer')->nullable();
            $table->string('equipments')->nullable();
            $table->unsignedBigInteger('user_id'); // Remove the foreignId declaration here
            $table->unsignedBigInteger('category_id');
            $table->string('volunteering_days')->nullable();
            $table->time('volunteering_hours_start')->nullable();
            $table->time('volunteering_hours_end')->nullable();
            $table->integer('volunteering_number')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');


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
