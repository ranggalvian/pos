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
        Schema::create('member', function (Blueprint $table) {
            $table ->increments('id_member');
            $table ->integer('kode_member')->unique();
            $table ->string('nama');
            $table ->string('alamat')->nullable();
            $table ->integer('telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $chema::dropifExitsts('member');
    }
};
