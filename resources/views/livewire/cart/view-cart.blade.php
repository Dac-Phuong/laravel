<div>
    @php
        $totalAmount = 0;
    @endphp
    @if (count($item_Cart) > 0)
        <div class="container">
            <div class="cart-index items-center">
                <h2 class="text-center" style="margin-top: 20px; margin-bottom: 10px;">Chi tiết giỏ hàng</h2>
                <div class="tbody text-center d-flex flex-wrap">
                    <div class="col-xs-12 col-12 col-sm-12 col-md-9 col-lg-9">
                        <table class="table table-list-product">
                            <thead>
                                <tr style="background: #f3f3f3;">
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th class="text-center">Giá sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Thành tiền</th>
                                    <th class="text-center">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item_Cart as $id => $item)
                                    @php
                                        $subtotal = ($item['price'] - ($item['price'] / 100) * $item['sale']) * $item['quantity'];
                                        $totalAmount += $subtotal;
                                    @endphp
                                    <tr style="vertical-align: middle;" productId={{ $id }}>
                                        <td data-th="product" class="img-product-cart">
                                            <a href="{{ route('productDetail', $id) }}">
                                                <img src="{{ asset('storage/uploads/' . $item['image']) }}"
                                                    alt="" width="100px" height="100px"
                                                    style="object-fit: contain">
                                            </a>
                                        </td>
                                        <td style="width: 30%;">
                                            <a href="{{ route('productDetail', $id) }}" class="pull-left"
                                                style="color: #000">{{ $item['name'] }}</a>
                                        </td>
                                        <td>
                                            <span
                                                class="amount">{{ number_format($item['price'] - ($item['price'] / 100) * $item['sale']) }}đ
                                            </span>
                                        </td>
                                        <td class="">
                                            <div class="quantity align-items-center d-flex clearfix">
                                                <div wire:click="decrease({{ $id }})" class="btn-quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <span>{{ $item['quantity'] }}</span>
                                                <div wire:click="increase({{ $id }})" class="btn-quantity">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="amount">
                                                {{ number_format($subtotal) }}đ</span>
                                        </td>
                                        <td>
                                            <button style="color: #fff" wire:click="deleteCart({{ $id }})"
                                                class="delete-product btn btn-primary" title="Xóa "><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('products') }}" style="border-radius:0px" class="btn btn-primary">Tiếp tục
                            mua
                            hàng
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="clearfix btn-submit" style="padding-left: 10px;margin-top: 20px;">
                            <table class="table total-price" style="border: 1px solid #ececec;">
                                <tbody>
                                    <tr style="background: #f4f4f4;">
                                        <td>Tổng tiền</td>
                                        <td><strong>{{ number_format($totalAmount) }}đ</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5>Mua hàng trực tiếp tại cửa hàng giảm giá 5%</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5>Nếu đặt online Bạn hãy đồng ý với điều khoản sử dụng &amp; hướng dẫn
                                                hoàn
                                                trả.</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div>
                                                @if (Auth::check())
                                                    <a style="width: 100%;border-radius:0px"
                                                        href="{{ route('checkoutPage') }}" class="btn btn-primary">Đặt
                                                        hàng</a>
                                                @else
                                                    <button style="width: 100%;border-radius:0px"
                                                        onclick="return confirm('bạn chưa đăng nhập')" href=""
                                                        class="btn btn-primary alert-messange Swal">Đặt hàng</button>
                                                @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="cart-info ">
                Chưa có sản phẩm nào trong giỏ hàng !
                <br>
                <a href="{{ route('products') }}" class="btn btn-primary">Tiếp tục mua hàng </a>
            </div>
        </div>
    @endif
</div>
