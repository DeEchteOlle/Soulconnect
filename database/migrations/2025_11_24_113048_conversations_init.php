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
        schema::create('conversations',function (Blueprint $table){
            $table->id('ConversationID');
            $table->foreignId('UserID_1')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('UserID_2')
            ->constrained('users')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('conversations');
    }
};
