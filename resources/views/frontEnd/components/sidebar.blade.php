<div class="sidebar__sale">
    <p>DANH MỤC SẢN PHẨM</p>
    <ul class="list-group border">
        @foreach ($categories as $key => $item)
            <li class="list-group-item "><a href="{{ route('productCategory', $item->id) }}"
                    style="text-decoration: none;color: #000;display: block;padding:10px">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
<div class="product_sale mt-3">
    <p class="product_sale_title">SẢN PHẨM KHUYẾN MÃI</p>
    @foreach ($products as $key => $item)
        @if ($loop->index < 4)
            <div class="card-item border" style="height: 70px;display: flex">
                <div class="card-image " style="height: 100%; width: 30%;">
                    <a class="p-2" style="display: block;height: 100%;"
                        href="{{ route('productDetail', $item->id) }}"> <img src="{{ asset('storage/uploads/' . $item->image) }}"
                            style="width: 100%; height: 100%;object-fit: contain"></a>
                </div>
                <div class="p-2 lt-product-group-info" style="width: 70%;">
                    <a href="{{ route('productDetail', $item->id) }}">
                        <h3 style="margin: 0;font-size: 14px;color: #286CD9;font-weight: 500;">{{ $item->name }}</h3>
                        <div class="price-box">
                            <p class="price-sale">
                                {{ number_format($item->price - ($item->sale / 100) * $item->price) }}đ</p>
                            <del class=""
                                style="padding-left: 10px;font-size: 14px;font-weight: 700;color: #716b6b;">{{ number_format($item->price) }}đ</del>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    @endforeach
</div>
