
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images\favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/admin/css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css\icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css\app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css\style.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

@include('admin.blocks.header')
@include('admin.blocks.sidebar')


<!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right d-none">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{ $title }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @yield('content')


            </div> <!-- container -->



        </div> <!-- content -->

        @include('admin.blocks.footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->
@include('admin.blocks.rightbar')

<!-- Vendor js -->
<script src="{{asset('assets/admin/js\vendor.min.js')}}"></script>

<script src="{{asset('assets/admin/libs\jquery-knob\jquery.knob.min.js')}}"></script>
<script src="{{asset('assets/admin/libs\peity\jquery.peity.min.js')}}"></script>

<!-- Sparkline charts -->
<script src="{{asset('assets/admin/libs\jquery-sparkline\jquery.sparkline.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('assets/admin/js\pages\dashboard-1.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/admin/js\app.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('assets/admin/js/tinymce.min.js')}}"></script>
<script src="{{asset('assets/admin/js/main.js')}}"></script>
<script src="{{asset('assets/admin/js/ajax.js')}}"></script>
</body>
</html>
