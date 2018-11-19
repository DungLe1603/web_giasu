<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
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
        // echo("Chuyển view thành công");
        // dd($req);
        // ví dụ thôi nha!
        // $this->validate($req,
        //     [
        //         'username'=>'required|username',
        //         'password'=>'required|min:6|max:20'
        //     ],
        //     [
        //         'username.required'=>'vui long nhap tai khoan',
        //         'password.required'=> 'vui long nhap password',
        //         'password.min'=> 'mat khau it nhat 6 kí tự',
        //         'password.max'=> 'mat khau khong qua 20 ki tu'
        //     ]
        // );
        $credentials = array(
            'username'=>$req->username,
            'password'=>$req->password
        );
        if (Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'dang nhap thanh cong']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'dang nhap khong thanh cong']);
        }
    }
}
