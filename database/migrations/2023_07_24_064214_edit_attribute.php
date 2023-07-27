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
        Schema::table('attribute', function (Blueprint $table) {
            $table->unsignedBigInteger('attribute_type_id');
            $table->foreign('attribute_type_id')->references('id')->on('attribute_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attribute', function (Blueprint $table) {
            //
        });
    }
};
