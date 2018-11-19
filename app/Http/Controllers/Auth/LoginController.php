<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        // if (Auth::guard()->check()) {
        //     return back();
        // }
        return view('dangnhap');
    }
    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'text'=>'required|text',
                'password'=>'required|min:6|max:20'
            ],
            [
                'text.required'=>'vui long nhap tai khoan',
                'password.required'=> 'vui long nhap password',
                'password.min'=> 'mat khau it nhat 6 kí tự',
                'password.max'=> 'mat khau khong qua 20 ki tu'
            ]
        );
        $credentials = array('text'=>$req->text,'password'=>$req->password);
        if (Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'dang nhap thanh cong']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'dang nhap khong thanh cong']);
        }
        
    }
}
