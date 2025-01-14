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
        Schema::create('stockcode', function (Blueprint $table) {
            $table->id(); // ID untuk primary key
            $table->string('stock_code')->unique(); // Kolom stock_code yang unik
            $table->string('price_code')->nullable(); // Kolom price_code (opsional)
            $table->string('item_name'); // Kolom item_name
            $table->string('class')->nullable(); // Kolom class (opsional)
            $table->string('current_class')->nullable(); // Kolom current_class (opsional)
            $table->string('mnemonic_current')->nullable(); // Kolom mnemonic_current (opsional)
            $table->string('pn_current')->nullable(); // Kolom pn_current (opsional)
            $table->string('pn_global')->nullable(); // Kolom pn_global (opsional)
            $table->string('wh')->nullable(); // Kolom wh (opsional)
            $table->string('uoi')->nullable(); // Kolom uoi (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockcode');
    }
};
