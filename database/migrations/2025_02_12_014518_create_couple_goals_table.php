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
     
    Schema::create('couple_goals', function (Blueprint $table) {
        $table->id();
        $table->string('goal');
        $table->date('due_date')->nullable();  // Add due_date column
        $table->boolean('is_completed')->default(false);
        $table->timestamps();
    });
}

        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couple_goals');
    }
};
