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
        Schema::create('job_portal', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('location');
            $table->string('title');
            $table->string('category');
            $table->string('jobd');
            $table->string('qf');
            $table->string('jobt');
            $table->string('gender');
            $table->integer('vacancy');
            $table->integer('salary');
            $table->string('ad');
            $table->string('joind');

            $table->rememberToken();
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
        Schema::dropIfExists('job_portal');
    }
};
