@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Danh sánh bài viết</h3>
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
                        <th>Tiêu đề</th>
                        <th>Ảnh bài viết</th>
                        <th>Mô tả ngắn</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $i => $item)
                    <tr>
                        <td>{{++$i}}</td>
                        <td style="width:20%"> {{$item->title}}</td>
                        <td style="width:10%"><img src="/uploads/{{$item->image}}" alt="" width="100%" height="50px" style="object-fit: contain"></td>
                        <td style="width:20%">{{$item->description}}</td>
                        <td>{{$item->created_at}}</td>
                        <td style="width:10%">
                            <form onclick="return confirm('bạn có chắc muốn xóa ?')" action="{{route('deletePosts',$item->id)}}" method="POST">
                                <a  href="{{route('editPosts',$item->id)}}" class="btn btn-info">Sửa</a>
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
    {{-- {!! $listProduct->links()!!} --}}
</div>
@endsection
