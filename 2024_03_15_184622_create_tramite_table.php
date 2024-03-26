<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**1
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramite',function(Blueprint $tabl){
            $tabl->id();
            $tabl->string('nombre');
            $tabl->integer('expiration')->nullable();
            $tabl->double('monto');
            $tabl->string('id_area');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite');
    }
};
