<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // qui creo la tabella con le sue colonne
        Schema::create('train', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 32)->nullable();
            $table->integer('train_number')->unique();
            $table->date('departures')->useCurrent();
            $table->date('arrivals')->useCurrent();
            $table->integer('price')->unsigned();
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
        // qui elimino le colonne che ho creato
        Schema::dropIfExists('train');
    }
};