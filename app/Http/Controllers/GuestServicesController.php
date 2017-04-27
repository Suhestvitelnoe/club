<?php

namespace App\Http\Controllers;

use App\Service;
use App\Company;

class GuestServicesController extends Controller
{
   
	public function getIndex() {
		$services = Service::where('showhide', 'show')->paginate(15);
		
		return view('unAuth.guest_services')->with('services', $services);
    }

    public function getCompanyservices($company_id) {
        $company = Company::where('id', $company_id)->first();
      
        $company_services = Service::where('company_id', $company_id)->paginate(25);
       
        return view('unAuth.guest_company_services')->with('company_services', $company_services)->with('company', $company);
    }

    public function getOneservice($id) {
		$service = Service::where('id', $id)->first();
		return view('unAuth.guest_one_service')->with('service', $service);
	}
}
