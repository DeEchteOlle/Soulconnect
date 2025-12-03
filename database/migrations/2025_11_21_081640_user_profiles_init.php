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
        Schema::create('user_profiles',function (Blueprint $table){
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('profile_pictures_id')
            ->constrained('profile_pictures')
            ->cascadeOnDelete();
            $table->string('one_liner');
            $table->string('relation_values');
            $table->string('partner_qualities');
            $table->string('gender');
            $table->string('gender_preference');
            $table->date('date_of_birth');
            $table->string('zipcode');
            $table->string('relation_type')->default('relatie');
            $table->boolean('has_pets');
            $table->string('alcohol_usage')->default('dagelijks');
            $table->string('has_kids')->default('nee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_profiles');
    }
};
