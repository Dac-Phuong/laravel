<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_' . $extension;
            $request->file('upload')->move(public_path('uploads'), $fileName);
            $url = asset('uploads/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        
        return redirect()->route('listPosts')->with('success', 'Thêm sản phẩm thành công');
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
        $post = Posts::find($id);
        return view('admin.post.update', compact('post'));
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
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_' . $extension;
            $request->file('upload')->move(public_path('uploads'), $fileName);
            $url = asset('uploads/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $data = $request->all();
        $post = Posts::find($id);
        $post->update($data);
        return redirect()->route('listPosts')->with('success', 'Sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Posts::find($id);
        if ($id) {
            $id->delete();
            return redirect()->route('listPosts')->with('success', 'xóa bài viết thành công');
        }
    }
}
