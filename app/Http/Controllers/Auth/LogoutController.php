<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
  public function __construct()
    {
        Auth::logout();
    }
    public function postLogout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
