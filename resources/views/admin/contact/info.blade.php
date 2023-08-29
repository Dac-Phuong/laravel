@extends('dashboard')

@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thông tin liên hệ</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Họ tên</strong>
                            <input disabled type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="Nhập mã sinh viên">
                        </div>
                        <div class="form-group">
                            <strong>Email</strong>
                            <input disabled type="text" name="email" value="{{$item->email}}" class="form-control" placeholder="Nhập họ tên">
                        </div>
                         <div class="form-group">
                            <strong>Mô tả</strong>
                            <textarea disabled class="form-control" name="description" placeholder="nhập mô tả ngắn" id="floatingTextarea2" style="height: 100px">{{$item->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Số điện thoại</strong>
                            <input disabled type="text" value="{{$item->phone}}" name="addrees" class="form-control" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                            <strong>Tiêu đề</strong>
                            <input disabled type="text" value="{{$item->title}}" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                        </div>
                       
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">
                    <a class="text-white" href="{{route('listContact')}}">Thoát</a>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
