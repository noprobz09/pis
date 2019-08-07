<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosturalAnalysis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postural_analysis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('patient_id');
            $table->string('examiner');
            $table->string('weight');
            $table->text('anterior_view');
            $table->text('lateral_view');
            $table->text('posterior_view');
            $table->text('pertinent_medical_history');
            $table->text('pertinent_radiographic_findings');
            $table->text('descriptive_summary');
            $table->text('significance');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('patient_id')->references('id')->on('patients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postural_analysis');
    }
}
