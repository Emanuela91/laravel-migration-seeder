<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // qui creo la tabella con le sue colonne
        Schema::create('travel', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('travel_number')->unique();
            $table->string('city', 64);
            $table->date('check_in')->useCurrent();
            $table->date('check_out')->useCurrent();
            $table->integer('person')->unsigned();
            $table->string('hotel', 32);
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
        //
    }
};