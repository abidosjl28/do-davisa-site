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
        Schema::create('facturadetalles', function (Blueprint $table) {
            $table->id();
            $table->string('CODIGO');
            $table->string('CODIGOSUB');
            $table->string('LOCAL');
            $table->string('CFMANIVEL');
            $table->string('CFMASERIE');
            $table->string('CFMANUMERO');
            $table->string('CFACLINEA');
            $table->string('CARTCODIGO');
            $table->string('CARTDESCRI')->nullable();;
            $table->string('CANTIDAD')->nullable();;
            $table->string('CUNICODIGO')->nullable();;
            $table->string('PLISMN')->nullable();;
            $table->string('PVTAMN')->nullable();;
            $table->string('BRUTMN');
            $table->string('NETOMN');
            $table->string('CCOTNUMERO');
           
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturadetalles');
    }
};
