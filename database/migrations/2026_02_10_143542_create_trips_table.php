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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departure_city_id')->constrained('cities');
            $table->foreignId('arrival_city_id')->constrained('cities');
            $table->foreignId('taxi_id')->constrained('taxis');
            $table->foreignId('recurrence_id')->nullable()->constrained('recurrences');
            $table->dateTime('departure_datetime');
            $table->decimal('base_price', 10, 2);
            $table->enum('status', ['waiting', 'ongoing', 'completed', 'cancelled'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
