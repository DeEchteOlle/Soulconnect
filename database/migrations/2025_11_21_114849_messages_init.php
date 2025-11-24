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
        Schema::create('messages',function(Blueprint $table ){
            $table->id('MessageID');
            $table->foreignId('SenderID')
            ->constrained('users');
            $table->string('Content');
            $table->boolean('IsRead');
            $table->foreignId('ConversationID')
            ->constrained('Conversations')
            ->cascadeOnDelete();
            $table->datetime('SentAt');
            $table->boolean('IsDeleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
