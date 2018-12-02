<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tutors;
use App\Genders;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutors::where('delete_flag', 0)->paginate(4);
        return view('tutor\giasu', compact('tutors'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Genders::all();
        return view('tutor\dangkygiasu', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $createTutor = new Tutors;
        // $createTutor->name = $request->name;
        // $createTutor->gender = $request->gender;
        // $createTutor->birthday = $request->birthday;
        // $createTutor->address = $request->address;
        // $createTutor->phone = $request->phone;
        // $createTutor->level = $request->level;
        // $createTutor->school = $request->school;
        // $createTutor->subject = $request->subject;
        // $createTutor->time = $request->time;
        // $createTutor->salary = $request->salary;
        // $createTutor->picture = $request->picture;

        // $createTutor->user->username = $request->username;
        // $createTutor->user->password = bcrypt($request->password);
        
        // if (($createTutor->save() && ($createTutor->user->save())) {
        //     return redirect('tutor');
        // } else {
        //     echo "Đăng ký gia sư thất bại!";
        // }
        echo "enter store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tutor = Tutors::where('delete_flag', 0)->find($id);
       return view('tutor\chitietgiasu', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "enter edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "enter update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTutor = Tutors::where('delete_flag', 0)->find($id);
        $deleteTutor->user->delete_flag = 1;
        $deleteTutor->delete_flag = 1;
        if ( ($deleteTutor->save()) && ($deleteTutor->user->save()) ) {
            return redirect('tutor');
        } else {
            echo "Xóa thất bại";
        }
    }
}
