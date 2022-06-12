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
        Schema::create('detalles', function (Blueprint $table) {
            
        $table->bigIncrements('id');
        $table->string('precio');
        $table->string('cantidad');

        /*  $table->foreign('num_facturas')->references('id')->on('facturas')->onDelete("cascade"); 
        
        $table->unsignedInteger('num_facturas');
        $table->unsignedInteger('id_producto');
        
        $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
        */

       $table->foreignid('num_facturas')
             ->nullable()
             ->constrained('facturas')
             ->cascadeOnUpdate()
             ->nullOnDelete();

             $table->foreignid('id_productos')
             ->nullable()
             ->constrained('productos')
             ->cascadeOnUpdate()
             ->nullOnDelete();

        
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
