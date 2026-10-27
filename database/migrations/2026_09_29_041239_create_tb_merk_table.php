<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_merk', function (Blueprint $table) {

            $table->id('id_merk');

            $table->unsignedBigInteger('id_tenant');

            $table->string('nama_merk');

            $table->text('keterangan')->nullable();

            $table->timestamps();

            $table->foreign('id_tenant')
                  ->references('id_tenant')
                  ->on('tb_tenant')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_merek');
    }
};