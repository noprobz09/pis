<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalanceTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('patient_id');
            $table->string('examiner');
            $table->text('functional_hand_reach_score');
            $table->text('time_and_go_test_score');
            $table->text('muscle_tone_assessment');
            $table->text('pathalogical_reflexes');
            $table->text('pulomonary_assessment');
            $table->text('f_leg_length_descripancy');
            $table->text('g_muscle_bulk_testing');
            $table->text('berg_balance_scale');
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
        Schema::dropIfExists('balance_tests');
    }
}
