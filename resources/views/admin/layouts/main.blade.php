<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MPJ | {{ $title }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="dashboard/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="favicon.png" />
    <script src="https://kit.fontawesome.com/0fdd5e9bfc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('admin.layouts.setting')
            @include('admin.layouts.right-sidebar')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('admin.layouts.left-sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            <?php echo date('Y'); ?>. By <a href="https://www.bootstrapdash.com/" target="_blank">🍃Media
                                Pondok Jatim</a>. All rights reserved.</span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed and
                            developed by <a href="https://www.themewagon.com/" target="_blank">🧠MPJ Coders Team.
                            </a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="dashboard/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="dashboard/vendors/chart.js/Chart.min.js"></script>
    <script src="dashboard/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="dashboard/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="dashboard/js/off-canvas.js"></script>
    <script src="dashboard/js/hoverable-collapse.js"></script>
    <script src="dashboard/js/template.js"></script>
    <script src="dashboard/js/settings.js"></script>
    <script src="dashboard/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
