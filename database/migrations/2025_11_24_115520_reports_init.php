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
        schema::create('reports', function (Blueprint $table){
            $table->id('ReportID');
            $table->foreignId('ReportedUserID')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->string('Reason');
            $table->foreignId('ReporterID')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->dateTime('ReportedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('reports');
    }
};
