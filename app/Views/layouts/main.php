<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa – CodeIgniter Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- TITLE -->
    <title>Sistema contabilidad</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/favicon.ico'); ?>" />

    <?= $this->include('layouts/components/styles'); ?>

</head>

<body class="ltr app sidebar-mini dark-mode <?=session()->get('color')?>">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?php echo base_url('assets/images/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-HEADER -->
            <?= $this->include('layouts/components/app-header'); ?>
            <!-- /APP-HEADER -->

            <!-- APP-SIDEBAR -->
            <?= $this->include('layouts/components/app-sidebar'); ?>
            <!-- /APP-SIDEBAR -->

            <!-- APP CONTENT -->
            <div class="app-content main-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- CONTENT -->
                        <?= $this->renderSection('content'); ?>
                        <!-- CONTENT CLOSED-->

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
            <!-- APP CONTENT CLOSED-->
        </div>

        <!-- COUNTRY-SELECTOR MODAL-->
        <?= $this->include('layouts/components/modal'); ?>
        <!-- /COUNTRY-SELECTOR MODAL-->

        <!-- FOOTER -->
        <?= $this->include('layouts/components/footer'); ?>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- SCRIPTS -->
    <?= $this->include('layouts/components/scripts'); ?>
    <!-- SCRIPTS CLOSED -->
    <?= $this->section('scripts'); ?>

    <!-- SELECT2 JS -->
    <script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js'); ?>"></script>

    <!-- BOOTSTRAP-DATEPICKER JS  -->
    <script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/datepicker.js'); ?>"></script>

    <!-- INVOICE EDIT JS-->
    <script src="<?php echo base_url('assets/js/invoice-edit.js'); ?>"></script>

    <!-- COLOR THEME JS -->
    <script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

    <?= $this->endSection('scripts'); ?>

</body>

</html>