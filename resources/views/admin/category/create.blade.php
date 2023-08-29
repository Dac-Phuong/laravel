@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card p-2">
        <h2 class="text-body text-dark p-2">Thêm danh mục mới</h2>
        <hr>
        <form action="{{route('postCreateCategory')}}" method="POST">
            @csrf
            <div class="col">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" name="name" placeholder="nhập tên sản phẩm">
                        @error('name')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary ml-3">Thêm danh mục</button>
            </div>
        </form>
    </div>
</div>
@endsection
