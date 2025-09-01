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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('clinic')->nullable();
            $table->string('dentist_name')->nullable();
            $table->string('visit_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('visit_type')->nullable();
            $table->string('visit_purpose')->nullable();
            $table->string('meeting_location')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', [
            'Scheduled',
            'Rescheduled',
            'In Progress',
            'Completed'
          ])->default('Scheduled');    
           $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
