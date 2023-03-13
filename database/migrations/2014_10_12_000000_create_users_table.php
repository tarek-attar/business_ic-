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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 100);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);
            $table->rememberToken();
            $table->string('address', 100)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('job_title', 100);
            $table->string('rank', 25)->default('mustaqil');
            $table->string('image', 255);
            $table->string('id_image', 255)->nullable();
            $table->text('personal_description')->nullable();
            $table->integer('completed_projects')->default(0);
            $table->float('evaluation')->default(0.0);
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
        Schema::dropIfExists('users');
    }
};
