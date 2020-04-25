<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="<?=  base_url() ?>assets/global/img/logoo.png">
    <!-- DataTables css -->
    <link href='<?=  base_url() ?>assets/global/plugins/datatables/datatables.min.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=  base_url() ?>assets/global/css/style.css">
</head>
<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="img" style="width: 100%;margin-top: 50px; display: flex;justify-content: center;">
                                    <img width="100" height="100" src="<?=  base_url() ?>assets/global/img/logoo.png" alt="logo">
                                </div>
                                <div class="p-5">
                                    <?php if ($this->session->flashdata('gagal')): ?>                                    
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('gagal'); ?>
                                        </div>
                                    <?php endif ?>
                                    <?php if ($this->session->flashdata('berhasil')): ?>                                    
                                        <div class="alert alert-success" role="alert">
                                            <?= $this->session->flashdata('berhasil'); ?>
                                        </div>
                                    <?php endif ?>

                                    <form class="user" method="post" action="<?= base_url('login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Namamu" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata sandimu">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-warning text-light btn-user btn-block">
                                            Buka Bukumu
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="medium" style="color: grey;" href="<?= base_url('login/daftar'); ?>">Belum punya buku? mari kita membuatnya!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div> 
</body>