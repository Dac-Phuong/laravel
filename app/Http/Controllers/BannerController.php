<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.list', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'image' => 'required',
        //     ],
        //     [
        //         'name.required' => 'Bạn chưa nhập tên Banner',
        //         'image.required' => 'Bạn chưa chọn file ảnh',
        //     ]
        // );
        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        Banner::create($request->all());
        return redirect()->route('listBanner')->with('success', 'Thêm Banner thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.update', compact('banner'));
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
        $banner = Banner::find($id);
        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $data = $request->all();
        $banner->update($data);
        return redirect()->route('listBanner')->with('success', 'Sửa Banner thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Banner::find($id);
        if ($id) {
            $id->delete();
            return redirect()->route('listBanner')->with('success', 'Xóa Banner thành công');
        }
    }
}
