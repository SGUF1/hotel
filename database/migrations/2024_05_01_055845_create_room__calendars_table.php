<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('room__calendars', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('rooms')->onDelete('cascade');
            $table->timestamp('start_date')->nullable(false);
            $table->timestamp('finish_date')->nullable(false);
            $table->unsignedBigInteger('id_status')->nullable();
            $table->foreign('id_status')->references('id')->on('statuses');
            $table->boolean('payed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room__calendars');
    }
};
