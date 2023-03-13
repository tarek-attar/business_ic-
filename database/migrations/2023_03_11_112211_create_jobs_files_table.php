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
        Schema::create('jobs_files', function (Blueprint $table) {
            $table->id('file_id');
            $table->unsignedBigInteger('job_id');
            $table->string('file_name', 255);
            $table->timestamps();

            $table->foreign('job_id')->references('job_id')->on('Jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_files');
    }
};
