<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surat_keluars', function (Blueprint $table) {
            if (!Schema::hasColumn('surat_keluars', 'keterangan')) {
                $table->text('keterangan')->nullable();
            }
            if (!Schema::hasColumn('surat_keluars', 'berkas')) {
                $table->string('berkas')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('surat_keluars', function (Blueprint $table) {
            if (Schema::hasColumn('surat_keluars', 'keterangan')) {
                $table->dropColumn('keterangan');
            }
            if (Schema::hasColumn('surat_keluars', 'berkas')) {
                $table->dropColumn('berkas');
            }
        });
    }
};