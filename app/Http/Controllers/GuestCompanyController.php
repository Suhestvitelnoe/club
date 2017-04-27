<?php

namespace App\Http\Controllers;

use App\Company;
use App\Service;
use App\Feedback;

class GuestCompanyController extends Controller
{
    public function getIndex() {
    	$companies = Company::where('showhide', 'show')->paginate(15);
    	return view('unAuth.guest_company')->with('companies', $companies);
    }

    public function getOnecompany($id) {
    	$company = Company::where('id', $id)->first();
        $feedbacks = Feedback::where('company_id', $id)->paginate(15);
         $services = Service::where('company_id', $id)->limit(5)->get();
 		return view('unAuth.guest_one_company')->with('company', $company)->with('feedbacks', $feedbacks)->with('services', $services);
    	
    }
}
