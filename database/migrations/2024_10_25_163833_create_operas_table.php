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
        Schema::create('operas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author')->default('unknown');
            $table->integer('year');
            $table->text('description');
            $table->string('category');
            $table->string('period');
            $table->string('pic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operas');
    }
};
