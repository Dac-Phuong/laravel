@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý người dùng</h3>
                </div>
            </div>
        </div>
        <div class="card-boby">
            @if (Session::has('error'))
            <div class="alert alert-success">
                {{Session::get('error')}}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listUser as $user)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>

                        <td>{{$user->created_at}}</td>
                        <td style="width:10%">
                            <form action="{{route('deleteUser',$user->id)}}" method="POST">
                                <a onclick="" href="{{route('infoUser',$user->id)}}" class="btn btn-info">Xem</a>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('bạn có chắc muốn xóa ?')" type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection