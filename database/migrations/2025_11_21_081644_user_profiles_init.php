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
            $table->id('UserProfileID');
            $table->foreignId('UserID')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();
            $table->foreignId('ProfilePictureID')
            ->nullable()
            ->constrained('profile_pictures')
            ->nullOnDelete();
            $table->string('OneLiner');
            $table->string('RelationValues');
            $table->string('PartnerQualities');
            $table->string('Gender');
            $table->string('GenderPreference');
            $table->date('DateOfBirth');
            $table->string('Zipcode');
            $table->string('RelationType')->default('relatie');
            $table->boolean('HasPets');
            $table->string('AlcoholUsage')->default('dagelijks');
            $table->string('HasKids')->default('nee');
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
