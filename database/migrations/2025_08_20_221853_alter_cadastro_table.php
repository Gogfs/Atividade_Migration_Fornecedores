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
        Schema::table('cadastro', callback: function (Blueprint $table): void {
            $table->string('RazaoSocial')->nullable()->after('CNPJ');
            $table->string('NomeFantasia')->nullable()->after('RazaoSocial');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('cadastro', callback: function (Blueprint $table): void {
            $table->dropColumn(['RazaoSocial', 'NomeFantasia']);
        });
    }
};
