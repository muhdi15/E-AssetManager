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
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aset');
            $table->enum('jenis_aset',['elektronik', 'furniture', 'peralatan_kantor', 'lainnya']);
            $table->enum('kondisi', ['baik', 'rusak_ringan', 'rusak_berat', 'hilang']);
            $table->string('lokasi');
            $table->string('tambahkan_oleh')->nullable();
            $table->string('di_perbarui_oleh')->nullable();
            $table->timestamp('tanggal_penambahan')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_asset_');
    }
};
