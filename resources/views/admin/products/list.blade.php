@extends('dashboard')
@section('main')
<div class="p-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Danh sánh sản phẩm</h3>
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
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Khuyến mãi</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listProduct as $item)
                    <tr>
                        <td>{{++$i}}</td>
                        <td style="width:20%"> {{$item->name}}</td>
                        <td><img src="/uploads/{{$item->image}}" alt="" width="100%" height="50px" style="object-fit: contain"></td>
                        @foreach($categories as $items)
                        @if($item->category_id == $items->id)
                        <td>
                            {{$items->name}}
                        </td>
                        @endif
                        @endforeach
                        <td>{{$item->sale}}%</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->created_at}}</td>
                        @if($item->status == 1)
                        <td>Còn hàng</td>
                        @else
                        <td>Hết hàng</td>
                        @endif
                        <td style="width:10%">
                            <form action="{{route('deleteProduct',$item->id)}}" method="POST">
                                <a href="{{route('editProduct',$item->id)}}" class="btn btn-info">Sửa</a>
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
    {!! $listProduct->links()!!}
</div>
@endsection
