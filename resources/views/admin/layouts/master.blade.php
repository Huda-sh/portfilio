<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>EvryTec Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="perfumes Store" name="description" />
    <meta content="EvryTec" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo_dark.gif')}}">

    @include('admin.layouts.style')

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- ========== Left Sidebar Start ========== -->
   @include('admin.layouts.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

     @include('admin.layouts.header')

        <div class="page-content">
            <div class="container-fluid">

            @yield('content')

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('admin.layouts.footer')



    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>


@include('admin.layouts.script')


</body>

</html>
