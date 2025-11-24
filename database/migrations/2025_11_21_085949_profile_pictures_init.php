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
            $table->id('ProfilePictureID');
            $table->foreignId('UserID')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();
            $table->string('FilePath');
            $table->boolean('IsVerified')->default('0');
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
