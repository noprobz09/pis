<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    
    protected $table = 'evaluations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'first_evaluation',
        'second_evaluation',
    ];

    
    public function getFirstEvaluationAttribute($firstEvaluation)
    {
        return json_decode($firstEvaluation);
    }


    public function getSecondEvaluationAttribute($secondEvaluation)
    {
        return json_decode($secondEvaluation);
    }

    
}
