<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('log_name')->nullable();
            $table->json('properties')->nullable();
            $table->uuid('batch_uuid')->nullable();
            $table->text('event');
            $table->string('subject_id');
            $table->string('subject_type');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('activity_log_batch', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('log_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_log');
        Schema::dropIfExists('activity_log_batch');
    }
};
