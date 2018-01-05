<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cidade', 50);
            $table->string('logradouro', 70);
            $table->string('bairro', 72);
            $table->string('cep', 9);
            $table->string('tp_logradouro', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt');
    }
}
