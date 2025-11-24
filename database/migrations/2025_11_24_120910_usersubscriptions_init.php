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
        schema::create('user_subscriptions',function (Blueprint $table){
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('subscription_plans_id')
            ->constrained('subscription_plans')
            ->cascadeOnDelete();
            $table->string('status');
            $table->dateTime('started_at');
            $table->dateTime('ends_at');
            $table->dateTime('renewed_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('user_subscriptions');
    }
};
