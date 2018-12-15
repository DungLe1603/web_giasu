<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Requests\RegisterTutor;
use App\Http\Controllers\Controller;
use App\Tutor;
use App\User;
use App\Gender;
use File, Input;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::where('delete_flag', 0)->paginate(4);
        return view('tutor\giasu', compact('tutors'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::all();
        return view('tutor\dangkygiasu', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterTutor $request)
    {

        // $this->validate($request, [
        //     'name' => 'required|min:3',
        //     'address' => 'required|min:3',
        //     'phone' => 'required|max:9',
        //     'password' => 'required|min:3|max:32',
        //     'repassword' => 'required|same:password',
        //     'school' => 'required|min:3',
        //     'subject' => 'required|min:3',
        //     'time' => 'required|min:3',
        //     'salary' => 'required|min:3'

        // ], [
        //     'name.required' => 'Bạn chưa nhập tên'
        // ]);


        $tutors = new Tutor();
        $tutors->name = $request->name;
        $tutors->gender_id = $request->gender_id;
        $tutors->birthday = $request->birthday;
        $tutors->address = $request->address;
        $tutors->phone = $request->phone;
        $tutors->school = $request->level;
        $tutors->school = $request->school;
        $tutors->subject = $request->subject;
        $tutors->time = $request->time;
        $tutors->salary = $request->salary;

        $file_name = $request->file('filename')->getClientOriginalName();
        $file = $request->file('filename');
        $file->move('images', $file_name);
        $tutors->picture = $file_name;

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        
        if ($tutors->save() && $user->save()) { 
            session()->flash('success', 'Đăng ký gia sư thành công!');
           return redirect('tutor');
        } else{
            echo "fail";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tutor = Tutor::find($id);
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
        $tutor = Tutor::find($id);
        return view('tutor\chinhsuagiasu', compact('tutor'));
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
        $editTutor = Tutor::where('delete_flag', 0)->find($id);

        $editTutor->name = $request->name;
        $editTutor->gender_id = $request->gender_id;
        $editTutor->birthday = $request->birthday;
        $editTutor->address = $request->address;
        $editTutor->phone = $request->phone;
        $editTutor->level = $request->level;
        $editTutor->school = $request->school;
        $editTutor->subject = $request->subject;
        $editTutor->time = $request->time;
        $editTutor->salary = $request->salary;
        
        if ($request->filename) {
            $file_name = $request->file('filename')->getClientOriginalName();
            $file = $request->file('filename');
            $file->move('images', $file_name);
            $editTutor->picture = $file_name;
        }

        if ($editTutor->save()) { 
            session()->flash('success', 'Chỉnh sửa thành công!');
            return redirect('tutor');
        } else {
            echo "Chỉnh sửa thất bại";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request, $id)
    {
        $user = User::where('delete_flag', 0)->find($id);
        $user->password = bcrypt($request->password);
        if ($user->save()) {
            session()->flash('success', 'Đổi mật khẩu thành công!');
            return redirect('tutor');
        } else {
            echo "Đổi mật khẩu thất bại";
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTutor = Tutor::where('delete_flag', 0)->find($id);
        $deleteTutor->user->delete_flag = 1;
        $deleteTutor->delete_flag = 1;
        if ( ($deleteTutor->save()) && ($deleteTutor->user->save()) ) {
            session()->flash('success', 'Đã xóa thành công!');
            return redirect('tutor');
        } else {
            echo "Xóa thất bại";
        }
    }
}
