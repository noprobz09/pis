<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use App\Repositories\PatientRepository;


Class PatientController extends Controller
{

    public function __construct(Request $request) {
        $this->repository = new PatientRepository;
        $this->request = $request;
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.patient.index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add()
    {
        return view('pages.patient.form');
    }


    public function lists()
    {
        return view('pages.patient.lists');
    }


    public function submit() {

        
        
        \DB::beginTransaction();

        try{

            //do validation here


            $store = $this->repository->store($this->request->all());
            if (!$store) {
                return Response()->json(ResponseHelper::$SERVER_ERROR);
            }

            
            \DB::commit();
            return Response()->json(ResponseHelper::addSuccess($store));

        } catch(\Exception $e) {
            \DB::rollBack();
            \Log::error($e);
        }
    
    }


    public function view() {
        return view('pages.patient.view');
    }
}
