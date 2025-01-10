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
            $table->string('class');
            $table->string('current_class');
            $table->string('mnemonic_current');
            $table->string('pn_current');
            $table->string('pn_global');
            $table->string('wh');
            $table->string('uoi');
            $table->string('note_ut');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wr', function (Blueprint $table) {
            //
        });
    }
};
