<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 

        Schema::create('facturas', function (Blueprint $table) {
           
        $table->bigIncrements('id');
        $table->unsignedBigInteger('id_cliente');
        $table->time('fecha');
        

       $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete("cascade");
       
      /* $table->foreignid('id_cliente')
             ->nullable()
             ->constrained('clientes')
             ->cascadeOnUpdate()
             ->nullOnDelete();*/
        });
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
