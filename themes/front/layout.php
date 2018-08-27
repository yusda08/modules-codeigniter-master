<!DOCTYPE html>
<html>
    <head>
        <?= $head; ?>
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue sidebar-mini layout-top-nav">
        <div class="wrapper">
            <header class="main-header ">
                <nav class="navbar nav-scroller navbar-fixed-top navbar-static-top" style="background-color: #000;">
                    <div class="container">
                        <?= $nav; ?>
                        <!-- /.navbar-custom-menu -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper custom-body ">
                <div class="container">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="col-md-12 hidden-mobile">
                            <ol class="breadcrumb">
                                <?= $ribbon; ?>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6">
                                <span class="pull-right">
                                    <div id='notivs'></div>
                                </span>
                            </div>
                        </div>
                        <?= $content; ?>
                        <!-- /.box -->
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer" style="background-color: #000; color: #FFF">
                <?= $footer; ?>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->

    </body>
</html>
