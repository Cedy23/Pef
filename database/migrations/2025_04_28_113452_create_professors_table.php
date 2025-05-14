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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du professeur
            $table->string('email')->unique(); // Email unique
            $table->string('password'); // Mot de passe
            $table->string('department')->nullable(); // Département (facultatif)
            $table->string('specialization')->nullable(); // Spécialisation (facultatif)
            $table->rememberToken(); // Token pour "Remember Me"
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
