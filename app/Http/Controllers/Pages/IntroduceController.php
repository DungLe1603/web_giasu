<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    public function getIntroduction(){
    	return view('gioithieu');
    }

    public function getHaichau()
    {
        return view('district.haichau');
    }

    public function getThanhKhe()
    {
        return view('district.thanhkhe');
    }

    public function getLienChieu()
    {
        return view('district.lienchieu');
    }

    public function getSonTra()
    {
        return view('district.sontra');
    }

    public function getNguHanhSon()
    {
        return view('district.nguhanhson');
    }
}
