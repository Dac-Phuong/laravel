@extends('layout')
@section('main')
<section>
    <div class="container">
        <img src="{{asset('images/sp.png')}}" alt="">
        <div class="d-flex flex-wrap">
            <div class="col-md-3 mt-3 sidebar">
                @component('frontEnd.components.sidebar',['categories'=>$categories,'products'=>$products])
                @endcomponent
            </div>
            <div class="col-md-9 py-3 px-3 border ">
                <h3 class="collection__title">
                    {{$category_name}}
                </h3>
                <div class="d-flex flex-wrap border" style="border-right: none !important;border-bottom: none !important">
                    @foreach($item_product as $key => $item)
                    <div class="col-md-3 border" style="height: 290px; position: relative;border-left: none !important;border-top: none !important">
                        @if($item->sale > 0)
                        <div class="box-sale">
                            <span>-{{$item->sale}}%</span>
                        </div>
                        @endif
                        <a class="p-2" style="display: block;height: 70%;" href="{{route('productDetail',$item->id)}}">
                            <img src="{{ asset('storage/uploads/' . $item->image) }}" style="width: 100%; height: 100%;object-fit: contain"></a>
                        <div class="p-2 lt-product-group-info">
                            <h3 class="">{{$item->name}}</h3>
                            <div class="price-box">
                                <p class="price-sale">{{number_format($item->price-($item->sale/100*$item->price),0,',',
                                    ',')}}đ</p>
                                <del class="" style="padding-left: 10px;font-size: 14px;font-weight: 700;color: #716b6b;">
                                    {{number_format($item->price,0,',', ',')}}đ</del>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($item_product->count() >= 8)
                {!! $products->links()!!}
                @endif
            </div>
        </div>

    </div>
    </div>
</section>
@endsection
