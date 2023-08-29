@extends('layout')
@section('main')
<div class="container d-flex justify-content-center py-4">
    <div class="col-md-5 form-login">
         @if (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
         @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
        <h2>ĐĂNG NHẬP</h2>
        <form action="{{route('userLogin')}}" method="POST">
            @csrf
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">TÀI KHOẢN:*</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 @error('email')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">MẬT KHẨU:*</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                 @error('password')
                <span style="font-size: 14px;color: red;font-weight: 400">{{$message}}</span>
                @enderror
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <a class="form-link" href="{{URL::to('/register')}}">Người dùng mới? Đăng ký tài khoản</a>
            </div>
        </form>
    </div>
</div>
@endsection