<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRegistration;
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
            // 'client_code' => 'required|string|max:255|unique:client_registrations,client_code',
            'client_id' => 'required|string|max:255',
            'application_type' => 'required|string|max:255',
            'kyc_number' => 'required|string|max:255',
            'account_type' => 'required|string|max:255',

            // ===== Add more validation rules for first person =====
            'prefix' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',

            // ===== Add more validation rules for Maiden person =====
            'maiden_prefix' => 'required|string|max:255',
            'maiden_first_name' => 'required|string|max:255',
            'maiden_middle_name' => 'required|string|max:255',
            'maiden_last_name' => 'required|string|max:255',

            // ===== Add more validation rules for Father/Spouse =====
            'father_prefix' => 'required|string|max:255',
            'father_first_name' => 'required|string|max:255',
            'father_middle_name' => 'required|string|max:255',
            'father_last_name' => 'required|string|max:255',

            // ===== Add more validation rules for Mother =====
            'mother_prefix' => 'required|string|max:255',
            'mother_first_name' => 'required|string|max:255',
            'mother_middle_name' => 'required|string|max:255',
            'mother_last_name' => 'required|string|max:255',

            'date_of_birth' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'residenital_status' => 'required|string|max:255',
            'occupation_type' => 'required|string|max:255',

            'profile_pic' => 'required|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ],[
            'client_name.required' => 'The Client Name is required.',
            'client_name.string' => 'The Client Name must be a string.',
            'client_name.max' => 'The Client Name may not be greater than 255 characters.',

            'branch_name.required' => 'The Branch Name is required.',
            'branch_name.string' => 'The Branch Name must be a string.',
            'branch_name.max' => 'The Branch Name may not be greater than 255 characters.',

            'client_code.required' => 'The Client Code is required.',
            'client_code.string' => 'The Client Code must be a string.',
            'client_code.max' => 'The Client Code may not be greater than 255 characters.',
            'client_code.unique' => 'The Client Code has already been taken.',

            'client_id.required' => 'The Client ID is required.',
            'client_id.string' => 'The Client ID must be a string.',
            'client_id.max' => 'The Client ID may not be greater than 255 characters.',

            'application_type.required' => 'The Application Type is required.',
            'application_type.string' => 'The Application Type must be a string.',
            'application_type.max' => 'The Application Type may not be greater than 255 characters.',

            'kyc_number.required' => 'The KYC Number is required.',
            'kyc_number.string' => 'The KYC Number must be a string.',
            'kyc_number.max' => 'The KYC Number may not be greater than 255 characters.',

            'account_type.required' => 'The Account Type is required.',
            'account_type.string' => 'The Account Type must be a string.',
            'account_type.max' => 'The Account Type may not be greater than 255 characters.',

            // ===== Add more validation rules for first person =====
            'prefix.required' => 'The prefix is required.',
            'prefix.string' => 'The prefix must be a string.',
            'prefix.max' => 'The prefix may not be greater than 255 characters.',

            'first_name.required' => 'The first name is required.',
            'first_name.string' => 'The first name must be a string.',
            'first_name.max' => 'The first name may not be greater than 255 characters.',

            'middle_name.required' => 'The middle name is required.',
            'middle_name.string' => 'The middle name must be a string.',
            'middle_name.max' => 'The middle name may not be greater than 255 characters.',

            'last_name.required' => 'The last name is required.',
            'last_name.string' => 'The last name must be a string.',
            'last_name.max' => 'The last name may not be greater than 255 characters.',

            // ===== Add more validation rules for Maiden person =====
            'maiden_prefix.required' => 'The Maiden prefix is required.',
            'maiden_prefix.string' => 'The Maiden prefix must be a string.',
            'maiden_prefix.max' => 'The Maiden prefix may not be greater than 255 characters.',

            'maiden_first_name.required' => 'The Maiden first name is required.',
            'maiden_first_name.string' => 'The Maiden first name must be a string.',
            'maiden_first_name.max' => 'The Maiden first name may not be greater than 255 characters.',

            'maiden_middle_name.required' => 'The Maiden middle name is required.',
            'maiden_middle_name.string' => 'The Maiden middle name must be a string.',
            'maiden_middle_name.max' => 'The Maiden middle name may not be greater than 255 characters.',

            'maiden_last_name.required' => 'The Maiden last name is required.',
            'maiden_last_name.string' => 'The Maiden last name must be a string.',
            'maiden_last_name.max' => 'The Maiden last name may not be greater than 255 characters.',

            // ===== Add more validation rules for Father/Spouse =====
            'father_prefix.required' => 'The Father/Spouse prefix is required.',
            'father_prefix.string' => 'The Father/Spouse prefix must be a string.',
            'father_prefix.max' => 'The Father/Spouse prefix may not be greater than 255 characters.',

            'father_first_name.required' => 'The Father/Spouse first name is required.',
            'father_first_name.string' => 'The Father/Spouse first name must be a string.',
            'father_first_name.max' => 'The Father/Spouse first name may not be greater than 255 characters.',

            'father_middle_name.required' => 'The Father/Spouse middle name is required.',
            'father_middle_name.string' => 'The Father/Spouse middle name must be a string.',
            'father_middle_name.max' => 'The Father/Spouse middle name may not be greater than 255 characters.',

            'father_last_name.required' => 'The Father/Spouse last name is required.',
            'father_last_name.string' => 'The Father/Spouse last name must be a string.',
            'father_last_name.max' => 'The Father/Spouse last name may not be greater than 255 characters.',

            // ===== Add more validation rules for Mother =====
            'mother_prefix.required' => 'The Mother prefix is required.',
            'mother_prefix.string' => 'The Mother prefix must be a string.',
            'mother_prefix.max' => 'The Mother prefix may not be greater than 255 characters.',

            'mother_first_name.required' => 'The Mother first name is required.',
            'mother_first_name.string' => 'The Mother first name must be a string.',
            'mother_first_name.max' => 'The Mother first name may not be greater than 255 characters.',

            'mother_middle_name.required' => 'The Mother middle name is required.',
            'mother_middle_name.string' => 'The Mother middle name must be a string.',
            'mother_middle_name.max' => 'The Mother middle name may not be greater than 255 characters.',

            'mother_last_name.required' => 'The Mother last name is required.',
            'mother_last_name.string' => 'The Mother last name must be a string.',
            'mother_last_name.max' => 'The Mother last name may not be greater than 255 characters.',

            'profile_pic.required' => 'The profile pic is required.',
            'profile_pic.mimes' => 'The profile picture must be a file of type: jpeg, png, jpg, gif, webp.',
            'profile_pic.max' => 'The profile picture may not be greater than 2MB.',
        ]);

        // Save the data to the database
        $client = new ClientRegistration();

        // dd($request->all());

        // ==== Upload Product Image
        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) {
            // dd($request->file('profile_pic'));
            $image = $request->file('profile_pic');
            $extension = $image->getClientOriginalExtension();
            $new_name = time() . rand(10, 999) . '.' . $extension;
            $image->move(public_path('/facilon/client_registration/profile_pic/'), $new_name);

            $image_path = "/facilon/client_registration/profile_pic/" . $new_name;
            $client->profile_pic = $new_name;
        }

        $client->client_name = $request->client_name;
        $client->branch_name = $request->branch_name;
        $client->client_code = $request->client_code;
        $client->client_id = $request->client_id;
        $client->application_type = $request->application_type;
        $client->kyc_number = $request->kyc_number;
        $client->account_type = $request->account_type;

        // ===== Add more fields for First Person =====
        $client->prefix = $request->prefix;
        $client->first_name = $request->first_name;
        $client->middle_name = $request->middle_name;
        $client->last_name = $request->last_name;

        // ===== Add more fields for Maiden =====
        $client->maiden_prefix = $request->maiden_prefix;
        $client->maiden_first_name = $request->maiden_first_name;
        $client->maiden_middle_name = $request->maiden_middle_name;
        $client->maiden_last_name = $request->maiden_last_name;

        // ===== Add more fields for Father/Spouse =====
        $client->father_prefix = $request->father_prefix;
        $client->father_first_name = $request->father_first_name;
        $client->father_middle_name = $request->father_middle_name;
        $client->father_last_name = $request->father_last_name;

        // ===== Add more fields for Mother =====
        $client->mother_prefix = $request->mother_prefix;
        $client->mother_first_name = $request->mother_first_name;
        $client->mother_middle_name = $request->mother_middle_name;
        $client->mother_last_name = $request->mother_last_name;

        $client->date_of_birth = $request->date_of_birth;
        $client->gender = $request->gender;
        $client->marital_status = $request->marital_status;
        $client->citizenship = $request->citizenship;
        $client->residenital_status = $request->residenital_status;
        $client->occupation_type = $request->occupation_type;

        $client->inserted_at = Carbon::now();
        // $client->save();

        // $update = [
        //     'inserted_by' => $client->id,
        // ];
        // ClientRegistration::where('id', $client->id)->update($update);

        // Generate and save the PDF
        $pdf = PDF::loadView('pdf.user_register_pdf', ['data' => $request->all()]);
        $pdf->setPaper('A4', 'landscape');

        // Return the PDF and open it in the browser
        return $pdf->stream('user_registration.pdf')
                    ->header('Content-Type', 'application/pdf')
                    ->header('Content-Disposition', 'inline; filename="user_registration.pdf"')
                    ->header('Content-Transfer-Encoding', 'binary')
                    ->header('Accept-Ranges', 'bytes');
    }

}
