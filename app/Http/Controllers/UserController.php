<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function add_new_user_show()
    {
        return view('admin.users.add-new-user');

    }
    public function new_user_insert(Request $request)
    {
        $provider_id = $request->input('service_provider_type');
        $provider_unique_number = 'FSP'.date('Ymd').rand(1000,10000);
        $status = 2;
        if($provider_id == 1 || $provider_id == 2 || $provider_id == 3)
        {
            // $this->validate($request,[
            // 'full_name'=>'required',
            // 'corporate_office_address'=>'required',
            // 'tel_no'=>'required',
            // 'fax_no'=>'required',
            // 'website'=>'required',
            // 'cin_no'=>'required',
            // 'nse_sebi_reg_no'=>'required',
            // 'nse_f_and_o_sebi_reg_no'=>'required',
            // 'bse_sebi_reg_no'=>'required',
            // 'bse_f_and_o_sebi_reg_no'=>'required',
            // ]);
        
            //$provider_id = $request->input('provider_id');
            $full_name = $request->input('full_name');
            $corporate_office_address = $request->input('corporate_office_address');
            $tel_no = $request->input('tel_no');
            $fax_no = $request->input('fax_no');
            $website = $request->input('website');
            $cin_no = $request->input('cin_no');
            $nse_sebi_reg_no = $request->input('nse_sebi_reg_no');
            $nse_f_and_o_sebi_reg_no = $request->input('nse_f_and_o_sebi_reg_no');
            $bse_sebi_reg_no = $request->input('bse_sebi_reg_no');
            $bse_f_and_o_sebi_reg_no = $request->input('bse_f_and_o_sebi_reg_no');
            $primary1_name = $request->input('primary1_name');
            $primary1_phone = $request->input('primary1_phone');
            $primary1_email = $request->input('primary1_email');
            $primary2_name = $request->input('primary2_name');
            $primary2_phone = $request->input('primary2_phone');
            $primary2_email = $request->input('primary2_email');
            $primary3_name = $request->input('primary3_name');
            $primary3_phone = $request->input('primary3_phone');
            $primary3_email = $request->input('primary3_email');
            $escalation1_name = $request->input('escalation1_name');
            $escalation1_phone = $request->input('escalation1_phone');
            $escalation1_email = $request->input('escalation1_email');
            $escalation2_name = $request->input('escalation2_name');
            $escalation2_phone = $request->input('escalation2_phone');
            $escalation2_email = $request->input('escalation2_email');
            
            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,
            'full_name'=>$full_name,'corp_office_address'=>$corporate_office_address,'tel_no'=>$tel_no,
            'fax_no'=>$fax_no,'website'=>$website,'cin_no'=>$cin_no,'nse_sebi_reg'=>$nse_sebi_reg_no,
            'nse_f_o_sebi_reg'=>$nse_f_and_o_sebi_reg_no,'bse_sebi_reg'=>$bse_sebi_reg_no,
            'bse_f_o_sebi_reg'=>$bse_f_and_o_sebi_reg_no,'status'=>$status,'primary1_name'=>$primary1_name,
            'primary1_phone'=>$primary1_phone,'primary1_email'=>$primary1_email,
            'primary2_name'=>$primary2_name,'primary2_phone'=>$primary2_phone,'primary2_email'=>$primary2_email,
            'primary3_name'=>$primary3_name,'primary3_phone'=>$primary3_phone,'primary3_email'=>$primary3_email,
            'escalation1_name'=>$escalation1_name,'escalation1_phone'=>$escalation1_phone,
            'escalation1_email'=>$escalation1_email,'escalation2_name'=>$escalation2_name,
            'escalation2_phone'=>$escalation2_phone,'escalation2_email'=>$escalation2_email,'status'=>$status);
            
            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            //$unique_codes = Crypt::encrypt($provider_unique_number);
        
            exit;
            return redirect()->route('service_provider_register_step2_show',['unique_code'=>$unique_codes]);
        }else if($provider_id == 4)
        {
            // $this->validate($request,[
            // 'bank_name'=>'required',
            // 'contact_person_name'=>'required',
            // 'address_line1'=>'required',
            // 'address_line2'=>'required',
            // 'country'=>'required',
            // 'state'=>'required',
            // 'city'=>'required',
            // 'pin_zip_code'=>'required',
            // 'email_id'=>'required',
            // 'phone_no'=>'required',
            // 'contact_phone_no'=>'required',
            // ]);
            
            
            $bank_name = $request->input('bank_name');
            $contact_person_name = $request->input('contact_person_name');
            $address_line1 = $request->input('address_line1');
            $address_line2 = $request->input('address_line2');
            $country = $request->input('country');
            $state = $request->input('state');
            $city = $request->input('city');
            $pin_zip_code = $request->input('pin_zip_code');
            $email_id = $request->input('email_id');
            $phone_no = $request->input('bank_phone');
            $contact_phone_no = $request->input('contact_phone_no');
            
            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$bank_name,'contact_person_name'=>$contact_person_name,'address_line1'=>$address_line1,'address_line2'=>$address_line2,
            'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,
            'email_id'=>$email_id,'tel_no'=>$phone_no,'contact_phone_no'=>$contact_phone_no,'status'=>$status);
            
            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            //$unique_codes = Crypt::encrypt($provider_unique_number);
        
            
            return redirect()->route('admin.all_users_list');
        }else{
            
            $natural_person = $request->input('natural_person');
            
            if($natural_person == 'Natural Person')
            {
                $this->validate($request,[
                'full_name'=>'required',
                'email_id'=>'required',
                'mobile_no'=>'required',
                'address_line1'=>'required',
                'address_line2'=>'required',
                'country_code'=>'required',
                'state'=>'required',
                'city'=>'required',
                'pin_zip_code'=>'required',
                'overseas_regulator'=>'required',
                'license_no'=>'required',
                'license_valid'=>'required',
                'sebi_reg_no'=>'required',
                'sebi_valid'=>'required',
                
                ]);
                
                $provider_id = $request->input('provider_id');
                $full_name = $request->input('full_name');
                $email_id = $request->input('email_id');
                $phone_no = $request->input('mobile_no');
                $address_line1 = $request->input('address_line1');
                $address_line2 = $request->input('address_line2');
                $country = $request->input('country_code');
                $state = $request->input('state');
                $city = $request->input('city');
                $pin_zip_code = $request->input('pin_zip_code');
                $overseas_regulator = $request->input('overseas_regulator');
                $license_no = $request->input('license_no');
                $license_valid = $request->input('license_valid');
                $sebi_reg_no = $request->input('sebi_reg_no');
                $sebi_valid = $request->input('sebi_valid');
                
                $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'email_id'=>$email_id,'tel_no'=>$phone_no,
                'address_line1'=>$address_line1,'address_line2'=>$address_line2,'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,
                'overseas_regulator'=>$overseas_regulator,'license_no'=>$license_no,'license_valid'=>$license_valid,'sebi_reg_no'=>$sebi_reg_no,'sebi_valid'=>$sebi_valid,'register_as'=>$natural_person);
            }else{
                $this->validate($request,[
                'introducer_name'=>'required',
                'introducer_phone'=>'required',
                'contact_person_name'=>'required',
                'contact_mobile_no'=>'required',
                'contact_email_id'=>'required',
                'contact_designation'=>'required',
                'address_line1'=>'required',
                'address_line2'=>'required',
                'country_code'=>'required',
                'state'=>'required',
                'city'=>'required',
                'pin_zip_code'=>'required',
                'overseas_regulator'=>'required',
                'license_no'=>'required',
                'license_valid'=>'required',
                'sebi_reg_no'=>'required',
                'sebi_valid'=>'required',
                ]);
                
                $provider_id = $request->input('provider_id');
                $full_name = $request->input('introducer_name');
                $phone_no = $request->input('introducer_phone');
                $contact_person_name = $request->input('contact_person_name');
                $contact_mobile_no = $request->input('contact_mobile_no');
                $contact_email_id = $request->input('contact_email_id');
                $contact_designation = $request->input('contact_designation');
                $address_line1 = $request->input('address_line1');
                $address_line2 = $request->input('address_line2');
                $country = $request->input('country_code');
                $state = $request->input('state');
                $city = $request->input('city');
                $pin_zip_code = $request->input('pin_zip_code');
                $overseas_regulator = $request->input('overseas_regulator');
                $license_no = $request->input('license_no');
                $license_valid = $request->input('license_valid');
                $sebi_reg_no = $request->input('sebi_reg_no');
                $sebi_valid = $request->input('sebi_valid');
                
                $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'tel_no'=>$phone_no,
                'contact_person_name'=>$contact_person_name,'contact_phone_no'=>$contact_mobile_no,'email_id'=>$contact_email_id,
                'address_line1'=>$address_line1,'address_line2'=>$address_line2,'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,
                'overseas_regulator'=>$overseas_regulator,'license_no'=>$license_no,'license_valid'=>$license_valid,'sebi_reg_no'=>$sebi_reg_no,'sebi_valid'=>$sebi_valid,'register_as'=>$natural_person);
            }
            
            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            $unique_codes = Crypt::encrypt($provider_unique_number);
        
        
            return redirect()->route('admin.all_users_list'); 
        }
        
    }
    public function all_users_list()
    {
        $fetch_all_users = DB::table('service_provider_details')
                        ->where('delete_status','=',2)
                        ->get();
        return view('admin.users.all-users',compact('fetch_all_users'));
    }
    public function users_list_activate($id)
    {
        $status = 1;
        $values = array('status'=>$status);

        $update_status = DB::table('service_provider_details')
                        ->where('id','=',$id)
                        ->limit(1)
                        ->update($values);
        return redirect()->back();
    }
    public function users_list_deactivate($id)
    {
        $status = 2;
        $values = array('status'=>$status);

        $update_status = DB::table('service_provider_details')
                        ->where('id','=',$id)
                        ->limit(1)
                        ->update($values);
        return redirect()->back();
    }
    public function delete_user_from_list($id)
    {
        $user_id = $id;
        $delete_status = 1;
        $values = array('delete_status'=>$delete_status);
        $remove_user = DB::table('service_provider_details')
                    ->where('id','=',$user_id)
                    ->limit(1)
                    ->update($values);
        return redirect()->back();
    }
}
