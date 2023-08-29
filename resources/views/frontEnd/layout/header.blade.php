<section>
    <div class="header__main">
        <div class="container d-flex">
            <div class="col-md-4">
                <a href="{{URL::to('/')}}" style="display: block; height: 100px; width:80%;margin-left:auto">
                    <img style="width: 100%; height: 100%; object-fit: contain" src="{{asset('images/smart-mobi.png')}}" alt="">
                </a>
            </div>
            <form action="{{route('search')}}" method="GET" class="d-flex w-full col-md-4 ">
                @csrf
                <div class="d-flex align-items-center" style="position: relative;line-height: 100px;width: 100%">
                    <input type="text" value="{{request()->keywords}}" class="form-control" name="search" style="border-color: #286CD9; height: 38px;" placeholder="nhập từ khóa tìm kiếm...">
                    <button type="submit" style="background: #286CD9;border: 1px solid #286CD9 ;position: absolute;right: 0;width: 60px; height: 38px; border-bottom-right-radius: 5px;border-top-right-radius: 5px ">
                        <i class="fa-solid fa-magnifying-glass" style="color: #fff ; font-size: 15px;position: absolute; top:10px;right:18px"></i>
                    </button>
                </div>
            </form>

            <div class="col-md-4 d-flex align-items-center " style="padding-left: 40px">
                @if(Auth::check())
                <a href="{{route('getUser')}}" class="d-flex align-items-center text-black text-bold" style="display: block; height: 100px;font-weight: 600;text-decoration: none">
                    <img style="width: 40px; height: 40px; object-fit: contain" src="{{asset('images/user1.png')}}" alt="">
                    <p style="padding-left: 5px">Tài khoản</p>
                </a>
                @else
                <a href="{{route('viewLogin')}}" class="d-flex align-items-center text-black text-bold" style="display: block; height: 100px;font-weight: 600;text-decoration: none">
                    <img style="width: 40px; height: 40px; object-fit: contain" src="{{asset('images/user1.png')}}" alt="">
                    <p style="padding-left: 5px">Tài khoản</p>
                </a>
                @endif
                <a href="{{route('viewCart')}}" class="d-flex align-items-center text-black text-bold" style="display: block; height: 100px;padding-left: 20px;font-weight: 600;text-decoration: none">
                    <img style="width: 40px; height: 40px; object-fit: contain" src="{{asset('images/cart.png')}}" alt="">
                    <p style="padding-left: 5px">giỏ hàng</p>
                    <span>({{count((array) session('cart'))}})</span>
                </a>
            </div>
        </div>
        <div class="">
            <nav class="navbar navbar-expand-lg d-flex navbar-light" style="background:#286CD9 ;height:50px">
                <div class="container">
                    <div class="collapse justify-content-center navbar-collapse col-md-12 w-full" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('/products')}}">Sản phẩm</a>
                            </li>
                            @foreach($categories as $i => $item)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('productCategory',$item->id)}}">{{$item->name}}</a>
                            </li>
                            @endforeach
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('getlistPosts')}}">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{URL::to('contact')}}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
