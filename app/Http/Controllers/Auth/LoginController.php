<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use validator;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string 
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            // $this->middleware('auth');
     // $this->middleware('guest')->except('logout');
    // $this->middleware('guest:user')->except('logout');
    }
     public function showLoginForm()
    {
        // return view('admin.login');
        return view('auth.login', ['url' => 'user']);

    }
     public function login(Request $request)
    {      

        // create our user data for the authentication
          $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]); 
         // attempt to do the login
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
             return redirect()->intended('/dashboard');
         
        }
        else
        {
           
            return back()->with('error', 'Wrong Login Detail');
        }
        // return view('admin.login');
       
     

       
    }
    public function register(){
        dd('here');
    }
}
