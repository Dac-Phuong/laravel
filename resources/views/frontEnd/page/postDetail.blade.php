@extends('layout')
@section('main')
    <section>
        <div class="container">
            <img src="{{ asset('images/sp.png') }}" alt="">
            <div class="d-flex flex-wrap">
                <div class="col-md-3 mt-3 sidebar">
                    @component('frontEnd.components.sidebar', ['categories' => $categories, 'products' => $products])
                    @endcomponent
                </div>
                <div class="col-md-9 py-3 px-3 border ">
                    <h3 class="" style="font-size: 22px ;color: #286CD9"><span>{{ $item_posts->title }}</span></h3>
                    <div class="d-flex mt-2 align-items-center">
                        <i class="fa-solid fa-calendar-days" style="color: #716b6b;margin-right: 10px;"></i>
                        <span style="color: #716b6b">{{ $item_posts->created_at }}</span>
                    </div>
                    <div class="description">
                        {!! $item_posts->upload !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
