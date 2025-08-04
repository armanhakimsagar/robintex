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
        Schema::create('why_choose_us_reasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('why_choose_us_id')->nullable();
            $table->string('title');
            $table->string('short_description');
            $table->longText('long_description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        
            $table->foreign('why_choose_us_id')->references('id')->on('why_choose_us')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('why_choose_us_reasons');
    }
};
