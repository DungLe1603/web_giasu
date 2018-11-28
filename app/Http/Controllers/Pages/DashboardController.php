<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
  public function index() {
    // $user = User::find(1);
    // dd($user->role->name);
    return view('index');
	}
}