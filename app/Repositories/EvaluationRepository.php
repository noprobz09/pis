<?php

namespace App\Repositories;

use App\Repositories\Traits\CommonRepoMethodTrait;
use App\Evaluation;
use DB;

Class EvaluationRepository {

	use CommonRepoMethodTrait;

	public function __construct() {
		$this->model = new Evaluation;
	}


	public function store(array $postData) {

		$data = [
			'first_evaluation' 		=> $postData['first_evaluation'],
			'second_evaluation' 	=> $postData['second_evaluation'],			
		];
		
		return $this->model->create($data);
	}

	public function update(array $data)
	{
		$data = [
			'first_evaluation' 		=> $postData['first_evaluation'],
			'second_evaluation' 	=> $postData['second_evaluation'],	
		];

		return $this->model->where('patient_id', $data['patient_id'])->update($data);
	}


	public function getEvaluation(int $type, int $id)
	{
		$select = ($type == 1)	?	'first_evaluation'	:	'second_evaluation';
		return $this->model->select($select)->where('patient_id', $id)->first();
	}



}