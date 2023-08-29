@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card p-2">
        <h2 class="text-body text-dark p-2">Thêm sản phẩm mới</h2>
        <hr>
        <form action="{{route('postCreate')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="col d-flex">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" placeholder="nhập tên sản phẩm">
                        @error('name')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex p-0">
                        <div class="col-md-6 p-0 pr-2">
                            <label class="form-label">Loại sản phẩm</label>
                            <select class="form-control mb-2" name="category_id">
                                <option value="">Chọn loại sản phẩm</option>
                                @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                                @error('category_id')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                                @enderror
                            </select>
                        </div>
                        <div class="col-md-6 p-0 pl-2">
                            <label class="form-label">Trạng thái </label>
                            <select class="form-control mb-2" name="status">
                                <option value="">Chọn trạng thái</option>
                                <option value="1">Còn hàng</option>
                                <option value="0">Hết hàng</option>
                                @error('status')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mô tả sản phẩm </label>
                        <textarea class="form-control" name="description" placeholder="nhập mô tả sản phẩm"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                        @error('description')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3 flex-nowrap">
                        <label for="exampleInputPassword1" class="form-label w-full">Hình ảnh sản phẩm</label>
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="file" name="image_list">
                        @error('image_list')
                        <span style="color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div> --}}
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Khuyến mãi (%)</label>
                        <input type="number" value="0" name="sale" class="form-control" placeholder="nhập khuyến mãi">
                        @error('sale')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
                        <input type="text" class="form-control" name="price" placeholder="nhập giá">
                        @error('price')
                        <span style="font-size: 14px; color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số lượng</label>
                        <input type="number" class="form-control" value="1" name="quantity">
                    </div>
                    <div class="mb-3 flex-nowrap">
                        <label for="exampleInputPassword1" class="form-label w-full">Hình ảnh sản phẩm</label>
                        <input type="file" class="form-control" name="file_upload">
                        @error('image')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Thêm sản phẩm</button>
        </form>
    </div>
</div>
@endsection