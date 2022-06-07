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

<body class="dark-mode">

    <div class="container" style="margin-top:15%;">
        <div class="row">
            <div class="col-4 mx-auto ">
                <div class="card ">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                        <?php endif;?>
                        <form action="<?= base_url(); ?>/signin" method="post">
                        <?=csrf_field()?>
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>"
                                    class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>

</html>