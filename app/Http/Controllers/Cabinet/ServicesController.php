<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ServicesModel;
use App\Company;
use App\Service;
use Input;
use Auth;

class ServicesController extends Controller
{
	public function getIndex() {
		$servicecategory = ServicesModel::where('showhide', 'show')->get();
		$services = Service::where('user_id', Auth::user()->id)->paginate(20);
		 $companies = Company::where('user_id', Auth::user()->id)->get();
    	return view('services.main_services')->with('services', $services)->with('servicecategory', $servicecategory)->with('companies', $companies);
}

	public function postNewservice(Requests\ServicesRequest $request) {
		$request['user_id'] = Auth::user()->id;
		$preview = \App::make('\App\libs\Imag')->url($_FILES['pic']['tmp_name'], '/media/uploads/services/preview/'.Auth::user()->id.'/', Auth::user()->id."_".time());
       if($preview) {
        $request['picture'] = $preview;
       }
       Service::Create($request->all());
       return redirect()->back();
	}

	public function getOneservice($id) {
		$service = Service::where('id', $id)->first();
		return view('services.one_service')->with('service', $service);
	}


}
