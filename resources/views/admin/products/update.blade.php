@extends('dashboard')
@section('main')
    <div class="p-5">
        <div class="card p-2">
            <h2 class="text-body text-dark p-2">Sửa sản phẩm </h2>
            <hr>
            <form action="{{ route('updateProduct', $product->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="col d-flex">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" value="{{ $product->name }}" class="form-control" name="name"
                                placeholder="nhập tên sản phẩm">
                            @error('name')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 d-flex p-0">
                            <div class="col-md-6 p-0 pr-2">
                                <label class="form-label">Loại sản phẩm</label>
                                <select class="form-control mb-2" name="category_id">
                                    @foreach ($categories as $items)
                                        <option value="{{ $items->id }}"
                                            {{ $product->category_id == $items->id ? 'selected' : '' }}>{{ $items->name }}
                                        </option>
                                        @error('category_id')
                                            <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                        @enderror
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 p-0 pl-2">
                                <label class="form-label">Loại sản phẩm</label>
                                <select class="form-control mb-2" name="status">
                                    <option value="1">{{ $product->status == 1 ? 'Còn hàng' : 'Hết hàng' }}</option>
                                    <option value="0">Hết hàng</option>
                                    @error('status')
                                        <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô tả sản phẩm </label>
                            <textarea class="form-control" name="description" placeholder="nhập mô tả sản phẩm" id="floatingTextarea2"
                                style="height: 100px">{{ $product->description }}</textarea>
                            @error('description')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 flex-nowrap">
                            <label for="exampleInputPassword1" class="form-label" style="width: 100%;">Hình ảnh sản
                                phẩm</label>
                            <input type="file" value="{{ $product->image }}" name="file_upload">
                            @error('image')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                            <div class="image" style="width: 100px; height: 100px; padding: 10px;">
                                <img style="object-fit: contain" src="/uploads/{{ $product->image }}" alt=""
                                    width="100%" height="100%" style="object-fit: contain">
                            </div>
                        </div>
                        {{-- <div class="mb-3 flex-nowrap">
                        <label for="exampleInputPassword1" class="form-label">Hình ảnh sản phẩm</label>
                        <input type="file" name="image_list" value="{{$product->image_list}}">
                    @error('image_list')
                    <span style="color: red;font-weight: 400">{{$message}}</span>
                    @enderror
                </div> --}}
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Khuyến mãi (%)</label>
                            <input type="number" name="sale" value="{{ $product->sale }}" class="form-control"
                                placeholder="nhập khuyến mãi">
                            @error('sale')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" value="{{ $product->price }}" name="price"
                                placeholder="nhập giá">
                            @error('price')
                                <span style="font-size: 14px; color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" value="{{ $product->quantity }}" value="1"
                                name="quantity">
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Lưu sản phẩm</button>
            </form>
        </div>
    </div>
@endsection
