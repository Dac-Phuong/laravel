@extends('layout')
@section('main')
<section>
    <div class="container">
        <div class="d-flex py-3 align-items-center">
            <span style="color: red">Trang chủ</span>
            <i class="fa-solid fa-angle-right" style="padding: 0 4px;color: #ccc;font-size: 14px"></i>
            @foreach($categories as $key => $item)
            @if($item->id == $item_product->category_id)
            <span style="color: red">{{$item->name}}</span>
            @endif
            @endforeach
            <i class="fa-solid fa-angle-right" style="padding: 0 4px;color: #ccc;font-size: 14px"></i>
            <span>{{$item_product->name}}</span>
        </div>
        <div class="d-flex flex-wrap">
            <div class="col-md-6 border" >
                <img style="width: 100%;object-fit: contain;height: 90%;margin: 3% 0;" src="/uploads/{{$item_product->image}}" alt="">
            </div>
            <div class="col-md-6 py-3 px-3  ">
                <div class="product-view-name">
                    <h1>{{$item_product->name}}</h1>
                    <div class="product-view-price">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Giá bán:</span>
                                <span style="font-size: 24px; font-weight: bold; font-family: Arial;color: #ed1c24;padding-left: 5px;">
                                    {{number_format($item_product->price-($item_product->sale/100*$item_product->price))}}đ</span>
                            </div>
                            @if($item_product->sale > 0)
                            <del style="margin-left: 20px;text-align: center">{{number_format($item_product->price)}}đ</del>
                            @endif
                            @if($item_product->sale > 0)
                            <div class="card-sale">
                                <span style="font-size: 12px">-{{$item_product->sale}}%</span>
                            </div>
                            @endif

                        </div>
                        <div class="product-status d-flex">
                            @foreach($categories as $key => $item)
                            @if($item->id == $item_product->category_id)
                            <p style="margin-right: 10px;">Thương hiệu: {{$item->name}} </p>
                            @endif
                            @endforeach
                            @if($item_product->status==1)
                            <p> | Tình trạng: Còn hàng</p>
                            @else <p>| Tình trạng: Hết hàng</p>
                            @endif
                        </div>
                        <div class="actions-qty__button">
                              <a class="btn py-2" href="{{route('addToCart',$item_product->id)}}" style="background: #C3011A;color:#fff;border-radius:0px">Thêm vào giỏ hàng</a>
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
                                            <li>Tặng Flip Cover chính hãng Samsung (Áp dụng đến 26/05) <a href="#" target="_blank">Xem chi tiết</a>
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
                {{$item_product->description}}
            </span>
        </div>
    </div>
    </div>
</section>
@endsection
