<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //todo: admin login form
    public function login_form()
    {
        if(!Auth::guard('admin')->check()){
        return view('admin.login-form');
        }else{
            return redirect()->route('dashboard_show');
        }
    }

    //todo: admin login functionality
    public function login_functionality(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->route('dashboard_show');
        }else{
            Session::flash('error-message','Invalid Email or Password');
            return back();
        }
    }

    public function dashboard_show()
    {
      
        return view('admin.dashboard');
    }


    //todo: admin logout functionality
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }


    //  Custody - Basic Details
    public function view_custody_basic_details()
    {
        $fetch_custody_basic_details    = DB::table('custody_basic_details')
									    ->where('id','=', 1)
									    ->first();

        return view('admin.custody.custody-basic-details', compact('fetch_custody_basic_details'));
    }

    public function update_custody_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/custody'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('custody_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_custody_basic_details');
    }


    //  Custody - Services
    public function list_custody_services()
    {
        $list_custody_services  = DB::table('custody_services')
							    ->get();

        return view('admin.custody.list-custody-services', compact('list_custody_services'));
    }

    public function view_add_custody_service()
    {
        return view('admin.custody.add-custody-service');
    }

    public function add_custody_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/custody/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('custody_services')
                        ->insert($values);

        return redirect()->route('admin.list_custody_services');
    }

    public function view_custody_service_details($id)
    {
        $service_id = $id;
		
		$fetch_custody_service_details  = DB::table('custody_services')
                                        ->where('id','=',$service_id)
                                        ->first();

        return view('admin.custody.edit-custody-service', compact('fetch_custody_service_details'));
    }

    public function edit_custody_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/custody/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('custody_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_custody_services');
    }

    public function delete_custody_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_custody_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_custody_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('custody_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Derivatives Trading - Basic Details
    public function view_derivatives_trading_basic_details()
    {
        $fetch_derivatives_trading_basic_details    = DB::table('derivatives_trading_basic_details')
                                                    ->where('id','=', 1)
                                                    ->first();

        return view('admin.derivatives-trading.derivatives-trading-basic-details', compact('fetch_derivatives_trading_basic_details'));
    }

    public function update_derivatives_trading_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/derivatives-trading'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('derivatives_trading_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_derivatives_trading_basic_details');
    }


    //  Derivatives Trading - Services
    public function list_derivatives_trading_services()
    {
        $list_derivatives_trading_services  = DB::table('derivatives_trading_services')
							                ->get();

        return view('admin.derivatives-trading.list-derivatives-trading-services', compact('list_derivatives_trading_services'));
    }

    public function view_add_derivatives_trading_service()
    {
        return view('admin.derivatives-trading.add-derivatives-trading-service');
    }

    public function add_derivatives_trading_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/derivatives-trading/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('derivatives_trading_services')
                        ->insert($values);

        return redirect()->route('admin.list_derivatives_trading_services');
    }

    public function view_derivatives_trading_service_details($id)
    {
        $service_id = $id;
		
		$fetch_derivatives_trading_service_details  = DB::table('derivatives_trading_services')
                                                    ->where('id','=',$service_id)
                                                    ->first();

        return view('admin.derivatives-trading.edit-derivatives-trading-service', compact('fetch_derivatives_trading_service_details'));
    }

    public function edit_derivatives_trading_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/derivatives-trading/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('derivatives_trading_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_derivatives_trading_services');
    }

    public function delete_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_derivatives_trading_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('derivatives_trading_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Derivatives Trading - Types Of Derivatives
    public function list_types_of_derivatives()
    {
        $list_types_of_derivatives  = DB::table('types_of_derivatives')
							        ->get();

        return view('admin.derivatives-trading.list-types-of-derivatives', compact('list_types_of_derivatives'));
    }

    public function view_add_type_of_derivative()
    {
        return view('admin.derivatives-trading.add-type-of-derivatives');
    }

    public function add_type_of_derivative(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        $values=array('title'=>$title, 'description'=>$description);
		
		$inser_query 	= DB::table('types_of_derivatives')
                        ->insert($values);

        return redirect()->route('admin.list_types_of_derivatives');
    }

    public function view_type_of_derivative_details($id)
    {
        $derivative_id = $id;
		
		$fetch_derivatives_trading_service_details  = DB::table('types_of_derivatives')
                                                    ->where('id','=',$derivative_id)
                                                    ->first();

        return view('admin.derivatives-trading.edit-type-of-derivatives', compact('fetch_derivatives_trading_service_details'));
    }

    public function edit_type_of_derivative(Request $request)
    {
        $derivative_id = $request->input('derivative_id');
        $title = $request->input('title');
		$description = $request->input('description');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        $values=array('title'=>$title, 'description'=>$description);
		
		$update_query 	= DB::table('types_of_derivatives')
                        ->where('id','=', $derivative_id)
						->update($values);

        return redirect()->route('admin.list_types_of_derivatives');
    }

    public function delete_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$delete_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$update_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_type_of_derivative($id)
    {
        $derivative_id = $id;
		
		$update_query   = DB::table('types_of_derivatives')
                        ->where('id','=',$derivative_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Portfolio Investment Scheme - Basic Details
    public function view_portfolio_investment_scheme_basic_details()
    {
        $fetch_portfolio_investment_scheme_basic_details    = DB::table('portfolio_investment_scheme_basic_details')
                                                            ->where('id','=', 1)
                                                            ->first();

        return view('admin.portfolio-investment-scheme.portfolio-investment-scheme-basic-details', compact('fetch_portfolio_investment_scheme_basic_details'));
    }

    public function update_portfolio_investment_scheme_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/portfolio-investment-scheme'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('portfolio_investment_scheme_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_portfolio_investment_scheme_basic_details');
    }


    //  Portfolio Investment Scheme - Services
    public function list_portfolio_investment_scheme_services()
    {
        $list_portfolio_investment_scheme_services  = DB::table('portfolio_investment_scheme_services')
							                        ->get();

        return view('admin.portfolio-investment-scheme.list-portfolio-investment-scheme-services', compact('list_portfolio_investment_scheme_services'));
    }

    public function view_add_portfolio_investment_scheme_service()
    {
        return view('admin.portfolio-investment-scheme.add-portfolio-investment-scheme-service');
    }

    public function add_portfolio_investment_scheme_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-investment-scheme/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('portfolio_investment_scheme_services')
                        ->insert($values);

        return redirect()->route('admin.list_portfolio_investment_scheme_services');
    }

    public function view_portfolio_investment_scheme_service_details($id)
    {
        $service_id = $id;
		
		$fetch_portfolio_investment_scheme_service_details  = DB::table('portfolio_investment_scheme_services')
                                                            ->where('id','=',$service_id)
                                                            ->first();

        return view('admin.portfolio-investment-scheme.edit-portfolio-investment-scheme-service', compact('fetch_portfolio_investment_scheme_service_details'));
    }

    public function edit_portfolio_investment_scheme_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-investment-scheme/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('portfolio_investment_scheme_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_portfolio_investment_scheme_services');
    }

    public function delete_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_portfolio_investment_scheme_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_investment_scheme_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Portfolio Management Services - Basic Details
    public function view_portfolio_management_services_basic_details()
    {
        $fetch_portfolio_management_services_basic_details  = DB::table('portfolio_management_services_basic_details')
                                                            ->where('id','=', 1)
                                                            ->first();

        return view('admin.portfolio-management-services.portfolio-management-services-basic-details', compact('fetch_portfolio_management_services_basic_details'));
    }

    public function update_portfolio_management_services_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/portfolio-management-services'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('portfolio_management_services_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_portfolio_management_services_basic_details');
    }


    //  Portfolio Management Services - Services
    public function list_portfolio_management_services()
    {
        $list_portfolio_management_services = DB::table('portfolio_management_services')
							                ->get();

        return view('admin.portfolio-management-services.list-portfolio-management-services', compact('list_portfolio_management_services'));
    }

    public function view_add_portfolio_management_service()
    {
        return view('admin.portfolio-management-services.add-portfolio-management-service');
    }

    public function add_portfolio_management_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-management-services/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('portfolio_management_services')
                        ->insert($values);

        return redirect()->route('admin.list_portfolio_management_services');
    }

    public function view_portfolio_management_service_details($id)
    {
        $service_id = $id;
		
		$fetch_portfolio_management_service_details = DB::table('portfolio_management_services')
                                                    ->where('id','=',$service_id)
                                                    ->first();

        return view('admin.portfolio-management-services.edit-portfolio-management-service', compact('fetch_portfolio_management_service_details'));
    }

    public function edit_portfolio_management_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/portfolio-management-services/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('portfolio_management_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_portfolio_management_services');
    }

    public function delete_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_portfolio_management_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('portfolio_management_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Trading In Listed Securities - Basic Details
    public function view_trading_listed_securities_basic_details()
    {
        $fetch_trading_listed_securities_basic_details  = DB::table('trading_listed_securities_basic_details')
                                                        ->where('id','=', 1)
                                                        ->first();

        return view('admin.trading-listed-securities.trading-listed-securities-basic-details', compact('fetch_trading_listed_securities_basic_details'));
    }

    public function update_trading_listed_securities_basic_details(Request $request)
    {
        $title = $request->input('title');
		$description_one = $request->input('description_one');
		$description_two = $request->input('description_two');
		$bg_img_src = $request->file('bg_img_src');
        $old_bg_img_src = $request->input('old_bg_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description_one' => 'required',
			'description_two' => 'required',
			'bg_img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description_one.required' => 'Please enter description one',
			'description_two.required' => 'Please enter description two',
			'bg_img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('bg_img_src')) 
		{
            $uploaded_bg_img_src = Str::random(20).'.'.$bg_img_src->getClientOriginalExtension();
            $bg_img_src->move(public_path('admin/assets/images/trading-listed-securities'), $uploaded_bg_img_src);
        }
		else
		{
			$uploaded_bg_img_src = $old_bg_img_src;
		}

		$values=array('title'=>$title, 'description_one'=>$description_one, 'description_two'=>$description_two, 'bg_img_src'=>$uploaded_bg_img_src);
		
		$update_query 	= DB::table('trading_listed_securities_basic_details')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_trading_listed_securities_basic_details');
    }


    //  Trading In Listed Securities - Services
    public function list_trading_listed_securities_services()
    {
        $list_trading_listed_securities_services    = DB::table('trading_listed_securities_services')
							                        ->get();

        return view('admin.trading-listed-securities.list-trading-listed-securities-services', compact('list_trading_listed_securities_services'));
    }

    public function view_add_trading_listed_securities_service()
    {
        return view('admin.trading-listed-securities.add-trading-listed-securities-service');
    }

    public function add_trading_listed_securities_service(Request $request)
    {
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/trading-listed-securities/services'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('trading_listed_securities_services')
                        ->insert($values);

        return redirect()->route('admin.list_trading_listed_securities_services');
    }

    public function view_trading_listed_securities_service_details($id)
    {
        $service_id = $id;
		
		$fetch_trading_listed_securities_service_details = DB::table('trading_listed_securities_services')
                                                        ->where('id','=',$service_id)
                                                        ->first();

        return view('admin.trading-listed-securities.edit-trading-listed-securities-service', compact('fetch_trading_listed_securities_service_details'));
    }

    public function edit_trading_listed_securities_service(Request $request)
    {
        $service_id = $request->input('service_id');
        $title = $request->input('title');
		$description = $request->input('description');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'description' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'description.required' => 'Please enter description'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/trading-listed-securities/services'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'description'=>$description, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('trading_listed_securities_services')
                        ->where('id','=', $service_id)
						->update($values);

        return redirect()->route('admin.list_trading_listed_securities_services');
    }

    public function delete_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$delete_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_trading_listed_securities_service($id)
    {
        $service_id = $id;
		
		$update_query   = DB::table('trading_listed_securities_services')
                        ->where('id','=',$service_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }


    //  Service Providers
    public function list_service_providers()
    {
        $list_service_providers = DB::table('service_providers')
							    ->get();

        return view('admin.service-providers.list-service-providers', compact('list_service_providers'));
    }

    public function view_add_service_provider()
    {
        return view('admin.service-providers.add-service-provider');
    }

    public function add_service_provider(Request $request)
    {
        $title = $request->input('title');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/service-providers'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('service_providers')
                        ->insert($values);

        return redirect()->route('admin.list_service_providers');
    }

    public function view_service_provider_details($id)
    {
        $service_provider_id = $id;
		
		$fetch_service_provider_details = DB::table('service_providers')
                                        ->where('id','=',$service_provider_id)
                                        ->first();

        return view('admin.service-providers.edit-service-provider', compact('fetch_service_provider_details'));
    }

    public function edit_service_provider(Request $request)
    {
        $service_provider_id = $request->input('service_provider_id');
        $title = $request->input('title');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
		],
		[
			'title.required' => 'Please enter title'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/service-providers'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('service_providers')
                        ->where('id','=', $service_provider_id)
						->update($values);

        return redirect()->route('admin.list_service_providers');
    }

    public function delete_service_provider($id)
    {
        $service_provider_id = $id;
		
		$delete_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_service_provider($id)
    {
        $service_provider_id = $id;
		
		$update_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_service_provider($id)
    {
        $service_provider_id = $id;
		
		$update_query   = DB::table('service_providers')
                        ->where('id','=',$service_provider_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }
    
    public function get_service_provider_registration_list($provider_id)
    {
        $get_all_list = DB::table('service_provider_details')
                        ->where('provider_id','=',$provider_id)
                        ->get();
        return view('admin.service-providers.all-register-list',compact('get_all_list'));
    }
    
    
    //  Home - Banner Details
    public function view_banner_details()
    {
        $fetch_banner_details   = DB::table('banner')
							    ->where('id','=', 1)
							    ->first();

        return view('admin.home.banner.update-banner-details', compact('fetch_banner_details'));
    }

    public function update_banner_details(Request $request)
    {
        $title = $request->input('title');
		$sub_title_one = $request->input('sub_title_one');
		$sub_title_two = $request->input('sub_title_two');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'sub_title_one' => 'required',
			'sub_title_two' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'sub_title_one.required' => 'Please enter sub-title one',
			'sub_title_two.required' => 'Please enter sub-title two',
			'img_src.required' => 'Please upload background image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/banner'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'sub_title_one'=>$sub_title_one, 'sub_title_two'=>$sub_title_two, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('banner')
                        ->where('id','=', 1)
						->update($values);

        return redirect()->route('admin.view_banner_details');
    }


    //  Home - Journey With Facilon
    public function list_key_points()
    {
        $list_key_points    = DB::table('key_points')
							->get();

        return view('admin.home.key-points.list-key-points', compact('list_key_points'));
    }

    public function view_add_key_point()
    {
        return view('admin.home.key-points.add-key-point');
    }

    public function add_key_point(Request $request)
    {
        $title = $request->input('title');
		$url = $request->input('url');
		$img_src = $request->file('img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'url' => 'required',
			'img_src' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'url.required' => 'Please enter URL',
			'img_src.required' => 'Please upload image'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/key-points'), $uploaded_img_src);
        }

		$values=array('title'=>$title, 'url'=>$url, 'img_src'=>$uploaded_img_src);
		
		$inser_query 	= DB::table('key_points')
                        ->insert($values);

        return redirect()->route('admin.list_key_points');
    }

    public function view_key_point_details($id)
    {
        $key_point_id = $id;
		
		$fetch_key_point_details    = DB::table('key_points')
                                    ->where('id','=',$key_point_id)
                                    ->first();

        return view('admin.home.key-points.edit-key-point', compact('fetch_key_point_details'));
    }

    public function edit_key_point(Request $request)
    {
        $key_point_id = $request->input('key_point_id');
        $title = $request->input('title');
		$url = $request->input('url');
		$img_src = $request->file('img_src');
        $old_img_src = $request->input('old_img_src');

		$validatedData = $request->validate([
			'title' => 'required',
			'url' => 'required',
		],
		[
			'title.required' => 'Please enter title',
			'url.required' => 'Please enter URL'
		]);

        if($request->hasFile('img_src')) 
		{
            $uploaded_img_src = Str::random(20).'.'.$img_src->getClientOriginalExtension();
            $img_src->move(public_path('admin/assets/images/key-points'), $uploaded_img_src);
        }
		else
		{
			$uploaded_img_src = $old_img_src;
		}

		$values=array('title'=>$title, 'url'=>$url, 'img_src'=>$uploaded_img_src);
		
		$update_query 	= DB::table('key_points')
                        ->where('id','=', $key_point_id)
						->update($values);

        return redirect()->route('admin.list_key_points');
    }

    public function delete_key_point($id)
    {
        $key_point_id = $id;
		
		$delete_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->delete();

        return redirect()->back();
    }

    public function deactivate_key_point($id)
    {
        $key_point_id = $id;
		
		$update_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->update(array('status'=>'0'));

        return redirect()->back();
    }

    public function activate_key_point($id)
    {
        $key_point_id = $id;
		
		$update_query   = DB::table('key_points')
                        ->where('id','=',$key_point_id)
                        ->update(array('status'=>'1'));

        return redirect()->back();
    }
}
