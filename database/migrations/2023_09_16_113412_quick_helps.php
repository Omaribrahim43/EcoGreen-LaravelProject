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
        Schema::create('Quick_helps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('image')->nullable();
            $table->string('location');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();

            $table->float('budget')->nullable();
            $table->date('start_day')->nullable();
            $table->date('end_day')->nullable();
            $table->boolean('status')->default('1');

            $table->boolean('choosen_service1')->nullable();
            $table->boolean('choosen_service2')->nullable();
            $table->boolean('choosen_service3')->nullable();

            $table->string('tree_type1')->nullable();
            $table->string('tree_type_number1')->nullable();

            $table->string('tree_type2')->nullable();
            $table->string('tree_type_number2')->nullable();

            $table->string('fertilizer')->nullable();
            $table->string('fertilizer_Kg')->nullable();

            $table->string('equipments1')->nullable();
            $table->string('equipments2')->nullable();

            $table->unsignedBigInteger('user_id'); // Remove the foreignId declaration here
            $table->unsignedBigInteger('category_id1')->nullable();
            $table->unsignedBigInteger('category_id2')->nullable();
            $table->unsignedBigInteger('category_id3')->nullable();

            $table->string('volunteering_days')->nullable();
            $table->time('volunteering_hours_start')->nullable();
            $table->time('volunteering_hours_end')->nullable();
            $table->integer('volunteering_number')->nullable();
            
            // Uncomment these lines if you want to add foreign key constraints
            // Make sure that the referenced tables and columns exist in your database
            // 
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
        Schema::dropIfExists('Quick_helps');
    }
};

?>
