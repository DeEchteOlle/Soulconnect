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
        schema::create('blacklist',function(Blueprint $table){
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->cascadeOnDelete();
           $table->string('reason');
           $table->boolean('is_active'); 
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklist');
    }
};
