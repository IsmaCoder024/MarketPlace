<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function create(Request $request) 
    {
    
        Patient::create([
            'sponsor_id' => $request->sponsor_id,
            'patient_name' => $request->patient_name,
            'date_of_birth' => $request->date_of_birth,
            'visit_type_id' => $request->visit_type_id,
            'type_of_check' => $request->type_of_check,
            'employee_id' => $request->employee_id,
            'pf3' => $request->pf3,
            'diceased' => $request->diceased,
            'refferal_status' => $request->refferal_status,
        ]);
  
        return response()->json([
            'message' => 'Patient record creted successfully',
            'check_in_date' => $request->check_in_date,
        ]);
    }
}
