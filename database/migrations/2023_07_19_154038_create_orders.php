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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_nhanvien_id');
            $table->tinyInteger('status');
            $table->string('address');
            $table->integer('phone');
            $table->decimal('total_pay',10,0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_nhanvien_id')->references('id')->on('admin_nhanvien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
