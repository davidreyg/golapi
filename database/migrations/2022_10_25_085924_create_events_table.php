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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('gol_id')->constrained();
            $table->foreignId('topic_id')->constrained();
            $table->string('name', 100);
            $table->string('banner', 100);
            $table->date('programmed_at');
            $table->char('status', 1)->default('P');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
