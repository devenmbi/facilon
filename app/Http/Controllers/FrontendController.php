<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class FrontendController extends Controller
{
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
    
public function coming_soon_show()
    {
        return view('coming-soon');
    }    
public function faq_show()
{
return view('faq');
}
     
public function expression_interest_show()
    {
        return view('expression-of-interest');
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
public function india_market_show()
{
return view('india-market');
}

}
