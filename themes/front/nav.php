<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>    
</div>
<div class="navbar-header">
    <a href="<?= site_url('Home'); ?>" class="bg-color-orange navbar-brand"><b> Modules </b></a>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul id="nav" class="nav navbar-nav">
        <li class=""><a href="<?= site_url('frontend/Home'); ?>"><i class="fa fa-dashboard"></i> Baranda</a></li>
        <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class="glyphicon glyphicon-list"></span> Test </a>
            <ul class='dropdown-menu'>
                <li class=""><?php echo anchor('', 'Text') ?></li>
            </ul>
        </li>
        <li class=""><?php echo anchor('frontend/rekening/Belanja', 'Rekening Belanja') ?></li>
    </ul>
</div>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Form Login </a>
            <ul class="dropdown-menu">
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" class="btn btn-danger btn-flat">Register</a>
                    </div>
                    <div class="pull-right">
                        <?php echo anchor('frontend/Login', 'Login', 'class="btn btn-success btn-flat "') ?>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>

<script> if (!window.jQuery) {
        document.write('<script src="<?= base_url(); ?>assets/js/libs/jquery-2.1.1.min.js"><\/script>'); }</script>
<script>
<?php
$ci = &get_instance();
$folder = $ci->uri->segment(1);
$controller = $ci->uri->segment(2);
$method = $ci->uri->segment(3);
if (empty($folder) and empty($method)) {
    $url = $controller;
} elseif (empty($method)) {
    $url = $folder . '/' . $controller;
} else {
    $url = $folder . '/' . $controller . '/' . $method;
}
?>
//    $(function () {
//        $('#navig a[href~="<?= site_url($url); ?>"]').parents('li').addClass('active');
//
//    })
    $(function () {
        $('.nav a[href~="' + location.href + '"]').parents('li').addClass('active');
    });
</script>