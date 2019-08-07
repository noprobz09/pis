<?php 

namespace App\Rules\Patient;

Class PatientRule {

    public static $PATIENT_ADD = [
        'first_name' => 'required',
        'last_name' => 'required',
        'middle_name' => 'required',
        'suffix_name' => 'required',
        'barangay' => 'required',
        'town_city' => 'required',
        'province' => 'required',
        'dob' => 'required',
        'age' => 'required',
        'sex' => 'required',
        'civil_status' => 'required',
        'nationality' => 'required',
        'handednes' => 'required',
        'education' => 'required',
        'employment' => 'required',
        'referring_physician' => 'required',
        'medical_diagnosis' => 'required',
        'reasons_for_referral' => 'required',
        'date_initial_evaluation' => 'required',
        'informants_reliability' => 'required',
        'contact_number' => 'required',
    ];

}