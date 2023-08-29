@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card p-2">
        <h2 class="text-body text-dark p-2">Sửa bài viết</h2>
        <hr>
        <form action="{{route('updatePosts',$post->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="col d-flex">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Tiêu đề bài viết</label>
                        <input type="text" value="{{$post->title}}" class="form-control" name="title" placeholder="nhập tiêu đề">
                        @error('name')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex p-0">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mô tả ngắn</label>
                        <textarea class="form-control" name="description" placeholder="nhập mô tả ngắn"
                            id="floatingTextarea2" style="height: 100px">{{$post->description}}</textarea>
                        @error('description')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                     <div class="form-floating mb-3">
                        <label for="exampleInputPassword1" class="form-label">Chi tiết bài viết</label>
                        <textarea id="editor"  class="form-control" name="upload" placeholder="nhập chi tiết bài viết"
                            id="floatingTextarea2" style="height: 100px">{{$post->upload}}</textarea>
                        @error('description')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="exampleInputPassword1" class="form-label w-full" style="width: 100%;">Hình đại diện</label>
                        <input type="file" value="" name="file_upload">
                        @error('image')
                        <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Lưu bài viết</button>
        </form>
    </div>
</div>
@endsection