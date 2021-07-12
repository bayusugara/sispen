<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/assets/images/favicon_1.ico">

    <title><?= $title; ?></title>

    <!-- DataTables -->
    <link href="/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css-->
    <link href="/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!--date picker -->
    <link href="/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/assets/plugins/morris/morris.css"> -->

    <link href="/assets/plugins/custombox/css/custombox.css" rel="stylesheet">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="/assets/js/modernizr.min.js"></script>


</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="/home" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Sispen</span></a>
                    <!-- Image Logo here -->
                    <!--<a href="index.html" class="logo">-->
                    <!--<i class="icon-c-logo"> <img src="/assets/images/logo_sm.png" height="42"/> </i>-->
                    <!--<span><img src="/assets/images/logo_light.png" height="20"/></span>-->
                    <!--</a>-->
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="md md-menu"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><b><?= session('nama'); ?></b> | <img src="/img/<?= session('foto'); ?>" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li> -->
                                    <!-- <li class="divider"></li> -->
                                    <li><a href="/auth/logout"><i class="ti-power-off m-r-10 text-danger"></i> Keluar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="has_sub">
                            <a href="/home" class="waves-effect"><i class="ti-home"></i> <span> Home </span></a>
                        </li>
                        <?php if (session('level') == "superadmin") { ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-server"></i> <span> Data Master </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="/pegawai">Pegawai</a></li>
                                    <li><a href="/pengguna">Pengguna</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                        <!----------------------------------------HALAMAN STAFF--------------------------------------->
                        <li class="has_sub">
                            <a href="/pensiun" class="waves-effect"><i class="ti-user"></i> <span> Pegawai Pensiun </span></a>
                        </li>
                        <?php if (session('level') == "superadmin") { ?>
                            <li class="has_sub">
                                <a href="/laporan" class="waves-effect"><i class="ti-file"></i> <span> Laporan Terkirim </span></a>
                            </li>
                        <?php } ?>
                        <!----------------------------------------HALAMAN STAFF--------------------------------------->

                        <li class="has_sub">
                            <a href="/auth/logout" class="waves-effect"><i class="ti-power-off"></i> <span> Keluar </span></a>
                        </li>

                        <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i><span class="label label-primary pull-right">9</span><span> Components </span> </a>
                            <ul class="list-unstyled">
                                <li><a href="components-grid.html">Grid</a></li>
                                <li><a href="components-widgets.html">Widgets</a></li>
                            </ul>
                        </li> -->

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <?= $this->renderSection('content'); ?>

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                © 2020. All rights reserved.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/fastclick.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.blockUI.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <script src="/assets/js/jquery.core.js"></script>
    <script src="/assets/js/jquery.app.js"></script>

    <script src="/assets/plugins/peity/jquery.peity.min.js"></script>

    <!-- <script src="/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/assets/plugins/counterup/jquery.counterup.min.js"></script>

    <script src="/assets/plugins/morris/morris.min.js"></script>
    <script src="/assets/plugins/raphael/raphael-min.js"></script>

    <script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="/assets/pages/jquery.dashboard.js"></script> -->


    <script src="/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="/assets/plugins/switchery/js/switchery.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/assets/plugins/autocomplete/jquery.mockjax.js"></script>
    <script type="text/javascript" src="/assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/autocomplete/countries.js"></script>
    <script type="text/javascript" src="/assets/pages/autocomplete.js"></script>

    <!-- Data Table -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.colVis.js"></script>
    <script src="/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    <!-- date picker -->
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="/assets/pages/jquery.form-pickers.init.js"></script>

    <script src="/assets/pages/datatables.init.js"></script>

    <script type="text/javascript" src="/assets/pages/jquery.form-advanced.init.js"></script>

    <script type="text/javascript" src="/assets/plugins/parsleyjs/parsley.min.js"></script>
    <!-- Modal-Effect -->
    <script src="/assets/plugins/custombox/js/custombox.min.js"></script>
    <script src="/assets/plugins/custombox/js/legacy.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
        TableManageButtons.init();
    </script>

    <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>