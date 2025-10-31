<?php

namespace App\Http\Controllers;

use App\Models\CostCalculator;
use Illuminate\Http\Request;

class CostCalculatorController extends Controller
{
    public function calculate(Request $request)
    {


        $costCalculator = CostCalculator::create([
            'business_type' => $request->input('business_type'),
             'company_reason' => $request->input('company_reason'),
             'company_owners' => $request->input('company_owners'),
             'visas_required' => $request->input('visas_required'),
             'office_type' => $request->input('office_type'),
             'start_date' => $request->input('start_date'),
             'jurisdiction' => $request->input('jurisdiction'),
             'living_in_uae' => $request->input('living_in_uae') == 'yes' ? true : false,
             'dependents_visas_needed' => $request->input('dependents_visas_needed') == 'yes' ? true : false,
             'nationality'=>$request->input('nationality'),
             'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'phone'=> $request->input('country_code').$request->input('phone'),

            ]
        );
        return redirect('/cost_calculator')->with('success', 'Your cost calculation request has been submitted successfully!');
    }

}
