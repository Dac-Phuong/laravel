@extends('layout')
@php
    $ship = 30000;
@endphp
@section('main')
    <div class="container order-page">
        <div class="general__title py-4">
            <h2>Chi tiết đơn hàng</h2>
        </div>
        <div class="table-responsive">
            <fieldset>
                <table class="table table-bordered tb-detail-or">
                    <thead>
                        <tr class="">
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders_detail as $i => $item)
                            @if ($item->orders_id === $orders->id)
                                <tr>
                                    <td>{{ $item->name_product }}</td>
                                    <td class="text-center">{{ $item->quantity }}</td>
                                    <td>{{ number_format($item->price) }}đ</td>
                                    <td class="text-right">
                                        {{ number_format($item->price * $item->quantity) }}đ
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="or-detail-c d-flex flex-wrap">
            <div class="col-sm-8">
                <div class="general__title">
                    <h3>Thông tin thanh toán</h3>
                </div>
                <div class="content-order">
                    <p> Khách hàng: {{ $orders->name }}</p>
                    <p> Số điện thoại: {{ $orders->phone }}</p>
                    <p> Thời gian đặt hàng: {{ $orders->created_at }}</p>
                    <p> Địa chỉ giao hàng: {{ $orders->address }}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="general__title">
                    <h3>Tổng tiền hóa đơn</h3>
                </div>
                <div class="content-order">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td> Tổng tiền đơn hàng </td>
                                <td class="text-right"><span>{{ number_format($orders->total_price - $ship) }}đ</span></td>
                            </tr>

                            <tr>
                                <td>Phí giao hàng:</td>
                                <td class="text-right">30,000đ</td>
                            </tr>
                            <tr>
                                <td> Tổng thanh toán:</td>
                                <td class="text-right"><span
                                        style="color: red; font-size: 23px;">{{ number_format($orders->total_price) }}đ</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <a href="javascript:void(0);" onclick="window.history.back();" class="viewMore pull-left btn btn-primary"
                    style="font-size: 15px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Trở về trang
                    trước</a>
            </div>
        </div>
    </div>
@endsection
