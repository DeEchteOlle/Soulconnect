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
        schema::create('payment_history',function(Blueprint $table){
            $table->id();
            $table->foreignId('user_subscription_id')
            ->constrained('user_subscriptions');
            $table->foreignId('users_id')
            ->constrained('users');
            $table->decimal('price_paid');
            $table->dateTime('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('payment_history');
    }
};
