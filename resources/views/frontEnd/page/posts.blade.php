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
            <div class="col-md-9 py-3 px-3  ">
                <div class="">
                    @foreach($posts as $key => $item)
                    <div class="col-md-12 overflow-hidden">
                        <a href="{{route('postsDetail',$item->id)}}" style="display: block;width: 100%;height: 100%;">
                            <div class="d-flex ">
                                <div class="overflow-hidden card-img" style="width: 40%;">
                                    <img style=" width: 100%;height: 100%;" src="/uploads/{{$item->image}}" alt="">
                                </div>
                                <div class="post overflow-hidden p-2 items-center" style="width: 60%;"> 
                                    <h3 class="card-img-h3">{{$item->title}}</h3>

                                    <div class="mt-2 align-items-center">
                                        <i class="fa-solid fa-calendar-days" style="color: #716b6b;margin-right: 10px;"></i>
                                        <span style="color: #716b6b">{{$item->created_at}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
