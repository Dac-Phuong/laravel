@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản lý Banner</h3>
                </div>
            </div>
        </div>
        <div class="card-boby">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Banner</th>
                        <th>Ảnh Banner</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banner as $i => $item)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$item->name}}</td>
                        <td ><img src="/uploads/{{$item->image}}" alt="" width="100%" height="50px" style="object-fit: contain"></td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <form action="{{route('deleteBanner',$item->id)}}" method="POST">
                                <a onclick="" href="{{route('editBanner',$item->id)}}" class="btn btn-info">Sửa</a>
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