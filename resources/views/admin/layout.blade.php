<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" href="{{asset('images/logotype.png')}}" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koulmed</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admintemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admintemplate/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
        .sidebar .nav-item.active .nav-link {
            color: #000000 !important;
            font-weight: 800 !important;
            font-size: 1.1rem !important;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .sidebar .nav-item.active .nav-link i {
            color: #000000 !important;
        }

        .sidebar .nav-item.active .nav-link span {
            color: #000000 !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.parties.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.parties.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.parties.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('admin.parties.retourconnexion')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admintemplate/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admintemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admintemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admintemplate/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admintemplate/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admintemplate/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admintemplate/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
