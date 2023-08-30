@extends('layout')
@section('main')
    <div class="container mt-4">
        <div class="container account d-flex">
            <aside class="col-right sidebar col-md-3 col-xs-12">
                <div class="block block-account">
                    <div class="general__title">
                        <h2><span>Thông tin tài khoản</span></h2>
                    </div>
                    <div class="block-content">
                        <p>Họ và tên:<strong>{{ Auth::user()->name }}</strong></p>
                        <p>Email: <strong>{{ Auth::user()->email }}</strong></p>
                        <p>Số điện thoại: <strong>{{ Auth::user()->phone }}</strong></p>
                    </div>
                    @if (Auth::check())
                        <form method="POST" action="{{ route('userLogout') }}">
                            @csrf
                            <button type="submit" class="btn-logout btn btn-primary" style="margin-top: 10px;">
                                <i class="fa-solid fa-right-from-bracket" style="width: 18px;margin-top: -4px"></i>
                                Đăng xuất
                            </button>
                        </form>
                </div>
            </aside>
            <div class="col-main col-md-9 col-sm-12">
                <div class="my-account">
                    <div class="general__title">
                        <h2><span>Danh sách đơn hàng</span></h2>
                    </div>
                    <div class="table-order">
                        <table style="padding-right: 10px; width: 100%;">
                            <thead style="border: 1px solid silver;">
                                <tr style="text-align: center">
                                    <th class="text-left" style=" padding:5px 10px">Đơn hàng</th>
                                    <th style=" padding:5px 10px">Ngày</th>
                                    <th style="text-align: center; padding:5px 10px">
                                        Giá trị đơn hàng
                                    </th>
                                    <th style=" text-align: center;">Trạng thái đơn hàng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody style="border: 1px solid silver;">
                                @foreach ($orders as $key => $item)
                                    @if ($item->user_id == Auth::user()->id)
                                        <tr style="border-bottom: 1px solid silver;text-align: center">
                                            <td style="padding:5px 10px;">{{ ++$key }}</td>
                                            <td style="padding:5px 10px;">{{ $item->created_at }}</td>
                                            <td style="text-align: center; padding:5px 10px;"><span
                                                    class="price-2">{{ number_format($item->total_price) }}đ</span></td>
                                            @if ($item->status == 0)
                                                <td style="padding:5px 10px; text-align: center;">Đang chờ duyệt</td>
                                            @elseif($item->status == 1)
                                                <td style="padding:5px 10px; text-align: center;">Đang giao hàng</td>
                                            @else
                                                <td style="padding:5px 10px; text-align: center;">Đơn hàng đã hoàn thành
                                                </td>
                                            @endif
                                            <td class="d-flex">
                                                <span> <a style="color: #fff;" class="btn btn-primary my-1"
                                                        href="{{ route('ordersDetail', $item->id) }}">Xem chi
                                                        tiết</a></span>
                                                @if ($item->status == 0 || $item->status == 1)
                                                    <form class="m-1" action="{{ route('delete_order', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Bạn có chắc chắn muốn hủy?')"
                                                            type="submit" class="btn btn-danger">Hủy đơn</button>
                                                    </form>
                                                @endif
                                            </td>
                                    @endif
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
