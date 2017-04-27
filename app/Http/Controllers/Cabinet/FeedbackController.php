<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Feedback;
use App\Company;
use Request;
use Input;
use Image;
use Auth;

class FeedbackController extends Controller
{
    public function getCompanyfeedback($company_id) {
    	$feedbacks = Feedback::where('company_id', $company_id)->get();
    	dd($feedback);
    	return view('company.one_company')->with('feedbacks', $feedbacks);
    }

    public function getAllfeedback ($id) {
    	$company = Company::where('id', $id)->first();
    	$feedbacks = Feedback::where('company_id', $id)->get();
    	return view('company.all_feedback')->with('feedbacks', $feedbacks)->with('company', $company);
    }

    public function postNewfeedback(Requests\FeedbackRequest $request, $company_id) {
    	$request['user_id'] = Auth::user()->id;
    	$request['company_id'] = $company_id;
    	Feedback::create($request->all());
    	return redirect()->back();
    }

    public function getDelete($id) {
    	Feedback::find($id)->delete();
    	return redirect()->back();
    }

    public function getEdit($id) {
    	$feedback = Feedback::where('id', $id)->first();
    	return view('company.edit_feedback')->with('feedback', $feedback);
    }

    public function postEdit(Requests\FeedbackRequest $request, $id) {
    	$company = Feedback::where('id', $id)->first();
    	Feedback::find($id)->update($request->all());
    	return redirect('company/onecompany/'.$company->company_id);
    }
}
