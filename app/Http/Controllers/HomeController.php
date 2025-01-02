<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function first_time_password_change(Request $request)
    {
        $this->validate($request,[
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password',
            
        ]);
        

        $user = Auth::user();

        // if (!Hash::check($request->current_password, $user->password)) {
        //     return redirect()->back()->with('error', 'The current password is incorrect.');
        // }

        // Update user password
        $user->password = Hash::make($request->new_password);
        $user->save();

        $login_attempt_first_time = 1;

        $values = array('logged_in_count'=>$login_attempt_first_time);

        $update_user = DB::table('users')
                    ->where('id','=',Auth::user()->id)
                    ->update($values);
        return redirect()->route('home')->with('success', 'Password changed successfully.');
    }
}
