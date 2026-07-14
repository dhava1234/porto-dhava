<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Cek apakah kolom sudah ada sebelum menambahkannya
            if (!Schema::hasColumn('projects', 'image')) {
                $table->string('image')->nullable()->after('description');
            }
            if (!Schema::hasColumn('projects', 'image_2')) {
                $table->string('image_2')->nullable()->after('image');
            }
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['image', 'image_2']);
        });
    }
};