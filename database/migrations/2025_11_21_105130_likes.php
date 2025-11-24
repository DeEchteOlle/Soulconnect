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
        schema::create('likes' ,function (Blueprint $table){
            $table->id();
            $table->foreignId('sender_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('receiver_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->timestamp('liked_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('likes');
    }
};
