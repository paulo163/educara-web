<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participa', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sala_id')->unsigned();
            $table->primary(['user_id', 'sala_id']);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sala_id')->references('id')->on('salas');

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
        Schema::dropIfExists('participa');
    }
}
