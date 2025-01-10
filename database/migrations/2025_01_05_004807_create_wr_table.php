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
        // Membuat tabel stocks
        Schema::create('stocks', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('stock_code')->unique(); // Kode stock, bisa disesuaikan
            $table->string('item_name'); // Nama item
            $table->timestamps(); // Kolom created_at dan updated_at
        });

        // Membuat tabel wr
        Schema::create('wr', function (Blueprint $table) {
            $table->id();
            $table->string('dstrc_ori');
            $table->date('creation_date');
            $table->date('authsd_date');
            $table->string('wo_desc');
            $table->date('acuan_plan_service');
            $table->string('componen_desc');
            $table->string('egi');
            $table->string('egi_eng');
            $table->string('equip_no');
            $table->string('plant_process');
            $table->string('plant_activity');
            $table->string('wr_no');
            $table->integer('wr_item');
            $table->timestamps();

            // Menambahkan kolom stock_id sebagai foreign key
            $table->unsignedBigInteger('stock_id')->nullable(); // kolom untuk merujuk ke stock

            // Menambahkan constraint foreign key
            $table->foreign('stock_id')
                ->references('id')
                ->on('stocks')
                ->onDelete('set null'); // Jika stok dihapus, set stock_id menjadi null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel wr
        Schema::dropIfExists('wr');

        // Menghapus tabel stocks
        Schema::dropIfExists('stocks');
    }
};
