<!DOCTYPE html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ '/public/assets/' }}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản trị</title>


    <link rel="icon" type="image/x-icon" href="{{ '/assets/img/favicon/favicon.ico' }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ '/public/assets/vendor/fonts/fontawesome.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/fonts/tabler-icons.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/fonts/flag-icons.css' }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ '/public/assets/vendor/css/rtl/core.css' }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/css/rtl/theme-default.css' }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ '/public/assets/css/demo.css' }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/node-waves/node-waves.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/typeahead-js/typeahead.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/apex-charts/apex-charts.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/swiper/swiper.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css' }}" />
    <link rel="stylesheet"
        href="{{ '/public/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css' }}" />
    <link rel="stylesheet"
        href="{{ '/public/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css' }}" />
    <link rel="stylesheet" href="{{ '/public/assets/vendor/libs/@form-validation/umd/styles/index.min.css' }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ '/public/assets/vendor/css/pages/cards-advance.css' }}" />
    <!-- Helpers -->
    <script src="{{ '/public/assets/vendor/js/helpers.js' }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <script src="{{ '/public/assets/vendor/js/template-customizer.js' }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ '/public/assets/js/config.js' }}"></script>
    @livewireStyles
    <style>
        svg {
            overflow: hidden;
            vertical-align: middle;
            width: 20px;
        }

        p.text-sm.text-gray-700.leading-5,
        .flex.justify-between.flex-1.sm\:hidden {
            display: none;
        }

        .ck-editor__editable_inline {
            height: 250px;
        }
        svg{
            width:100%;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('admin.layout.sidebar')
                <!-- / Menu -->
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    @include('admin.layout.header')
                    <!-- / Navbar -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @include('admin.layout.main')
                            @yield('main')
                        </div>
                        <!-- / Content -->
                        <!-- Footer -->
                        @include('admin.layout.footer')
                        <!-- / Footer -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

        </div>

    </div>
    <!-- build:js /assets/vendor/js/core.js -->

    <script src="{{ '/public/assets/vendor/libs/jquery/jquery.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/popper/popper.js' }}"></script>
    <script src="{{ '/public/assets/vendor/js/bootstrap.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/node-waves/node-waves.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/hammer/hammer.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/i18n/i18n.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/typeahead-js/typeahead.js' }}"></script>

    <script src="{{ '/public/assets/vendor/js/menu.js' }}"></script>

    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ '/public/assets/vendor/libs/apex-charts/apexcharts.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/swiper/swiper.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js' }}"></script>

    <!-- Main JS -->
    <script src="{{ '/public/assets/js/main.js' }}"></script>
    <script src="{{ '/livewire/index.js' }}"></script>

    <!-- Page JS -->
    <script src="{{ '/public/assets/js/dashboards-analytics.js' }}"></script>
    <script src="{{ '/public/assets/js/tables-datatables-advanced.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js' }}"></script>
    <script src="{{ '/public/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
    @yield('script_page')
    @livewireScripts
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('createPost', ['_token' => csrf_token()]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
