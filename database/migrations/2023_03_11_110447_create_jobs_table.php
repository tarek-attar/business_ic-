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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title', 100);
            $table->text('description');
            $table->integer('price_min');
            $table->integer('price_max');
            $table->string('categories', 50);
            $table->integer('delivery_time');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
