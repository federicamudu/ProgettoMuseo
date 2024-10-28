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
        Schema::table('operas', function (Blueprint $table) {
            $table->unsignedBigInteger('museum_id')->nullable()->after('id');
            $table->foreign('museum_id')->references('id')->on('museums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('operas', function (Blueprint $table) {
            $table->dropColumn('museum_id');
            $table->dropForeign(['museum_id']);
        });
    }
};
