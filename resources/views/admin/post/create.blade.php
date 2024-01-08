@extends('dashboard')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-2">
            <h4 class="text-body fs-4 text-dark p-4">Thêm bài viết mới</h4>
            <hr>
            <form action="{{ route('postPosts') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="col d-flex p-4">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề bài viết</label>
                            <input type="text" required class="form-control" name="title" placeholder="nhập tiêu đề">
                            @error('name')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">Chọn ảnh bài viết</label>
                            <input type="file"  name="file_upload" class="form-control">
                            @error('image')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-bio">Mô tả bài viết</label>
                            <textarea class="form-control"  name="description" id="basic-default-bio" rows="3" required></textarea>
                            @error('description')
                                <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="exampleInputPassword1" class="form-label">Chi tiết bài viết</label>
                        <div class="form-floating mb-3">
                            <textarea id="editor"  class="form-control" name="upload" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-4 mt-0">Lưu bài viết</button>
            </form>
        </div>
    </div>
@endsection
