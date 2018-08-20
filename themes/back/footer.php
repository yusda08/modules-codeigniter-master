<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$a = aksesLog();
?>
<!--<div class="row">-->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <span class="txt-color-white">Nama Aplikasi <span class="hidden-xs"> </span> © 
        <?php
        if (date('Y') == 2018) {
            echo '2018';
        } else {
            echo '2018 -' . date('Y');
        }
        ?></span>
</div>

<div class="col-xs-6 col-sm-6 text-right hidden-xs">
    <div class="txt-color-white inline-block">
        <i class="txt-color-blueLight hidden-mobile">Terakhir Login <i class="fa fa-clock-o"></i> <strong>: &nbsp; <?= Tgl_indo::indo($a['last_login_dt']) . ' At : ' . $a['last_login_tm']; ?></strong> </i>
    </div>
</div>
<!--</div>-->
