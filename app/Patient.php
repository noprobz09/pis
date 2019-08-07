<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    
    protected $table = 'patients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'suffix',
        'street',
        'brgy',
        'town',
        'province',
        'dob',
        'age',
        'sex',
        'civil_status',
        'nationality',
        'religion',
        'handednes',
        'educ',
        'work',
        'ref_physician',
        'med_diagnosis',
        'ref_reasons',
        'date_evaluation',
        'informants_reliability',
        'contact_no',
        'home_situation',
        'general_health_status',
        'social_health_habits',
        'hpi_medications',
        'ancillary_service',
        'laboratory_results',
        'activities',
        'family_history',
        'medical_surgical_history',
        'inspection',
        'vital_signs',
        'numerical_scale_for_grading_pulse_quality',
        'findings',
        'mental_status',
        'communication_status',
        'cranial_nerve_testing',
        'superficial_sensations',
        'deep_sensations',
        'cortical_sensations',
        'general_findings',
        'significance',
        'intern_name',
        'clinical_instructor',
    ];


    public function evaluation()
    {
        return $this->hasOne(\App\Evaluation::class, 'patient_id', 'id');
    }

    
}
