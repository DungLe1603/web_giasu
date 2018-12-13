<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
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
            session()->flash('success', 'Đăng bài thành công!');
            return redirect('post');
        } else {
            echo "Thêm suất dạy thất bại";
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
        $post = Post::find($id);
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
        $editPost = Post::where('delete_flag', 0)->find($id);
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
            session()->flash('success', 'Chỉnh sửa thành công!');
            return redirect('post');
        } else {
            echo "Chỉnh sửa suất dạy thất bại";
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
        $deletePost = Post::where('delete_flag', 0)->find($id);
        $deletePost->delete_flag = 1;
        if ($deletePost->save()) {
            session()->flash('success', 'Đã xóa thành công!');
            return redirect('post');
        } else {
            echo "Xóa thất bại";
        }
    }
}
