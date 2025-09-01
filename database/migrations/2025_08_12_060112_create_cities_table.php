<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('state_id');
            $table->string('name')->nullable();
            $table->string('sef_url')->nullable();
            $table->enum('type', ['normal', 'popular'])->default('normal');
            $table->string('publish_status')->default('yes');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
