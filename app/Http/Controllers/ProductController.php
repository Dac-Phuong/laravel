<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct = Products::latest()->paginate(8);
        $categories = Categories::all();
        return view('admin.products.list', compact('listProduct', 'categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'category_id' => 'required',
                'status' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa nhập tên sản phẩm',
                'price.required' => 'Bạn chưa nhập giá sản phẩm',
                'category_id.required' => 'Trường này không được để trống',
                'status.required' => 'Trường này không được để trống',
                'description.required' => 'Bạn chưa nhập mô tả sản phẩm',
            ]
        );
        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        Products::create($request->all());
        return redirect()->route('listProduct')->with('success', 'Thêm sản phẩm thành công');
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
        $product = Products::find($id);
        $categories = Categories::all();
        return view('admin.products.update', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products, $id)
    {
        $oldImagePath = $request->input('old_image');

        if ($request->has('file_upload')) {
            $image = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time() . '-' . 'product.' . $ext;
            $image->move(public_path('uploads'), $file_name);
            $request->merge(['image' => $file_name]);
        } else {
            $request->merge(['image' => $oldImagePath]);
        }
        $data = $request->all();
        $products = Products::findOrFail($id);
        $products->update($data);
        return redirect()->route('listProduct')->with('success', 'Sửa phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        if ($product) {
            $product->delete();
            return redirect()->route('listProduct')->with('success', 'xóa sản phẩm thành công!');
        }
    }
}
