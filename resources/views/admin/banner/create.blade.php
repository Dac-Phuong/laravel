@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card p-2">
        <h2 class="text-body text-dark p-2">Thêm danh Banner</h2>
        <hr>
        <form action="{{route('postBanner')}}" enctype="multipart/form-data"  method="POST">
            @csrf
            <div class="col">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Tên danh Banner</label>
                        <input type="text" class="form-control" name="name" placeholder="nhập tên sản phẩm">
                        @error('name')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="width: 100%;">Chọn ảnh Banner</label>
                        <input type="file"name="file_upload">
                        @error('name')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary ml-3">Thêm Banner</button>
            </div>
        </form>
    </div>
</div>
@endsection
