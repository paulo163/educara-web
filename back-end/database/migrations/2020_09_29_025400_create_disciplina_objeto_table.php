<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaObjetoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_objeto', function (Blueprint $table) {
            $table->unsignedBigInteger('objeto_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->foreign('objeto_id')->references('id')->on('objetos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
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
        Schema::dropIfExists('disciplina_objeto');
    }
}
