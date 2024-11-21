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
            $table->string('description');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->integer('max_seats');
            $table->integer('available_seats');
            $table->string('status');
            $table->unsignedBigInteger(column: 'admin_id')->nullable();

            $table->foreign(columns: 'admin_id')
            ->references('id')
            ->on(table: 'users')
            ->onDelete('set null')
            ->onUpdate('cascade');

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
