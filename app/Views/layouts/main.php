<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <title>Grupo Es Consultores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grupo Es Consultores" name="description" />
    <meta content="Grupo Es Consultores" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('admin/assets/images/favicon.ico') ?>">

    <?= $this->renderSection('style') ?>

    <!-- preloader css -->
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/preloader.min.css') ?>" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('admin/assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('admin/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('admin/assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('css/custom.css') ?>" rel="stylesheet" type="text/css" />


</head>

<body data-layout="vertical" data-sidebar-size="lg">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?= $this->include('layouts/header') ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?= $this->include('layouts/menu') ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <?= $this->renderSection('content') ?>
            </div>
            <!-- End Page-content -->


            <?= $this->include('layouts/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('admin/assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/libs/node-waves/waves.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/libs/feather-icons/feather.min.js') ?>"></script>
    <!-- pace js -->
    <script src="<?= base_url('admin/assets/libs/pace-js/pace.min.js') ?>"></script>

    <?= $this->renderSection('script') ?>

    <script src="<?= base_url('js/utils.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/app.js') ?>"></script>


    <script>
        // Init feather icons
        if (typeof feather !== 'undefined') {
            feather.replace();
        }
    </script>
</body>

</html>