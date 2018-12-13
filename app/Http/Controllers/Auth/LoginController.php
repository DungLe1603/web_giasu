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
        return view('dangnhap');
    }

    public function postLogin(Request $req)
    {
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
            return redirect('/');
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại, vui lòng thử lại!']);
        }
    }
}
