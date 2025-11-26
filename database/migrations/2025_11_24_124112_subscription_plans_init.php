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
        schema::create('subscription_plans', function(Blueprint $table){
            $table->id();
            $table->decimal('price');
            $table->string('name');
            $table->dateTime('updated_at');
            $table->integer('duration_in_days');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('subscription_plans');
    }
};
