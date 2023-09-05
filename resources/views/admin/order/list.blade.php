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
                        <tr style="text-align: center">
                            <th>STT</th>
                            <th>Tên người dùng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng giá đơn hàng</th>
                            <th>Ngày tạo đơn hàng</th>
                            <th>Trạng thái</th>
                            <th colspan="2">Xử lý đơn</th>
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
                                @if ($item->status == 0)
                                    <td>Đang chờ duyệt</td>
                                @elseif($item->status == 1)
                                    <td>Đang giao hàng</td>
                                @else
                                    <td>Hoàn thành</td>
                                @endif
                                <td
                                    style="display:flex; width: 100% ; justify-content: space-between;border-top: none;border-left: none;border-right: none">
                                    @if ($item->status == 1)
                                        <form action="{{ route('update_status', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-primary">Xác nhật thanh toán</button>
                                        </form>
                                    @elseif($item->status == 2)
                                        <button disabled type="submit" class="btn btn-default">Đơn hàng đã hoàn
                                            thành</button>
                                    @else
                                        <form action="{{ route('update_status', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success">Duyệt đơn hàng</button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == 0 || $item->status == 1)
                                        <form action="{{ route('delete_item', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('bạn có chắc muốn xóa ?')" type="submit"
                                                class="btn btn-danger">Hủy đơn</button>
                                        </form>
                                    @endif
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
        {!! $orders->links() !!}
    </div>
@endsection
