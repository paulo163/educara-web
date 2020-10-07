<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetoSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objeto_sala', function (Blueprint $table) {
            $table->unsignedBigInteger('sala_id');
            $table->unsignedBigInteger('objeto_id');
            $table->string('codigo');
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('objeto_id')->references('id')->on('objetos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objeto_sala');
    }
}
