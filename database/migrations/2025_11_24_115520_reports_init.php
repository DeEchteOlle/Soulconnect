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
        schema::create('reports', function (Blueprint $table){
            $table->id();
            $table->foreignId('reported_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->string('reason');
            $table->foreignId('reporter_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->dateTime('reported_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('reports');
    }
};
