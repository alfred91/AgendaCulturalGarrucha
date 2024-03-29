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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('date');
            $table->time('time');
            $table->text('description');
            $table->string('city');
            $table->string('address');
            $table->enum('status', ['created', 'cancelled', 'finished']);
            $table->unsignedInteger('max_capacity');
            $table->enum('type', ['online', 'presencial']);
            $table->unsignedInteger('max_tickets_per_person');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
