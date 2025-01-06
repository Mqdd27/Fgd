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
        Schema::table('wr', function (Blueprint $table) {
            $table->string('wr_item')->change(); // Mengubah tipe kolom menjadi string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wr', function (Blueprint $table) {
            $table->integer('wr_item')->change(); // Mengembalikan tipe kolom menjadi integer
        });
    }
};
