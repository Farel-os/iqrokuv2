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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_user_id')->constrained('users')->cascadeOnDelete()->index();

            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');

            $table->string('level')->nullable();

            $table->boolean('tpalama')->default(false);

            $table->boolean('pendampingan')->default(false);

            $table->string('saran')->default("we dont have any suggestions");

            $table->string('status')->default('pending_payment');
            $table->string('progress_iqro')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
