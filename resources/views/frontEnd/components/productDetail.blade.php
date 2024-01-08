@extends('layout')
@section('main')
    <section>
        <div class="container">
            <div class="d-flex py-3 align-items-center">
                <span style="color: red">Trang chủ</span>
                <i class="fa-solid fa-angle-right" style="padding: 0 4px;color: #ccc;font-size: 14px"></i>
                @foreach ($categories as $key => $item)
                    @if ($item->id == $item_product->category_id)
                        <span style="color: red">{{ $item->name }}</span>
                    @endif
                @endforeach
                <i class="fa-solid fa-angle-right" style="padding: 0 4px;color: #ccc;font-size: 14px"></i>
                <span>{{ $item_product->name }}</span>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6 border">
                    <img style="width: 100%;object-fit: contain;height: 90%;margin: 3% 0;"
                        src="{{ asset('storage/uploads/' . $item_product->image) }}" alt="">
                </div>
                <div class="col-md-6 py-3 px-3  ">
                    <div class="product-view-name">
                        <h1>{{ $item_product->name }}</h1>
                        <div class="product-view-price">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <span>Giá bán:</span>
                                    <span
                                        style="font-size: 24px; font-weight: bold; font-family: Arial;color: #ed1c24;padding-left: 5px;">
                                        {{ number_format($item_product->price - ($item_product->sale / 100) * $item_product->price) }}đ</span>
                                </div>
                                @if ($item_product->sale > 0)
                                    <del
                                        style="margin-left: 20px;text-align: center">{{ number_format($item_product->price) }}đ</del>
                                @endif
                                @if ($item_product->sale > 0)
                                    <div class="card-sale">
                                        <span style="font-size: 12px">-{{ $item_product->sale }}%</span>
                                    </div>
                                @endif

                            </div>
                            <div class="product-status d-flex">
                                @foreach ($categories as $key => $item)
                                    @if ($item->id == $item_product->category_id)
                                        <p style="margin-right: 10px;">Thương hiệu: {{ $item->name }} </p>
                                    @endif
                                @endforeach
                                @if ($item_product->status == 1)
                                    <p> | Tình trạng: Còn hàng</p>
                                @else
                                    <p>| Tình trạng: Hết hàng</p>
                                @endif
                            </div>
                            <div class="actions-qty__button">
                                <a class="btn py-2" href="{{ route('addToCart', $item_product->id) }}"
                                    style="background: #C3011A;color:#fff;border-radius:0px">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="fk-boxs">
                                <div id="km-detail">
                                    <p class="fk-tit">Khuyến mại đặc biệt (SL có hạn)</p>
                                    <div class="fk-main">
                                        <div class="fk-sales">
                                            <ul>
                                                <li>Tặng PMH Phụ Kiện 2,000,000đ (khi phiếu mua hàng trên 100,000,000 đ)
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>Tặng Flip Cover chính hãng Samsung (Áp dụng đến 26/05) <a href="#"
                                                        target="_blank">Xem chi tiết</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>Giảm thêm 900,000đ khi mua combo sức khỏe - thời trang (Điện thoại +
                                                    Samsung Watch + Samsung Buds) <a href="#" target="_blank">Xem chi
                                                        tiết</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 20px;">
                                <b>Tình trạng</b>
                                <br>
                                <span>Nguyên hộp. Đầy đủ phụ kiện từ nhà sản xuất, gồm: Sạc, cáp, tai nghe, que lấy SIM,
                                    sách hướng dẫn</span>
                            </div>
                            <div style="margin-top: 20px;">
                                <b>Bảo hành</b>
                                <br>
                                <span>Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi
                                    nhà sản xuất.</span><a href="#" style="color:red"> (Chi tiết)</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="description">
                <div class="div">
                    <b>Mô tả ngắn sản phẩm</b>
                </div>
                <span>
                    {{ $item_product->description }}
                </span>
            </div>
            <div class="mt-5">
                <h2
                    style="border-bottom: 3px solid #286CD9;text-transform: uppercase;padding: 5px 0px;font-size: 18px;font-weight: 600;color:#286CD9">
                    Sản phẩm liên quan</h2>
                <div class="d-flex flex-wrap ">
                    <div class="owl-carousel owl-theme">
                        @foreach ($products as $key => $item)
                            <div class="item border" style="border-left: none ">
                                <div style="height: 290px; position: relative;border-left: none !important">
                                    <div class="box-sale">
                                        <span>-{{ $item->sale }}%</span>
                                    </div>
                                    <a class="p-2" style="display: block;height: 70%;"
                                        href="{{ route('productDetail', $item->id) }}">
                                        <img class="product-img" src="{{ asset('storage/uploads/' . $item->image) }}"
                                            style="width: 100%; height: 100%;object-fit: contain"></a>
                                    <div class="p-2 lt-product-group-info">
                                        <h3 class="">{{ $item->name }}</h3>
                                        <div class="price-box">
                                            <p class="price-sale">
                                                {{ number_format($item->price - ($item->sale / 100) * $item->price) }}đ
                                            </p>
                                            <del class=""
                                                style="padding-left: 10px;font-size: 14px;font-weight: 700;color: #716b6b;">
                                                {{ number_format($item->price) }}đ</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if (Session::has('success'))
            <script>
                swal("Thông báo!", "{{ Session::get('success') }}", 'success', {
                    button: true,
                    button: "oke",
                    timer: 4000,
                })
            </script>
        @endif
        {{-- @section('script')
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
    @endsection --}}
    </section>
@endsection
