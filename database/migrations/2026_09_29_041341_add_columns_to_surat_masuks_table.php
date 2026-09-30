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
       Schema::table('surat_masuks', function (Blueprint $table) {
            $table->string('nomor')->after('id');
            $table->date('tanggal')->after('nomor');
            $table->string('perihal')->after('tanggal');
            $table->string('sumber')->after('perihal');
            $table->string('berkas')->nullable()->after('sumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_masuks', function (Blueprint $table) {
            $table->dropColumn(['nomor', 'tanggal', 'perihal', 'sumber', 'berkas']);
        });
    }
};
