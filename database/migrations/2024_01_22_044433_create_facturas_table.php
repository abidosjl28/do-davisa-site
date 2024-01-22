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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('CODIGO');
            $table->string('LOCAL');
            $table->string('CFMANIVEL');
            $table->string('CFMASERIE');
            $table->string('CFMANUMERO');
            $table->string('PERIODO');
            $table->datetime('DFMAFECHA');
            $table->string('CCTECODIGO')->nullable();;
            $table->string('CCTENIT')->nullable();;
            $table->string('CCTENOMBRE')->nullable();;
            $table->string('CCTEDIREC')->nullable();;
            $table->string('CVENCODIGO')->nullable();;
            $table->string('NETOMN');
            $table->string('IGVMN');
            $table->string('TOTMN');
            $table->string('CFPCODIGO')->nullable();;
            $table->string('CUSUALT')->nullable();;
            $table->string('DFECALT')->nullable();;
            $table->string('DFECALT_HORA')->nullable();;
            $table->string('CUSUMOD')->nullable();;
            $table->string('DFECMOD')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
