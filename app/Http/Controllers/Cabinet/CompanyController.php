<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Company;
use App\Feedback;
use App\Service;
use App\ServicesModel;
use Request;
use Input;
use Image;
use Auth;

class CompanyController extends Controller
{
    public function getIndex() {
    	$companies = Company::where('user_id', Auth::user()->id)->get();
    	return view('company.main_company')->with('companies', $companies);
    }

    public function postNewcompany(Requests\CompanyRequest $request) {
    	$request['user_id'] = Auth::user()->id;
    	$logos = \App::make('\App\libs\Imag')->url($_FILES['logotype']['tmp_name'], '/media/uploads/company/logo/'.Auth::user()->id.'/', Auth::user()->id.time());
       if($logos) {
        $request['logo'] = $logos;
       }
    	Company::Create($request->all());
    	return redirect()->back();
    }

    public function getOnecompany($id) {
        $company = Company::where('id', $id)->first();
        $feedbacks = Feedback::where('company_id', $id)->paginate(15);
         $services = Service::where('company_id', $id)->limit(5)->get();
        return view('company.one_company')->with('company', $company)->with('feedbacks', $feedbacks)->with('services', $services);
    }

    public function getItems() {
        return view('company.price');
    } 

    public function getCompanyservices($company_id) {
        $company = Company::where('id', $company_id)->first();
        $servicecategory = ServicesModel::where('showhide', 'show')->get();
        $company_services = Service::where('company_id', $company_id)->paginate(25);
       
        return view('company.all_company_service')->with('company_services', $company_services)
        ->with('servicecategory', $servicecategory)->with('company', $company);
    }

    public function postNewcompanyservice(Requests\ServicesRequest $request) {

        $request['user_id'] = Auth::user()->id;
        $preview = \App::make('\App\libs\Imag')->url($_FILES['pic']['tmp_name'], '/media/uploads/company/services/preview/'.Auth::user()->id.'/', Auth::user()->id."_".time());
       if($preview) {
        $request['picture'] = $preview;
       }
       Service::Create($request->all());
       return redirect()->back();
    }
}
