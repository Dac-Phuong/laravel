@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý liên hệ</h3>
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
                        <th>Tiêu đề</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contact as $i => $item)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->created_at}}</td>
                        <td style="width:10%">
                            <form action="{{route('deleteContact',$item->id)}}" method="POST">
                                <a onclick="" href="{{route('infoContact',$item->id)}}" class="btn btn-info">Xem</a>
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