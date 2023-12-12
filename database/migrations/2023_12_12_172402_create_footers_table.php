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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->nullable();
            $table->string('bg_pry_color')->nullable();
            $table->string('bg_pry_hov_color')->nullable();
            $table->string('bg_sec_color')->nullable();
            $table->string('bg_sec_hov_color')->nullable();
            $table->string('txt_pry_color')->nullable();
            $table->string('txt_pry_hov_color')->nullable();
            $table->string('txt_sec_color')->nullable();
            $table->string('txt_sec_hov_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
