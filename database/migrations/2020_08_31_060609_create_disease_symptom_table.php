<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseSymptomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_symptom', function (Blueprint $table) {
            $table->integer('disease_id')->unsigned();
            $table->integer('symptom_id')->unsigned();

            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_symptom');
    }
}