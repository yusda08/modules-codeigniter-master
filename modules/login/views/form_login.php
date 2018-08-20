<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <?php
//    $tipe = $row_kab->tipe;
//    $nm_kab = $row_kab->kabupaten;
//    $logo = $row_kab->logo;
    ?>
    <head>
        <meta charset="utf-8">
        <!--<title> Pendapatan <?= $tipe . ' ' . $nm_kab; ?></title>-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url(); ?>assets/css/bootstrapnew.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url(); ?>assets/css/font_css.css">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">-->
        <!--<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/<?= $logo; ?>" type="image/x-icon">-->
        <style>
            #get-notified {
                width: 50%;
                position: absolute;
                z-index: 999;
                top: 10px;
                right: 10px;
            }

            #panel, #flip {
                padding: 5px;
                text-align: center;
                border: solid 1px #c3c3c3;
                background-color: #e5eecc;
                color: #000000;
            }
            .custom-body {
                background-image: url('<?php echo base_url(); ?>assets/img/background.png') !important; 
                background-size: auto;
                -webkit-background-size: 100% 100%;
                background-repeat : no-repeat;
                background-attachment:fixed ; 
            }


            .bag {
                background-color:rgba(255,255,255,0.8);
            }
            .login-box,.register-box{width:360px;margin-top:15%; margin-left: 35%}
            @media (max-width:768px){
                .login-box,.register-box{width:100%;margin-top:20px}
            }
            .bag { background-color:rgba(255,255,255,0.8);}
        </style>
    </head>
    <body class="hold-transition fixed login-page custom-body login">
        <div class="container" >
            <div class="login-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel bag">
                            <div class="panel-heading">
<!--                                <p style="color: #000;font-size: 13pt" style="color: #000;" class="hidden-xs">
                                    <img  style="float:left; margin:0 8px 4px 0" src="<?= base_url(); ?>assets/img/<?= $logo; ?>" width="22%" class="img-responsive img-rounded">
                                    Sistem Informasi Pembangunan<br>
                                    <span class="text-center">(SIP - Tamasa)</span>
                                    <br><u> Pemerintah <?= $tipe . ' ' . $nm_kab; ?></u>
                                </p>-->
                            </div>
                            <div class="panel-body">
                                <div id="get-notified"></div>
                                <p style="font-weight: bold; font-size: 14pt" class="text-center">Form Login :</p>
                                <form id='login-form'>
                                    <div class="form-group has-feedback">
                                        <label>Username</label>
                                        <input type="text" name='username' id='username' class="form-control" autofocus="true" placeholder="Username">
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Password</label>
                                        <input type="password" id='password' name='password' class="form-control" placeholder="Password">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="<?= site_url('Home'); ?>" class="btn btn-danger btn-flat"><i class="fa fa-backward"></i> Kembali</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <span class="pull-right">
                                                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-sign-in"></i>  Masuk</button>
                                            </span>
                                        </div>
                                        <!--                                        <div class="col-xs-6">
                                                                                    <a href="#">Lupa Password</a>
                                                                                </div>-->
                                    </div>
                                </form>
                            </div>
                            <div >
                                <p class="text-center">
                                    <b>Hak Cipta Dilindungi Undang-Undang</b>
                                    <br>
                                    Copyright &copy; <?php echo date("Y"); ?>
                                </p>
                            </div>
                            <!-- /.login-box-body -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugin/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugin/jquery-validation/src/localization/messages_id.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#login-form").validate({
                submitHandler: function (form) {
                    $("button[type='submit']").click(function () {
                        var $btn = $(this);
                        $btn.button('loading');
                        setTimeout(function () {
                            $btn.button('reset');
                        }, 2000);
                    });
                    var username = $('#username').val();
                    var password = $('#password').val();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Login/validasi'); ?>",
                        data: {
                            username: username,
                            password: password
                        },
                        success: function (msg)
                        {
                            if (msg == "true") {
                                $("#get-notified").html('<div class="alert alert-success alert-dismissable animated fadeIn"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-check"></i> Sukses!</h4> Berhasil Masuk. </div>');
                                setTimeout(function () {// wait for 2 secs
                                    location.reload(); // then reload the page.
                                }, 500);
                            } else if (msg == "false") {
                                $("#get-notified").html('<div class="alert alert-danger alert-dismissable animated fadeIn" id="notiv_kunic"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-ban"></i> Peringatan!</h4> User Anda Sedang Dikunci Administrator, Silahkan Hubungi Administrator Untuk Mengaktifkan. </div>');
                                $('#notiv_kunic').fadeOut(7000)// then reload the page.
                            } else {
                                $("#get-notified").html('<div class="alert alert-warning alert-dismissable animated fadeIn" id="notiv_gagal"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <h4><i class="icon fa fa-ban"></i> Peringatan!</h4> Username dan Password Salah. </div>');
                                $('#notiv_gagal').fadeOut(3000)// then reload the page.
                            }
                        }
                    });
                }
            });
        });

        $(document).ready(function () {
            var heights = $(".max").map(function () {
                return $(this).height();
            }).get(),
                    maxHeight = Math.max.apply(null, heights);
            $(".max").height(maxHeight);
        });




    </script>

</body>
</html>