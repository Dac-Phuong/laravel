@section('contents')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{route('getListUser')}}" class="nav-link active">
                        <i class="fa-solid fa-user" style="margin-top: -4px"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                   
                </li>
              
               <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa-brands fa-product-hunt" style="margin-top: -4px"></i>
                        <p>
                            Sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('listProduct')}}" class="nav-link ">
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('createProduct')}}" class="nav-link ">
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-copyright" style="margin-top: -4px"></i>
                        <p>
                            Danh mục
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('listCategory')}}" class="nav-link ">
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('createCategory')}}" class="nav-link ">
                                <p>Thêm danh mục</p>
                            </a>
                        </li>
                    </ul>
                </li>
                  <li class="nav-item menu-open">
                    <a href="{{route('order')}}" class="nav-link active">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-file-pen" style="margin-top: -4px"></i>
                        <p>
                            Bài viết
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('listPosts')}}" class="nav-link ">
                                <p>Danh sách bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('createPost')}}" class="nav-link ">
                                <p>Thêm bài viết</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-image" style="margin-top: -4px"></i>
                        <p>
                            Banner
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('listBanner')}}" class="nav-link ">
                                <p>Danh sách banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('createBanner')}}" class="nav-link ">
                                <p>Thêm banner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item menu-open">
                    <a href="{{route('listContact')}}" class="nav-link active">
                        <i class="fa-solid fa-comment"></i>
                        <p>
                            Liên hệ
                        </p>
                    </a>
                </li>
                 
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@endsection
