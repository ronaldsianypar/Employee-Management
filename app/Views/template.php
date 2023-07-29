<?php $debug = true; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Lyrid Prima Indonesia</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
    <!-- DatePicker -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker-bs/css/bootstrap-datepicker.min.css') ?>">
    <!-- Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/loader.css') ?>">

    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .note-group-select-from-files {
            display: none;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"] {
            text-align: end;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"]>div:nth-child(1) {
            display: none;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"] svg {
            width: 25px;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"] span[aria-current="page"] span {
            background-color: #dedede !important;
            cursor: not-allowed;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"] span[aria-disabled="true"] span {
            cursor: not-allowed;
        }

        .option-table>.dt-pagination>nav[aria-label="Pagination Navigation"]>div:nth-child(2)>div:nth-child(2) {
            line-height: 2.5rem
        }

        .dt-pagination {
            align-self: end
        }

        .dt-pagination>nav>ul.pagination {
            margin-bottom: 0;
            justify-content: end;
        }

        .dt-pagination>nav>ul.pagination>li.page-item>.page-link {
            border-radius: 0
        }

        .wrapper {
            background-color: #f4f6f9
        }

        .btn-pickup{
            background-color: #092B6C;
            color: #E9EFFE;
        }

        .btn-pickup:hover{
            background-color: #092B6C;
            color: #E9EFFE;
            filter: brightness(85%);
        }

        .btn-dropoff{
            background-color: #E9EFFE;
            color: #092B6C;
            border: 1px solid #092B6C;
        }

        .btn-dropoff:hover{
            background-color: #E9EFFE;
            color: #092B6C;
            border: 1px solid #092B6C;
            filter: brightness(85%);
        }

        .text-dropoff{
            color: #000000;
            font-weight: bold;
            text-shadow: 2px 2px 4px #ffc107;
        }

        .text-pickup{
            color: #000000;
            font-weight: bold;
            text-shadow: 2px 2px 4px #28a745;
        }

        .btn-list-aksi{} 
        .btn-list-aksi:hover{
            background-color: #16A2B8 !important;
        }
    </style>
    <?= $this->renderSection('style') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div id="loading-container">
        <div id="loading-bar">
            <p class="text-center mt-3">Please wait ...</p>
        </div>
    </div>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="onSignOut()" role="button">
                        <i class="fas fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                       
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            Admin
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <li class="nav-item">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <a href="<?= route_to('dashboard.index') ?>" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </ul>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <a href="<?= route_to('employee.index') ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Employee
                                </p>
                            </a>
                        </ul>
                    </nav>
                </li>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                Dashboard
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?= $this->renderSection('content') ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
    <!-- Highcharts -->
    <script src="<?= base_url('assets/plugins/highchart/highcharts.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/highchart/exporting.js') ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js') ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
    <!-- Date Picker -->
    <script src="<?= base_url('assets/plugins/datepicker-bs/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- CKEditor -->
    <script src="<?= base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
    <!-- Date Range Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= base_url('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.number.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/demo.js?v=1') ?>"></script>
    <script src="<?= base_url('assets/js/additional.js?v=1.18') ?>"></script>
    <script src="<?= base_url('assets/js/loader.js') ?>"></script>

    <script>
        window.onbeforeunload = () => {
            loading(true)
        }

        $(document).ready(function() {
            loading(false)

            $('.select2').on('select2:open', (e) => {
                var searchField = $('input.select2-search__field')
                searchField.last()[0].focus()
            })

            $('[data-toggle="tooltip"]').tooltip()
        })

        function onSignOut() {
            var url = '<?= route_to('login.logout') ?>'

            Swal.fire({
                title: 'Attention !',
                text: "Are you sure you want to exit your account?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                    document.location = url
                }
            })
        }

        const formatRupiah = (money) => {
            return new Intl.NumberFormat('id-ID',
                { currency: 'IDR', minimumFractionDigits: 0 }
            ).format(money);
        }
    </script>
    <?= $this->renderSection('script') ?>
</body>

</html>