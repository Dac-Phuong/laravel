@section('main')
    <section>
        <div class="container">
            @component('frontEnd.components.slider', ['banner' => $banner])
            @endcomponent
        </div>
    </section>
    {{-- ---------------------------------------------------SẢN PHẨM KHUYẾN MÃI HOT------------------------------------------------------------ --}}
    <section>
        <div class="container mt-4">
            <div class="sale-title">
                <span>SẢN PHẨM KHUYẾN MÃI HOT</span>
            </div>
            <div class="d-flex flex-wrap " style="border: 1px solid #286CD9 ">
                <div class="owl-carousel owl-theme">
                    @foreach ($products_sale as $key => $item)
                        <div class="item">
                            <div class="" style="height: 290px; position: relative;border-left: none !important">
                                <div class="box-sale">
                                    <span>-{{ $item->sale }}%</span>
                                </div>
                                <a class="p-2" style="display: block;height: 70%;"
                                    href="{{ route('productDetail', $item->id) }}">
                                    <img class="product-img" src="/uploads/{{ $item->image }}"
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
    </section>

    {{-- ---------------------------------------------------SẢN PHẨM BÁN CHẠY------------------------------------------------------------ --}}

    <section>
        <div class="container mt-4">
            <div class="sale-title">
                <span>SẢN PHẨM BÁN CHẠY</span>
            </div>
            <div class="d-flex flex-wrap " style="border: 1px solid #286CD9 ">
                <div class="owl-carousel owl-theme">
                    @foreach ($selling_product as $key => $item)
                        @if ($item->sale > 0)
                            <div class="item">
                                <div class=" " style="height: 290px; position: relative;border-left: none !important">
                                    <div class="box-sale">
                                        <span>-{{ $item->sale }}%</span>
                                    </div>
                                    <a class="p-2" style="display: block;height: 70%;"
                                        href="{{ route('productDetail', $item->id) }}">
                                        <img class="product-img" src="/uploads/{{ $item->image }}"
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
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    {{-- ---------------------------------------------------SẢN PHẨM NỔI BẬT------------------------------------------------------------ --}}

    <section>
        <div class="container mt-5">
            <h2 class="list-product"><a href="">ĐIỆN THOẠI NỔI BẬT</a></h2>
            <div class="d-flex flex-wrap" style="border-left: 1px solid #ccc !important">
                @foreach ($products as $key => $item)
                    @if ($item->category_id == 2 || $item->category_id == 3)
                        <div class="col-md-2 border" style="height: 290px; position: relative;border-left: none !important">
                            @if ($item->sale > 0)
                                <div class="box-sale">
                                    <span>-{{ $item->sale }}%</span>
                                </div>
                            @endif
                            <a class="p-2" style="display: block;height: 70%;"
                                href="{{ route('productDetail', $item->id) }}"> <img class="product-img"
                                    src="/uploads/{{ $item->image }}"
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
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    {{-- ---------------------------------------------------SẢN PHẨM NỔI BẬT------------------------------------------------------------ --}}
    <section>
        <div class="container mt-5">
            <h2 class="list-product"><a href="">LAPTOP NỔI BẬT</a></h2>
            <div class="d-flex flex-wrap " style="border-left: 1px solid #ccc !important">
                @foreach ($products as $key => $item)
                    @if ($item->category_id == 7)
                        <div class="col-md-2 border" style="height: 290px; position: relative;border-left: none !important">
                            @if ($item->sale > 0)
                                <div class="box-sale">
                                    <span>-{{ $item->sale }}%</span>
                                </div>
                            @endif
                            <a class="p-2" style="display: block;height: 70%;"
                                href="{{ route('productDetail', $item->id) }}"> <img class="product-img"
                                    src="/uploads/{{ $item->image }}"
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
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    {{-- ---------------------------------------------------SẢN PHẨM NỔI BẬT------------------------------------------------------------ --}}
    <section>
        <div class="container mt-5">
            <h2 class="list-product"><a href="">PHỤ KIỆN NỔI BẬT</a></h2>
            <div class="d-flex flex-wrap" style="border-left: 1px solid #ccc !important">
                @foreach ($products as $key => $item)
                    @if ($item->category_id == 6)
                        <div class="col-md-2 border" style="height: 290px; position: relative;border-left: none !important">
                            @if ($item->sale > 0)
                                <div class="box-sale">
                                    <span>-{{ $item->sale }}%</span>
                                </div>
                            @endif
                            <a class="p-2" style="display: block;height: 70%;"
                                href="{{ route('productDetail', $item->id) }}"> <img class="product-img"
                                    src="/uploads/{{ $item->image }}"
                                    style="width: 100%; height: 100%;object-fit: contain"></a>
                            <div class="p-2 lt-product-group-info">
                                <h3 class="">{{ $item->name }}</h3>
                                <div class="price-box">
                                    <p class="price-sale">
                                        {{ number_format($item->price - ($item->sale / 100) * $item->price) }}đ
                                    </p>
                                    <del class=""
                                        style="padding-left: 10px;font-size: 14px;font-weight: 700;color: #716b6b;">
                                        {{ number_format($item->price, 0) }}đ</del>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container ">
            <h2 class="sectin-title title title-blue">Tin tức công nghệ</h2>
            <div class="d-flex flex-wrap ">
                @foreach ($posts as $key => $item)
                    <div class="col-md-4 border mt-4 ">
                        <a href="{{ route('postsDetail', $item->id) }}" style="display: block;width: 100%;height: 100%;">
                            <div class="card-img overflow-hidden">
                                <img style=" width: 100%;" src="uploads/{{ $item->image }}" alt="">
                            </div>
                            <div class="post p-2 items-center">
                                <div class="d-flex mt-2 align-items-center">
                                    <i class="fa-solid fa-calendar-days" style="color: #716b6b;margin-right: 10px;"></i>
                                    <span style="color: #716b6b">{{ $item->created_at }}</span>
                                </div>
                                <h3 class="card-img-h3">{{ $item->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container d-flex mt-3  flex-wrap justify-content-between">
            <div class="service_item d-flex ">
                <div class="icon_product" style="padding-right: 10px">
                    <img style="width: 50px; height: 50px; object-fit: contain"
                        src="{{ asset('images/icon_142e7.png') }}" alt="">
                </div>
                <div class="description_icon">
                    <span class="large-text">
                        Miễn phí giao hàng
                    </span>
                    <span class="small-text">
                        Cho hóa đơn từ 100,000,000 đ
                    </span>
                </div>
            </div>
            <div class="service_item d-flex">
                <div class="icon_product" style="padding-right: 10px">
                    <img style="width: 50px; height: 50px; object-fit: contain"
                        src="{{ asset('images/icon_242e7.png') }}" alt="">
                </div>
                <div class="description_icon">
                    <span class="large-text">
                        GIAO HÀNG TRONG NGÀY
                    </span>
                    <span class="small-text">
                        Với tất cả đơn hàng
                    </span>
                </div>
            </div>
            <div class="service_item d-flex">
                <div class="icon_product" style="padding-right: 10px">
                    <img style="width: 50px; height: 50px; object-fit: contain"
                        src="{{ asset('images/icon_342e7.png') }}" alt="">
                </div>
                <div class="description_icon">
                    <span class="large-text">
                        SẢN PHẨM AN TOÀN
                    </span>
                    <span class="small-text">
                        Cam kết chính hãng
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
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
@endsection
