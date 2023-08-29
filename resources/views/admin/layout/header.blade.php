@section('header')
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <h4 class="text-center font-weight-bold" style="padding-top: 5px">Trang quản trị</h4>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="{{route('homePage')}}" style="border: none;width: 110px; padding: 10px ;margin-right: 20px;border-radius: 6px;background: #f0f0f0;color:#000;height: 44px;">
            <i class="fa-solid fa-house" style="width: 18px;margin-top: -4px"></i>
            Trang chủ
        </a>
        @if(Auth::check())
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" style="border: none;width: 110px; padding: 10px ;border-radius: 6px;margin-right: 10px">
                <i class="fa-solid fa-right-from-bracket" style="width: 18px;margin-top: -4px"></i>
                thoát
            </button>
        </form>
        @endif
    </ul>
</nav>
@endsection
