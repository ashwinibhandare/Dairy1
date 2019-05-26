<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCattle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattle', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->float('price');
            $table->date('date_of_buying');
            $table->enum('cattle_type', ['cow', 'buffalo']);
            $table->enum('cattle_bread', ['hf','banni','murra','gir']);
            $table->integer('lactation_during_buying');
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
        Schema::dropIfExists('cattle');
    }
}
