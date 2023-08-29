@extends('dashboard')
@php
    $ship = 30000;
@endphp
@section('main')
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div id="view" class="view p-4">
                            <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <h1 class="text-center mt-4" style="color: red;">CHI TIẾT ĐƠN HÀNG</h1>
                                <h4>Tên khách hàng: <b>{{ $orders->name }}</b></h4>
                                <h4>Điện thoại: <i>{{ $orders->phone }}</i></h4>
                                <h4>Thời gian đặt hàng: <i>{{ $orders->created_at }}</i></h4>
                                <h4>Địa chỉ: {{ $orders->address }}</h4>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th class="text-center" style="width:100px">Số lượng</th>
                                                <th style="width:120px">Giá bán</th>
                                                <th class="text-right" style="width:120px">Thành tiền</th>
                                            </tr>
                                        </thead>
                                     
                                        <tbody>
                                            @foreach ($orders_detail as $i => $item)
                                                @if ($item->orders_id === $orders->id)
                                                   <tr>
                                                        <td class="text-center">{{++$i}}</td>
                                                        <td>{{$item->name_product}}</td>
                                                        <td class="text-center">{{$item->quantity}}</td>
                                                        <td>{{number_format($item->price)}}đ</td>
                                                        <td class="text-right">
                                                           {{number_format($item->price * $item->quantity)}}đ
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; font-size: 1.1em;">Tổng cộng:
                                                    {{ number_format($orders->total_price - $ship) }}đ</td>
                                            </tr>

                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; font-size: 0.9em;"><i>Phí vận chuyển: </i>
                                                    30,000₫
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; color: red; font-size: 1.3em;">Thành tiền:
                                                    {{ number_format($orders->total_price) }}đ</td>
                                            </tr>

                                            <tr>
                                                <td class="text-right" colspan="6">
                                                    <a class="btn btn-primary btn-md" role="button"
                                                        onclick="window.print()">
                                                        <span class="glyphicon glyphicon-print"></span> In đơn hàng
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <ul class="pagination">
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/.ND-->
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
@endsection
<style>
    .view h4 {
        font-size: 1.1rem;
    }
</style>
