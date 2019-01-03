<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Requests\RegisterTutor;
use App\Http\Controllers\Controller;
use App\Tutor;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Gender;
use File, Input;

class TutorController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'update', 'destroy', 'changePassword');
    }
    
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
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:8|numeric',
            'password' => 'required|min:3|max:50',
            'repassword' => 'required|same:password',
            'level' => 'required|min:3|max:80',
            'school' => 'required|min:3',
            'subject' => 'required|min:3',
            'time' => 'required|min:3',
            // 'salary' => 'required|min:3',
            'username' => 'required|min:3|unique:users'

        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'name.min' =>"Họ tên phải ít nhất 3 kí tự",
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'số điện thoại quá ngắn', 
            'phone.numeric' => 'Nhập sai định dạng số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.min' => 'Địa chỉ nhà ít nhất 3 kí tự',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'Mật khẩu quá dài',
            'repassword.required' => 'Vui lòng xác nhật mật khẩu',
            'repassword.same' => 'Xác nhận mật khẩu không đúng',
            'level.required' => 'Vui lòng nhập bạn trường "hiện là"',
            'level.min' => 'Trường"hiện là" phải nhập ít nhất 3 kí tự', 
            'level.max' => 'Trường"hiện là" nhập tối đa 80 kí tự', 
            'school.required' => 'Vui lòng nhập Trường đã hoặc đang học',
            'school.min' => 'Nhập sai Trường',
            'subject.required' => 'Vui lòng nhập họ và tên',
            'subject.min' => 'Vui lòng nhập lại môn học ',
            'time.required' => 'Vui lòng nhập họ và tên',
            'time.min' => 'Nhập thời gian sai',
            // 'salary.required' => 'Vui lòng nhập thời gian', 
            // 'salary.min' => 'Nhập lương sai',
            'username.required' => 'Vui lòng nhập tên đăng nhập',
            'username.min' => 'Vui lòng nhập tên đăng nhập ít nhất 3 kí tự',
            'username.unique' => 'Tên đăng nhập đã tồn tại, vui lòng chọn tên khác',
        ]);


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

        if ($request->filename) {
                $file_name = $request->file('filename')->getClientOriginalName();
                $file = $request->file('filename');
                $file->move('images', $file_name);
                $editTutor->picture = $file_name;
            }

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        
        if ($tutors->save() && $user->save()) { 
            session()->flash('message', 'Đăng ký gia sư thành công!');
           return redirect('tutor');
        } else{
            session()->flash('message', 'Đăng ký gia sư thất bại!');
           return redirect('tutor.create');
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
       $tutor = Tutor::findOrFail($id);
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
        $tutor = Tutor::findOrFail($id);
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
        $editTutor = Tutor::where('delete_flag', 0)->findOrFail($id);

        $this->validate($request, [
            'name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:9|numeric',
            'school' => 'required|min:3',
            'level' => 'required|min:3|max:80',
            'subject' => 'required|min:3',
            'time' => 'required|min:3',
            // 'salary' => 'required|min:3',

        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'name.min' =>"Họ tên phải ít nhất 3 kí tự",
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'số điện thoại quá ngắn', 
            'phone.numeric' => 'Nhập sai định dạng số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.min' => 'Địa chỉ nhà ít nhất 3 kí tự',
            'school.required' => 'Vui lòng nhập Trường đã hoặc đang học',
            'school.min' => 'Nhập sai Trường',
            'level.required' => 'Vui lòng nhập bạn trường "hiện là"',
            'level.min' => 'Trường"hiện là" phải nhập ít nhất 3 kí tự', 
            'level.max' => 'Trường"hiện là" nhập tối đa 80 kí tự', 
            'subject.required' => 'Vui lòng nhập họ và tên',
            'subject.min' => 'Vui lòng nhập lại môn học ',
            'time.required' => 'Vui lòng nhập họ và tên',
            'time.min' => 'Nhập thời gian sai',
            // 'salary.required' => 'Vui lòng nhập thời gian', 
            // 'salary.min' => 'Nhập lương sai',
        ]);

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
            session()->flash('message', 'Chỉnh sửa thành công!');
            return redirect('tutor');
        } else {
            session()->flash('message', 'Chỉnh sửa thất bại!');
            return redirect('tutor');
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

        $user = User::where('delete_flag', 0)->findOrFail($id);
        if((!Auth::user()->roleAdmin()) || (Auth::user()->id == $id)) {
            $this->validate($request, [

                'oldpassword' => 'required|min:3|max:50',
                'password' => 'required|min:3|max:50',
                'repassword' => 'required|same:password',

            ], [
                'oldpassword.required' => 'Vui lòng nhập mật khẩu cũ',
                'oldpassword.min' => 'Nhập sai mật khẩu cũ',
                'oldpassword.max' => 'Nhập sai mật khẩu cũ',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu mới phải có ít nhất 3 kí tự',
                'password.max' => 'Mật khẩu mới quá dài',
                'repassword.required' => 'Vui lòng xác nhật mật khẩu',
                'repassword.same' => 'Xác nhận mật khẩu không đúng',
            ]);
        }
        else{
            $this->validate($request, [

                'password' => 'required|min:3|max:50',
                'repassword' => 'required|same:password',

            ], [
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu mới phải có ít nhất 3 kí tự',
                'password.max' => 'Mật khẩu mới quá dài',
                'repassword.required' => 'Vui lòng xác nhật mật khẩu',
                'repassword.same' => 'Xác nhận mật khẩu không đúng',
            ]);
        }
        if (!\Hash::check($request->oldpassword, $user->password)) {
            session()->flash('message', 'Mật khẩu cũ không chính xác!');
            return redirect()->route('tutor.edit', $id);
        }
        $user->password = bcrypt($request->password);
        if ($user->save()) {
            session()->flash('message', 'Đổi mật khẩu thành công!');
            return redirect('tutor');
        } else {
            session()->flash('message', 'Đổi mật khẩu thất bại!');
            return redirect('tutor.edit');
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
        $deleteTutor = Tutor::where('delete_flag', 0)->findOrFail($id);
        $deleteTutor->user->delete_flag = 1;
        $deleteTutor->delete_flag = 1;
        if ( ($deleteTutor->save()) && ($deleteTutor->user->save()) ) {
            session()->flash('message', 'Đã xóa thành công!');
            return redirect('tutor');
        } else {
            session()->flash('message', 'Xóa thẩt bại!');
            return redirect('tutor');
        }
    }
}
