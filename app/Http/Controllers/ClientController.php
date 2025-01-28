<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientController extends Controller
{
    public function client_registration_step1_show()
    {
        return view('clients.register-step1');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'client_name' => 'required|string|max:255',
            'branch_name' => 'required|string|max:255',
            'client_code' => 'required|string|max:255',
            'client_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'father_spouse_name' => 'required|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Transgender',
            'marital_status' => 'required|string|in:Married,Unmarried,Other',
            'citizenship' => 'required|string|in:Indian,Other',
            'residential_status' => 'required|string',
            'occupation_type' => 'required|string',
            'residence_outside_india' => 'nullable|string',
            'code_of_jurisdiction' => 'required|string|max:255',
            'tax_identification_no' => 'nullable|string|max:255',
            'birth_city' => 'required|string|max:255',
            'birth_country' => 'required|string|max:255',
            'pass_number' => 'nullable|string|max:255',
            'voter_id' => 'nullable|string|max:255',
            'pan' => 'nullable|string|max:255',
            'license' => 'nullable|string|max:255',
            'aadhar' => 'nullable|string|max:255',
            'job_card' => 'nullable|string|max:255',
        ]);

        // Insert data into the database
        DB::table('client_register_details')->insert([
            'client_name' => $validatedData['client_name'],
            'branch_name' => $validatedData['branch_name'],
            'client_code' => $validatedData['client_code'],
            'client_id' => $validatedData['client_id'],
            'first_name' => $validatedData['first_name'],
            'middle_name' => $validatedData['middle_name'],
            'last_name' => $validatedData['last_name'],
            'father_spouse_name' => $validatedData['father_spouse_name'],
            'mother_name' => $validatedData['mother_name'],
            'dob' => $validatedData['dob'],
            'gender' => $validatedData['gender'],
            'marital_status' => $validatedData['marital_status'],
            'citizenship' => $validatedData['citizenship'],
            'residential_status' => $validatedData['residential_status'],
            'occupation_type' => $validatedData['occupation_type'],
            'residence_outside_india' => $validatedData['residence_outside_india'],
            'code_of_jurisdiction' => $validatedData['code_of_jurisdiction'],
            'tax_identification_no' => $validatedData['tax_identification_no'],
            'birth_city' => $validatedData['birth_city'],
            'birth_country' => $validatedData['birth_country'],
            'passport_number' => $validatedData['pass_number'],
            'voter_id_card' => $validatedData['voter_id'],
            'pan_card' => $validatedData['pan'],
            'driving_licence' => $validatedData['license'],
            'aadhar_no' => $validatedData['aadhar'],
            'job_card_details' => $validatedData['job_card'],
            'inserted_at' => date('Y-m-d H:i:s'),
            'inserted_by' => 1,
        ]);

        // Generate and save the PDF
        $pdf = PDF::loadView('pdf.client_details_pdf', ['data' => $validatedData]);
        $pdfFileName = 'client_details_' . $validatedData['client_id'] . '.pdf';
        $pdf->save(public_path('user_register/pdf' . $pdfFileName));

        // Return back with a toaster message
        return redirect()->back()->with('success', 'Client details saved successfully! PDF has been generated and stored.');
    }

}
