<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class BrokerController extends Controller
{
    public function service_provider_registration_step1_show($provider_id)
    {
        return view('service-provider.register',compact('provider_id'));
    }

    public function service_provider_registration_step1_submit(Request $request)
    {
        $provider_id = $request->input('provider_id');
        $provider_unique_number = 'FSP'.date('Ymd').rand(1000,10000);
        $status = 2;

        if($provider_id == 1 || $provider_id == 2 || $provider_id == 3)
        {
            $this->validate($request,[
            'full_name'=>'required',
            'corporate_office_address'=>'required',
            'tel_no'=>'required',
            'fax_no'=>'required',
            'website'=>'required',
            'cin_no'=>'required',
            'nse_sebi_reg_no'=>'required',
            'nse_f_and_o_sebi_reg_no'=>'required',
            'bse_sebi_reg_no'=>'required',
            'bse_f_and_o_sebi_reg_no'=>'required',
            ],[
                'full_name.required'=>'Full Name is required',
                'corporate_office_address.required'=>'Corporate Office Address is required',
                'tel_no.required'=>'TEL is required',
                'fax_no.required'=>'Fax is required',
                'website.required'=>'Website is required',
                'cin_no.required'=>'CIN No is required',
                'nse_sebi_reg_no.required'=>'NSE SEBI Registration No is required',
                'nse_f_and_o_sebi_reg_no.required'=>'NSE F & O SEBI Registration No is required',
                'bse_sebi_reg_no.required'=>'BSE SEBI Registration No is required',
                'bse_f_and_o_sebi_reg_no.required'=>'BSE F & O SEBI Registration No is required',
            ]);

            $provider_id = $request->input('provider_id');
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

            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$full_name,'corp_office_address'=>$corporate_office_address,'tel_no'=>$tel_no,
            'fax_no'=>$fax_no,'website'=>$website,'cin_no'=>$cin_no,'nse_sebi_reg'=>$nse_sebi_reg_no,'nse_f_o_sebi_reg'=>$nse_f_and_o_sebi_reg_no,
            'bse_sebi_reg'=>$bse_sebi_reg_no,'bse_f_o_sebi_reg'=>$bse_f_and_o_sebi_reg_no,'status'=>$status);

            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            $unique_codes = Crypt::encrypt($provider_unique_number);


            return redirect()->route('service_provider_register_step2_show',['unique_code'=>$unique_codes]);
        }else if($provider_id == 4)
        {
            $this->validate($request,[
            'bank_name'=>'required',
            'contact_person_name'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pin_zip_code'=>'required',
            'email_id'=>'required',
            'phone_no'=>'required',
            'contact_phone_no'=>'required',
            ]);

            $provider_id = $request->input('provider_id');
            $bank_name = $request->input('bank_name');
            $contact_person_name = $request->input('contact_person_name');
            $address_line1 = $request->input('address_line1');
            $address_line2 = $request->input('address_line2');
            $country = $request->input('country');
            $state = $request->input('state');
            $city = $request->input('city');
            $pin_zip_code = $request->input('pin_zip_code');
            $email_id = $request->input('email_id');
            $phone_no = $request->input('phone_no');
            $contact_phone_no = $request->input('contact_phone_no');

            $values = array('provider_id'=>$provider_id,'unique_id'=>$provider_unique_number,'full_name'=>$bank_name,'contact_person_name'=>$contact_person_name,'address_line1'=>$address_line1,'address_line2'=>$address_line2,
            'country'=>$country,'state'=>$state,'city'=>$city,'pin_zip_code'=>$pin_zip_code,'email_id'=>$email_id,'tel_no'=>$phone_no,'contact_phone_no'=>$contact_phone_no);

            $insert_values = DB::table('service_provider_details')
                        ->insert($values);
            $unique_codes = Crypt::encrypt($provider_unique_number);


            return redirect()->route('service_provider_register_thank_you_show');
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


            return redirect()->route('service_provider_register_thank_you_show');
        }



    }

    public function service_provider_register_step2_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('service-provider.register-step2',compact('unique_code'));
    }

    public function service_provider_register_step2_submit(Request $request)
    {
        $this->validate($request,[
            'primary1_name'=>'required',
            'primary1_phone'=>'required',
            'primary1_email'=>'required',
            'primary2_name'=>'required',
            'primary2_phone'=>'required',
            'primary2_email'=>'required',
            'primary3_name'=>'required',
            'primary3_phone'=>'required',
            'primary3_email'=>'required',

        ]);

        $unique_id = $request->input('unique_code');
        $primary1_name = $request->input('primary1_name');
        $primary1_phone = $request->input('primary1_phone');
        $primary1_email = $request->input('primary1_email');
        $primary2_name = $request->input('primary2_name');
        $primary2_phone = $request->input('primary2_phone');
        $primary2_email = $request->input('primary2_email');
        $primary3_name = $request->input('primary3_name');
        $primary3_phone = $request->input('primary3_phone');
        $primary3_email = $request->input('primary3_email');

        $values = array('primary1_name'=>$primary1_name,'primary1_phone'=>$primary1_phone,'primary1_email'=>$primary1_email,
        'primary2_name'=>$primary2_name,'primary2_phone'=>$primary2_phone,'primary2_email'=>$primary2_email,
        'primary3_name'=>$primary3_name,'primary3_phone'=>$primary3_phone,'primary3_email'=>$primary3_email);

        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);
        $unique_codes = Crypt::encrypt($unique_id);


        return redirect()->route('service_provider_step3_show',['unique_code'=>$unique_codes]);
    }

    public function service_provider_step3_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('broker.register-step3',compact('unique_code'));
    }
    public function service_provider_step3_submit(Request $request)
    {
       $this->validate($request,[
            'escalation1_name'=>'required',
            'escalation1_phone'=>'required',
            'escalation1_email'=>'required',
            'escalation2_name'=>'required',
            'escalation2_phone'=>'required',
            'escalation2_email'=>'required',
            'confirmation' => 'required',
            'agree_terms' => 'required'


        ]);

        $unique_id = $request->input('unique_code');
        $escalation1_name = $request->input('escalation1_name');
        $escalation1_phone = $request->input('escalation1_phone');
        $escalation1_email = $request->input('escalation1_email');
        $escalation2_name = $request->input('escalation2_name');
        $escalation2_phone = $request->input('escalation2_phone');
        $escalation2_email = $request->input('escalation2_email');
        $confirmation = 1;
        $agree_terms = 1;

        $values = array('escalation1_name'=>$escalation1_name,'escalation1_phone'=>$escalation1_phone,'escalation1_email'=>$escalation1_email,
        'escalation2_name'=>$escalation2_name,'escalation2_phone'=>$escalation2_phone,'escalation2_email'=>$escalation2_email,
        'confirmation'=>$confirmation,'agree_terms'=>$agree_terms);

        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);
        return redirect()->route('service_provider_register_thank_you_show');
    }

    public function service_provider_register_thank_you_show()
    {
       return view('register-thank-you');
    }

    public function broker_registration_step1_show()
    {
        return view('broker.register');
    }
    public function broker_registration_step1_submit(Request $request)
    {
        //echo 'welcome';exit;
        $broker_unique_number = 'BR'.date('Ymd').rand(1000,10000);
        $status = 2;

        $this->validate($request,[
            'full_name'=>'required',
            'corporate_office_address'=>'required',
            'tel_no'=>'required',
            'fax_no'=>'required',
            'website'=>'required',
            'cin_no'=>'required',
            'nse_sebi_reg_no'=>'required',
            'nse_f_and_o_sebi_reg_no'=>'required',
            'bse_sebi_reg_no'=>'required',
            'bse_f_and_o_sebi_reg_no'=>'required',
        ]);

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

        $values = array('unique_id'=>$broker_unique_number,'full_name'=>$full_name,'corp_office_address'=>$corporate_office_address,'tel_no'=>$tel_no,
        'fax_no'=>$fax_no,'website'=>$website,'cin_no'=>$cin_no,'nse_sebi_reg'=>$nse_sebi_reg_no,'nse_f_o_sebi_reg'=>$nse_f_and_o_sebi_reg_no,
        'bse_sebi_reg'=>$bse_sebi_reg_no,'bse_f_o_sebi_reg'=>$bse_f_and_o_sebi_reg_no,'status'=>$status);

        //print_r($values);exit;

        $insert_values = DB::table('service_provider_details')
                        ->insert($values);
        $unique_codes = Crypt::encrypt($broker_unique_number);


        return redirect()->route('broker_register_step2_show',['unique_code'=>$unique_codes]);
    }

    public function broker_register_step2_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('broker.register-step2',compact('unique_code'));
    }

    public function broker_register_step2_submit(Request $request)
    {
       $this->validate($request,[
            'primary1_name'=>'required',
            'primary1_phone'=>'required',
            'primary1_email'=>'required',
            'primary2_name'=>'required',
            'primary2_phone'=>'required',
            'primary2_email'=>'required',
            'primary3_name'=>'required',
            'primary3_phone'=>'required',
            'primary3_email'=>'required',

        ]);

        $unique_id = $request->input('unique_code');
        $primary1_name = $request->input('primary1_name');
        $primary1_phone = $request->input('primary1_phone');
        $primary1_email = $request->input('primary1_email');
        $primary2_name = $request->input('primary2_name');
        $primary2_phone = $request->input('primary2_phone');
        $primary2_email = $request->input('primary2_email');
        $primary3_name = $request->input('primary3_name');
        $primary3_phone = $request->input('primary3_phone');
        $primary3_email = $request->input('primary3_email');

        $values = array('primary1_name'=>$primary1_name,'primary1_phone'=>$primary1_phone,'primary1_email'=>$primary1_email,
        'primary2_name'=>$primary2_name,'primary2_phone'=>$primary2_phone,'primary2_email'=>$primary2_email,
        'primary3_name'=>$primary3_name,'primary3_phone'=>$primary3_phone,'primary3_email'=>$primary3_email);

        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);
        $unique_codes = Crypt::encrypt($unique_id);


        return redirect()->route('broker_register_step3_show',['unique_code'=>$unique_codes]);
    }

    public function broker_register_step3_show($unique_codes)
    {
        $unique_code = Crypt::decrypt($unique_codes);
        return view('broker.register-step3',compact('unique_code'));
    }
    public function broker_register_step3_submit(Request $request)
    {
      $this->validate($request,[
            'escalation1_name'=>'required',
            'escalation1_phone'=>'required',
            'escalation1_email'=>'required',
            'escalation2_name'=>'required',
            'escalation2_phone'=>'required',
            'escalation2_email'=>'required',
            'confirmation' => 'required',
            'agree_terms' => 'required'


        ]);

        $unique_id = $request->input('unique_code');
        $escalation1_name = $request->input('escalation1_name');
        $escalation1_phone = $request->input('escalation1_phone');
        $escalation1_email = $request->input('escalation1_email');
        $escalation2_name = $request->input('escalation2_name');
        $escalation2_phone = $request->input('escalation2_phone');
        $escalation2_email = $request->input('escalation2_email');
        $confirmation = 1;
        $agree_terms = 1;

        $values = array('escalation1_name'=>$escalation1_name,'escalation1_phone'=>$escalation1_phone,'escalation1_email'=>$escalation1_email,
        'escalation2_name'=>$escalation2_name,'escalation2_phone'=>$escalation2_phone,'escalation2_email'=>$escalation2_email,
        'confirmation'=>$confirmation,'agree_terms'=>$agree_terms);

        $insert_values = DB::table('service_provider_details')
                        ->where('unique_id','=',$unique_id)
                        ->limit(1)
                        ->update($values);
        return redirect()->route('broker_register_thank_you_show');
    }
    public function broker_register_thank_you_show()
    {
        return view('register-thank-you');
    }
    //  Home
    public function index()
    {
        $fetch_banner_details   = DB::table('banner')
                                ->where('id','=','1')
                                ->first();


        $list_key_points    = DB::table('key_points')
                            ->where('status','=','1')
                            ->get();

        return view('welcome', compact('fetch_banner_details', 'list_key_points'));
    }


    //  Custody
    public function custody()
    {
        $fetch_custody_basic_details    = DB::table('custody_basic_details')
                                        ->where('id','=','1')
                                        ->first();

        $list_custody_services  = DB::table('custody_services')
                                ->where('status','=','1')
                                ->get();

        return view('custody', compact('fetch_custody_basic_details', 'list_custody_services'));
    }


    //  Derivatives Trading
    public function derivatives_trading()
    {
        $fetch_derivatives_trading_basic_details    = DB::table('derivatives_trading_basic_details')
                                                    ->where('id','=','1')
                                                    ->first();

        $list_types_of_derivatives  = DB::table('types_of_derivatives')
                                    ->where('status','=','1')
                                    ->get();

        $list_derivatives_trading_services  = DB::table('derivatives_trading_services')
                                            ->where('status','=','1')
                                            ->get();

        return view('derivatives-trading', compact('fetch_derivatives_trading_basic_details', 'list_types_of_derivatives', 'list_derivatives_trading_services'));
    }


    //  Portfolio Investment Scheme
    public function portfolio_investment_scheme()
    {
        $fetch_portfolio_investment_scheme_basic_details    = DB::table('portfolio_investment_scheme_basic_details')
                                        ->where('id','=','1')
                                        ->first();

        $list_portfolio_investment_scheme_services  = DB::table('portfolio_investment_scheme_services')
                                                    ->where('status','=','1')
                                                    ->get();

        return view('portfolio-investment-scheme', compact('fetch_portfolio_investment_scheme_basic_details', 'list_portfolio_investment_scheme_services'));
    }


    //  Portfolio Management Services
    public function portfolio_management_services()
    {
        $fetch_portfolio_management_services_basic_details  = DB::table('portfolio_management_services_basic_details')
                                                            ->where('id','=','1')
                                                            ->first();

        $list_portfolio_management_services = DB::table('portfolio_management_services')
                                            ->where('status','=','1')
                                            ->get();

        return view('portfolio-management-services', compact('fetch_portfolio_management_services_basic_details', 'list_portfolio_management_services'));
    }

    //  Trading in Listed Securities
    public function trading_listed_securities()
    {
        $fetch_trading_listed_securities_basic_details  = DB::table('trading_listed_securities_basic_details')
                                                        ->where('id','=','1')
                                                        ->first();

        $list_trading_listed_securities_services    = DB::table('trading_listed_securities_services')
                                                    ->where('status','=','1')
                                                    ->get();

        return view('trading-listed-securities', compact('fetch_trading_listed_securities_basic_details', 'list_trading_listed_securities_services'));
    }


    //  Service Providers
    public function service_providers()
    {
        $list_service_providers = DB::table('service_providers')
                                ->where('status','=','1')
                                ->get();

        return view('service-providers', compact('list_service_providers'));
    }
}
