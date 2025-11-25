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
        Schema::create('profile_pictures',function (Blueprint $table){
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->string('file_path');
            $table->boolean('is_verified')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop('profile_pictures');
    }
};
