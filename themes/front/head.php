<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<!--<title><?= $row_pro->nama; ?></title>-->
<!--<link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>assets/img/<?= $row_pro->logo_cofe; ?>"/>-->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
<!-- Ionicons -->
<!--<link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">-->
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/croppie.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>

    #notivs {
        width: 50%;
        position: absolute;
        z-index: 999;
        top: 10px;
        right: 10px;
    }

    #notiv {
        width: 30%;
        position: absolute;
        z-index: 999;
    }

    .satu {
        font-size: 1em;
    }
    .dua {
        font-family: Courier, monospace  ;
        font-size: 1.5em;
    }
    .tiga {
        font-size: 1.2em;

    }


    .bg {
        background: #F0FFFF;
    }
    .bag {
        background-color:rgba(255,255,255,0.8);

    }

    .bak {
        background-color:rgba(255,255,255,0.12);
    }
    .bag1{background:#000;opacity:0.4;filter:alpha(opacity=40);}
    .bag2{background:rgba(0,0,0,0.4);}
    .active{
        background-color:#ED1C24;
    }
/*    #nav{
        background-color:#c3c3c3;
    }*/
    thead, th{
        text-align: center;
        background-color: #c3c3c3;
        font-size: 10pt;
    }
    table, tbody, tr, td{
        font-size: 9pt;
    }

    #to-top{
        display: none;
        width: 30px;
        height: 30px;
        position: fixed;
        right: 40px;
        bottom: 40px;
        background: url(<?php echo base_url(); ?>assets/img/up.png) no-repeat;
        border: 2px solid #fff;
        border-radius: 50%;
    }
    body{
     padding-top: 3%;   
    }

    .custom-body {
        background-image: url('<?php echo base_url(); ?>assets/img/background3.png') !important; 
        background-size: auto;
        -webkit-background-size: 100% 100%;
        background-repeat : no-repeat;
        background-attachment:fixed ; 
    }

</style>
<!--      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->