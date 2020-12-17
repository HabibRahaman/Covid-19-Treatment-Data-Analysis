<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_report', function (Blueprint $table) {
            $table->integer('disease_id')->unsigned();
            $table->bigInteger('report_id')->unsigned();
            $table->decimal('probability', 8,2)->default('0');

            $table->foreign('disease_id')->references('id')->on('testing_diseases')->onDelete('cascade');
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
        Schema::dropIfExists('disease_report');
    }
}
