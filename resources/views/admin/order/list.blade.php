@extends('dashboard')
@section('main')
    <div class="p-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Danh sánh đơn hàng</h3>
                    </div>
                </div>
            </div>
            <div class="card-boby">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên người dùng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng giá đơn hàng</th>
                            <th>Ngày tạo đơn hàng</th>
                            <th>Trạng thái</th>
                            <th>Xử lý đơn</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $i => $item)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td> {{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ number_format($item->total_price) }}đ</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->status }}</td>
                                <td
                                    style="display:flex; width: 100% ; justify-content: space-between;border-top: none;border-left: none;border-right: none">
                                    <form action="{{ route('deleteProduct', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Xác nhận thanh toán</button>
                                    </form>
                                    <form action="{{ route('deleteProduct', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hủy đơn</button>
                                    </form>
                                    <form action="{{ route('delete_item', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('bạn có chắc muốn xóa ?')" type="submit"
                                            class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                                <td style="">
                                    <a onclick="" href="{{ route('order_Detail', $item->id) }}"
                                        class="btn btn-primary">Xem chi tết</a>
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
