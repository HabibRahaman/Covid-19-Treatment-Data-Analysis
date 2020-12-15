<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestingDiseaseSymptomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testing_disease_symptom', function (Blueprint $table) {
            $table->integer('disease_id')->unsigned();
            $table->integer('symptom_id')->unsigned();
            $table->integer('priority')->nullable();

            $table->foreign('disease_id')->references('id')->on('testing_diseases')->onDelete('cascade');
            $table->foreign('symptom_id')->references('id')->on('testing_symptoms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testing_disease_symptom');
    }
}
