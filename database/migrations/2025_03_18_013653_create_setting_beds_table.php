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
        Schema::create('setting_beds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->constrained()->onDelete('cascade'); // Menambahkan FK building
            $table->foreignId('room_id')->constrained()->onDelete('cascade'); // Menambahkan FK room
            $table->foreignId('bed_id')->constrained()->onDelete('cascade'); // Menambahkan FK bed
            $table->timestamps();
            $table->softDeletes(); // Menambahkan kolom deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_beds');
    }
};
