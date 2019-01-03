<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('edit', 'update', 'destroy');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('delete_flag', 0)
                        ->orderBy('id', 'desc') ->paginate(4);
        return view('post\baidang', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post\dangbaitimgiasu');
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
            'parent_name' => 'required|min:3',
            'address' => 'required|min:3',
            'phone' => 'required|min:8|numeric',
            'subject' => 'required|min:3',
            'number_student' => 'required|min:1|max:100',
            'number_time' => 'required|min:1|max:100', 
            'time' => 'required|min:3',
            'payment' => 'required|min:3',

        ], [
            'parent_name.required' => 'Vui lòng nhập họ và tên',
            'parent_name.min' =>"Họ tên phải ít nhất 3 kí tự",
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'số điện thoại quá ngắn', 
            'phone.numeric' => 'Nhập sai định dạng số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.min' => 'Địa chỉ nhà ít nhất 3 kí tự',
            'subject.required' => 'Vui lòng nhập họ và tên',
            'subject.min' => 'Vui lòng nhập lại môn học ',
            'number_time.required' => 'Vui lòng nhập số buổi/tuần',
            'number_time.min' => 'Nhập số buổi/tuần ít nhất 3 kí tự', 
            'number_time.max' => 'Nhập số buổi/tuần tối đa 100 kí tự', 
            'time.required' => 'Vui lòng nhập họ và tên',
            'time.min' => 'Nhập thời gian sai',
            'payment.required' => 'Vui lòng nhập thời gian', 
            'payment.min' => 'Nhập lương sai',
        ]);

        $createPost = new Post;
        $createPost->parent_name = $request->parent_name;
        $createPost->address = $request->address;
        $createPost->phone = $request->phone;
        $createPost->subject = $request->subject;
        $createPost->number_student = $request->number_student;
        $createPost->number_time = $request->number_time;
        $createPost->time = $request->time;
        $createPost->payment = $request->payment;
        $createPost->requirement = $request->requirement;
        if ($createPost->save()) {
            session()->flash('message', 'Đăng bài thành công!');
            return redirect('post');
        } else {
            session()->flash('message', 'Đăng bài thất bại!');
            return redirect('post');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post\suabaidang', compact('post'));
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
        $editPost = Post::where('delete_flag', 0)->findOrFail($id);

        $this->validate($request, [
            'parent_name' => 'required|min:3',
            'address' => 'required|min:5',
            'phone' => 'required|min:8|numeric',
            'subject' => 'required|min:3',
            'number_student' => 'required|min:1|max:100',
            'number_time' => 'required|min:1|max:100', 
            'time' => 'required|min:3',
            'payment' => 'required|min:3',

        ], [
            'parent_name.required' => 'Vui lòng nhập họ và tên',
            'parent_name.min' =>"Họ tên phải ít nhất 5 kí tự",
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'số điện thoại quá ngắn', 
            'phone.numeric' => 'Nhập sai định dạng số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.min' => 'Địa chỉ nhà ít nhất 3 kí tự',
            'subject.required' => 'Vui lòng nhập họ và tên',
            'subject.min' => 'Vui lòng nhập lại môn học ',
            'number_time.required' => 'Vui lòng nhập số buổi/tuần',
            'number_time.min' => 'Nhập số buổi/tuần ít nhất 3 kí tự', 
            'number_time.max' => 'Nhập số buổi/tuần tối đa 100 kí tự', 
            'time.required' => 'Vui lòng nhập họ và tên',
            'time.min' => 'Nhập thời gian sai',
            'payment.required' => 'Vui lòng nhập thời gian', 
            'payment.min' => 'Nhập lương sai',
        ]);

        $editPost->parent_name = $request->parent_name;
        $editPost->address = $request->address;
        $editPost->phone = $request->phone;
        $editPost->subject = $request->subject;
        $editPost->number_student = $request->number_student;
        $editPost->number_time = $request->number_time;
        $editPost->time = $request->time;
        $editPost->payment = $request->payment;
        $editPost->requirement = $request->requirement;
        if ($editPost->save()) {
            session()->flash('message', 'Chỉnh sửa thành công!');
            return redirect('post');
        } else {
            session()->flash('message', 'Chỉnh sửa thất bại!');
            return redirect('post');
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
        $deletePost = Post::where('delete_flag', 0)->findOrFail($id);
        $deletePost->delete_flag = 1;
        if ($deletePost->save()) {
            session()->flash('message', 'Đã xóa thành công!');
            return redirect('post');
        } else {
            session()->flash('message', 'Xóa thất bại!');
            return redirect('post');
        }
    }
}
