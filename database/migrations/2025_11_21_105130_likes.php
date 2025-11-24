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
            $table->id('LikeID');
            $table->foreignId('UserID_sender')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('UserID_receiver')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->timestamp('LikedAt');
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
