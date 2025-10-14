<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Thorn and Balloons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
    <meta name="author" content="Thorn and Balloons"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('users/images/thron-and-balloons-icon.webp') }}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="{{asset('admin/')}}assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/')}}assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/')}}assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/')}}assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/')}}assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <script src="{{asset('admin/assets/js/head.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<!-- body start -->
<body data-menu-color="light" data-sidebar="default">
    <div id="app-layout">

        @include('partials.admin.topbar')

        @include('partials.admin.sidebar')

            @yield('content')
        @include('partials.admin.footer')

    </div>


<!-- Vendor -->
<script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/iconify-icon/iconify-icon.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>

<!-- Apexcharts JS -->
<script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Widgets Init Js -->
<script src="{{asset('admin/assets/js/pages/crm-dashboard.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('admin/assets/js/app.js')}}"></script>


    <!-- Datatables js -->
    <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    <!-- dataTables.bootstrap5 -->
    <script src="{{asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

    <!-- buttons.colVis -->
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

    <!-- buttons.bootstrap5 -->
    <script src="{{asset('admin/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>

    <!-- dataTables.keyTable -->
    <script src="{{asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js')}}"></script>

    <!-- dataTable.responsive -->
    <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

    <!-- dataTables.select -->
    <script src="{{asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js')}}"></script>

    <!-- Datatable Demo App Js -->
    <script src="{{asset('admin/assets/js/pages/datatable.init.js')}}"></script>
</body>

</html>
