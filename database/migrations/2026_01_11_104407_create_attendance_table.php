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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();

            $table->foreignId('child_id')->constrained('children')->cascadeOnDelete()->index();
            $table->date('date')->index();

            // status contoh: present, absent, sick, permission
            $table->string('status')->default('present');

            $table->timestamp('check_in_at')->nullable();
            $table->timestamp('check_out_at')->nullable();

            $table->string('note')->nullable();

            // siapa yang input (admin/ustadz/ortu)
            $table->foreignId('recorded_by_user_id')->nullable()
                ->constrained('users')->nullOnDelete()->index();

            $table->timestamps();

            $table->unique(['child_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
