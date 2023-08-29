@extends('layout')
@section('main')
<div class="container d-flex justify-content-center py-4">
     @if (Session::has('erorr'))
            <div class="alert alert-danger">
                {{Session::get('erorr')}}
            </div>
            @endif
    <div class="col-md-5 form-login">
        <h2>ĐĂNG ký</h2>
        <form action="{{route('userRegister')}}" method="POST">
            @csrf
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">EMAIL:*</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
                @error('email')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">MẬT KHẨU:*</label>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" id="exampleInputPassword1">
                @error('password')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">HỌ TÊN:*</label>
                <input type="text" class="form-control" name="name" placeholder="Họ tên" id="exampleInputPassword1">
                @error('name')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">SỐ ĐIỆN THOẠI:*</label>
                <input type="number" class="form-control" name="phone" placeholder="Số điện thoại" id="exampleInputPassword1">
                @error('phone')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <button type="submit" class="btn btn-primary">Đăng ký</button>
                <a class="form-link" href="{{URL::to('/login')}}">Bạn đã có tài khoản? Đăng nhập</a>
            </div>
        </form>
    </div>
</div>
@endsection
