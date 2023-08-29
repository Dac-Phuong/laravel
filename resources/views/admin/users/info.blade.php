@extends('dashboard')

@section('main')
    <div class="p-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thông tin người dùng</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Họ tên</strong>
                                <input disabled type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Nhập mã sinh viên">
                            </div>
                           <div class="form-group">
                                <strong>Email</strong>
                                <input disabled type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Nhập họ tên">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input disabled type="text" value="{{$user->address}}" name="addrees" class="form-control" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input disabled type="text" value="{{$user->phone}}" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">
                        <a class="text-white" href="{{route('getListUser')}}">Thoát</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection