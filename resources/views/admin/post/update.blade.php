@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-4">
            <h4 class="text-body fs-4 text-dark p-2">Sửa bài viết</h4>
            <hr>
            <form action="{{ route('updatePosts', $post->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="col">
                    <div class="col-md-12 p-4">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề bài viết</label>
                            <input type="text" value="{{ $post->title }}" class="form-control" name="title"
                                placeholder="nhập tiêu đề">
                            @error('name')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Chọn ảnh bài viết</label>
                            <input type="file" name="file_upload" class="form-control">
                            @error('image')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô tả ngắn</label>
                            <textarea class="form-control" name="description" placeholder="nhập mô tả ngắn" id="floatingTextarea2"
                                style="height: 100px">{{ $post->description }}</textarea>
                            @error('description')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label for="exampleInputPassword1" class="form-label">Chi tiết bài viết</label>
                            <textarea id="editor" rows="5" class="form-control" name="upload" placeholder="nhập chi tiết bài viết" id="floatingTextarea2">{{ $post->upload }}</textarea>
                            @error('description')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Lưu bài viết</button>
            </form>
        </div>
    </div>
@endsection
