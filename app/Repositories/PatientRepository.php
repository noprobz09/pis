<?php

namespace App\Repositories;

use App\Repositories\Traits\CommonRepoMethodTrait;
use App\Patient;
use DB;

Class PatientRepository {

	use CommonRepoMethodTrait;

	public function __construct() {
		$this->model = new Patient;
	}


	public function store(array $postData) {

		$data = [
			'fname' 	=> $postData['first_name'],
			'lname' 	=> $postData['last_name'],
			'mname' 	=> $postData['middle_name'],
			'suffix' 	=> $postData['suffix_name'],
			'street' 	=> $postData['street'],
			'brgy' 		=> $postData['barangay'],
			'town' 		=> $postData['town_city'],
			'province'	=> $postData['province'],
			'dob' 		=> $postData['dob'],
			'age' 		=> $postData['age'],
			'sex' 		=> $postData['sex'],
			'civil_status' => $postData['civil_status'],
			'nationality' => $postData['nationality'],
			'religion' 	=> $postData['religion'],
			'handednes' => $postData['handednes'],
			'educ' 		=> $postData['education'],
			'work' 		=> $postData['employment'],
			'ref_physician' => $postData['referring_physician'],
			'med_diagnosis' => $postData['medical_diagnosis'],
			'ref_reasons' 	=> $postData['reasons_for_referral'],
			'date_evaluation' => $postData['date_initial_evaluation'],
			'informants_reliability' => $postData['informants_reliability'],
			'contact_no' => $postData['contact_number'],
		];

		return $this->model->create($data);
	}

	public function update(array $data)
	{
		$data = [
			'fname' 	=> $postData['first_name'],
			'lname' 	=> $postData['last_name'],
			'mname' 	=> $postData['middle_name'],
			'suffix' 	=> $postData['suffix_name'],
			'street' 	=> $postData['street'],
			'brgy' 		=> $postData['barangay'],
			'town' 		=> $postData['town_city'],
			'province'	=> $postData['province'],
			'dob' 		=> $postData['dob'],
			'age' 		=> $postData['age'],
			'sex' 		=> $postData['sex'],
			'civil_status' => $postData['civil_status'],
			'nationality' => $postData['nationality'],
			'religion' 	=> $postData['religion'],
			'handednes' => $postData['handednes'],
			'educ' 		=> $postData['education'],
			'work' 		=> $postData['employment'],
			'ref_physician' => $postData['referring_physician'],
			'med_diagnosis' => $postData['medical_diagnosis'],
			'ref_reasons' 	=> $postData['reasons_for_referral'],
			'date_evaluation' => $postData['date_initial_evaluation'],
			'informants_reliability' => $postData['informants_reliability'],
			'contact_no' => $postData['contact_number'],
			// 'home_situation' => $postData['home_situation'],
			// 'general_health_status' => $postData['general_health_status'],
			// 'social_health_habits' => $postData['social_health_habits'],
			// 'hpi_medications' => $postData['hpi_medications'],
			// 'ancillary_service' => $postData['ancillary_service'],
			// 'laboratory_results' => $postData['laboratory_results'],			
			// 'activities' => $postData['activities'],
			// 'family_history' => $postData['family_history'],
			// 'medical_surgical_history' => $postData['medical_surgical_history'],
			// 'inspection' => $postData['inspection'],
			// 'vital_signs' => $postData['vital_signs'],
			// 'numerical_scale_for_grading_pulse_quality' => $postData['numerical_scale_for_grading_pulse_quality'],
			// 'findings' => $postData['findings'],
			// 'communication_status' => $postData['communication_status'],
			// 'cranial_nerve_testing' => $postData['cranial_nerve_testing'],
			// 'superficial_sensations' => $postData['superficial_sensations'],
			// 'deep_sensations' => $postData['deep_sensations'],
			// 'cortical_sensations' => $postData['cortical_sensations'],
			// 'general_findings' => $postData['general_findings'],
			// 'significance' => $postData['significance'],
			// 'intern_name' => $postData['intern_name'],
			// 'clinical_instructor' => $postData['clinical_instructor'],
		];

		return $this->model->where('id', $data['id'])->update($data);
	}



}