@extends('layout')
@php
    $item_Cart = session('cart');
    $totalAmount = 0;
    $ship = 30000;
    $provinces_id = '';
@endphp
@section('main')
    <form action="{{ route('createOrder') }}" method="POST" accept-charset="utf-8">
        @csrf
        <section id="checkout-cart">
            <div class="container">

                <div class="col-md-12">
                    <div class="wrapper overflow-hidden d-flex flex-wrap">
                        <div class="checkout-content col-md-7 ">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-login-checkout" style="margin-bottom: 20px">
                                <p class="text-center">Địa chỉ giao hàng của quý khách</p>
                                <div class="wrap-info"
                                    style="width: 100%; min-height: 1px; overflow: hidden; padding: 10px;">
                                    <table class="table tinfo" style="width: 90%;">
                                        <tbody>
                                            <tr style="border-style: hidden !important">
                                                <td class="width30 text-right td-right-order">Khách hàng: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Họ và tên"
                                                        name="name" disabled value="{{ Auth::user()->name }}">
                                                    <div class="error"></div>
                                                </td>
                                            </tr>
                                            <tr style="border-style: hidden">
                                                <td class="width30 text-right td-right-order">Email: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ Auth::user()->email }}" placeholder="Email" readonly=""
                                                        fdprocessedid="zzkben">
                                                    <div class="error"></div>
                                                </td>
                                            </tr>

                                            <tr style="border-style: hidden">
                                                <td class="width30 text-right td-right-order">Số điện thoại: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Số điện thoại"
                                                        name="phone" value="{{ Auth::user()->phone }}" readonly=""
                                                        fdprocessedid="xznm4f">
                                                    <div class="error"></div>
                                                </td>
                                            </tr>
                                            <tr style="border-style: hidden">
                                                <td class="width30 text-right td-right-order">Tỉnh/Thành phố: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <select name="provinces_id" id="province" onchange="renderDistrict()"
                                                        class="form-control next-select" fdprocessedid="ulrk3">
                                                        <option value="">--- Chọn tỉnh thành ---</option>
                                                        @foreach ($province as $key => $value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                        @error('provinces_id')
                                                            <span
                                                                style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                                        @enderror
                                                    </select>
                                                </td>
                                            </tr>
                                            @php
                                                echo $provinces_id;
                                            @endphp
                                            <tr style="border-style: hidden">
                                                <td class="width30 text-right td-right-order">Quận/Huyện: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <select name="districts_id" id="districts_id"
                                                        class="form-control next-select" fdprocessedid="iupced">
                                                        <option value="">--- Chọn quận huyện ---</option>
                                                        @foreach ($district as $key => $value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                        @error('districts_id')
                                                            <span
                                                                style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                                        @enderror
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr style="border-style: hidden">
                                                <td class="width30 text-right td-right-order">Địa chỉ giao hàng: <span
                                                        class="require_symbol">* </span></td>
                                                <td>
                                                    <textarea name="address" placeholder="Địa chỉ giao hàng:" class="form-control" rows="4"
                                                        style="height: auto !important;" value=""></textarea>
                                                    @error('address')
                                                        <span
                                                            style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr style="border-style: hidden">
                                                <td style="border: none;"></td>
                                                <td style="border: none;">
                                                    <div class="btn-checkout frame-100-1 overflow-hidden border-pri"
                                                        style="float: right;width: 100%;">
                                                        <button type="submit" style="width: 100%;border-radius:0px"
                                                            class="btn btn-primary">Đặt hàng</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 products-detail">
                            <div class="no-margin-table col-login-checkout" style="width: 95%;">
                                <p>Thông tin đơn hàng</p>
                                <table class="table" style="color: #333">
                                    <tbody>
                                        <tr style="border-style: hidden" class="text-transform font-weight-600">
                                            <td style="width: 150px;">
                                                <h4 style="font-size: 16px;">Tên sản phẩm</h4>
                                            </td>
                                            <td class="text-center">
                                                <h4 style="font-size: 16px;">Số lượng</h4>
                                            </td>
                                            <td class="text-center">
                                                <h4 style="font-size: 16px;">Giá</h4>
                                            </td>
                                            <td class="text-center">
                                                <h4 style="font-size: 16px;">Tổng</h4>
                                            </td>
                                        </tr>
                                        @foreach ($item_Cart as $key => $item)
                                            @php
                                                $subtotal = $item['quantity'] * $item['price'];
                                                $totalAmount += $subtotal;
                                            @endphp
                                            <tr style="border-style: hidden">
                                                <td style="font-size: 14px">{{ $item['name'] }}</td>
                                                <td class="text-center,font-size: 14px">{{ $item['quantity'] }}</td>
                                                <td style="border-bottom-width: 0px;font-size: 14px">
                                                    {{ number_format($item['price']) }}đ</td>
                                                <td style="float: right;border-bottom-width: 0px;font-size: 14px">
                                                    {{ number_format($item['price'] * $item['quantity']) }}đ</td>
                                            </tr>
                                        @endforeach
                                        <tr style="border-style: hidden">
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Tổng cộng :</td>
                                            <td style="float: right;border-bottom-width: 0px;">
                                                {{ number_format($totalAmount) }}đ</td>
                                        </tr>
                                        <tr style="border-style: hidden">
                                            <td colspan="3">
                                                <p style="font-size: 12px;">(Phí giao hàng)</p>
                                            </td>
                                            <td style="float: right;border-bottom-width: 0px;">{{ number_format($ship) }}đ
                                            </td>
                                        </tr>
                                        <tr style="background: #f4f4f4;border-style: hidden !important">
                                            <td colspan="3">
                                                <p style="font-size: 16px; color: red;">Thành tiền</p>
                                                <span style="font-weight: 100; font-style: italic;">(Tổng số tiền thanh
                                                    toán)</span>
                                            </td>
                                            <td class="text-center">
                                                <p style="font-size: 16px; color: red;">
                                                    {{ number_format($totalAmount + $ship) }}đ
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (Session::has('message'))
        <script>
            swal("Message", "{{ Session::get('message') }}", 'success', {
                button: true,
                button: "oke",
                timer: 4000,
            })
        </script>
    @endif
@endsection
