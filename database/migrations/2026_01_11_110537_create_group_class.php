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
        Schema::create('group_class', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('made_by');
            $table->foreignId('teacher')->constrained('users')->cascadeOnDelete()->index();
            $table->string('color')->default('#0000FF');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_class');
    }
};
