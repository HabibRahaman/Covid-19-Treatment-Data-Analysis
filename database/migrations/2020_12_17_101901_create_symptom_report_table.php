<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptom_report', function (Blueprint $table) {
            $table->integer('symptom_id')->unsigned();
            $table->bigInteger('report_id')->unsigned();

            $table->foreign('symptom_id')->references('id')->on('testing_symptoms')->onDelete('cascade');
            $table->foreign('report_id')->references('id')->on('test_reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symptom_report');
    }
}
