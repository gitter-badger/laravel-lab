<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepUnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep_unico', function (Blueprint $table) {
            $table->increments('Seq');
            $table->string('Nome', 50);
            $table->string('NomeSemAcento', 50);
            $table->string('cep', 9);
            $table->char('UF', 2);
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
        Schema::dropIfExists('cep_unico');
    }
}
