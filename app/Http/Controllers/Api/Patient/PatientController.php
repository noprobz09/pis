<?php

namespace App\Http\Controllers\Api\Patient;

use App\Http\Controllers\Controller;
use App\Repositories\PatientRepository;

use App\Helpers\AppHelper;
use App\Helpers\ResponseHelper;
use App\Helpers\ValidatorHelper;
use App\Rules\Patient\PatientRule;
use Illuminate\Http\Request;


Class PatientController extends Controller
{

    public function __construct(Request $request) {
        $this->repository = new PatientRepository;
        $this->validator = new ValidatorHelper;
        $this->request = $request;
    }


    public function get()
    {
        try {

            $patients = $this->repository->get();

            if ($patients->count() > 0) {

                return ResponseHelper::getArrayResponse(
                    true, 
                    'Fetching Patients lists.',
                    ['patients' => $patients]
                );
            }

            abort(200, 'Server Error');

        } catch ( \Exception $e ) {

            return ResponseHelper::failed($e->getMessage());
        }
    }
    
    
    public function create()
    {

        try {

            \DB::beginTransaction();

            $this->validator->validate($this->request->all(), PatientRule::$PATIENT_ADD);

            $store = $this->repository->store($this->request->all());

            if ($store) {
                \DB::commit();
                return ResponseHelper::getArrayResponse(true, 'Successfully saved.');
            }

            abort(200, 'Server Error');

        } catch ( \Exception $e ) {

            return ResponseHelper::failed($e->getMessage());
        }
       
    }


    public function profile(int $id) 
    {
        try {

            //get patient info
            $patient = $this->repository->find($id);

            return $patient;

        } catch ( \Exception $e ) {

            return ResponseHelper::failed($e->getMessage());
        }
    }


    public function update()
    {
        try {

            $data = $this->request->all();

            $data['first_evaluation'] = !empty($data['firstEvaluation'])    ?   json_encode($data['firstEvaluation'], JSON_FORCE_OBJECT)    :   '';
            $data['second_evaluation'] = !empty($data['secondEvaluation'])    ?   json_encode($data['secondEvaluation'], JSON_FORCE_OBJECT)    :   '';

            $evaluation = (new \App\Repositories\EvaluationRepository)->updateOrCreate(['patient_id' => $data['patient_id']], $data);

            if (!$evaluation) {
                return ['result' => false, 'message' => 'Error on updating Patient Evaluation.'];
            }

            return ['result' => true, 'message' => 'Successfully updating Patient Evaluation.'];

        } catch ( \Exception $e ) {

            return ResponseHelper::failed($e->getMessage());
        }        
       
    }


    public function getEvaluation(int $type, int $id)
    {
        try {

            $evaluation = (new \App\Repositories\EvaluationRepository)->getEvaluation($type, $id);
            
            return $evaluation;

        } catch ( \Exception $e ) {

            return ResponseHelper::failed($e->getMessage());
        }
    }

}
