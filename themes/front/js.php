<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script> if (!window.jQuery) {
        document.write('<script src="<?= base_url(); ?>assets/js/libs/jquery-2.1.1.min.js"><\/script>'); }</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script> if (!window.jQuery.ui) {
        document.write('<script src="<?= base_url(); ?>assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/app.config.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 
<script src="<?= base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/notification/SmartNotification.min.js"></script>
<script src="<?= base_url(); ?>assets/js/smartwidgets/jarvis.widget.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/sparkline/jquery.sparkline.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/plugin/select2/select2.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/fastclick/fastclick.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/demo.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/app.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/speech/voicecommand.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/smart-chat-ui/smart.chat.ui.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/smart-chat-ui/smart.chat.manager.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/moment/moment.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/jquery-nestable/jquery.nestable.min.js"></script>
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />-->
<script src="<?= base_url(); ?>assets/js/plugin/select2/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/maxlength/bootstrap-maxlength.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/clockpicker/clockpicker.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/plugin/noUiSlider/jquery.nouislider.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/ion-slider/ion.rangeSlider.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>-->		
<!--<script src="<?= base_url(); ?>assets/js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/knob/jquery.knob.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/x-editable/moment.min.js"></script>-->
<!--<script src="<?= base_url(); ?>assets/js/plugin/x-editable/jquery.mockjax.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/plugin/x-editable/x-editable.min.js"></script>
<!--<script src="<?= base_url(); ?>assets/js/plugin/typeahead/typeahead.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin/typeahead/typeaheadjs.min.js"></script>-->
<script src="<?= base_url(); ?>assets/js/plugin/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/croppie.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script>

    $(function () {
        $(".select2").select2();
        $('.tabel_1').DataTable();
        $('.tabel_2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        });
        $('.tabel_3').DataTable({
            "scrollY": "400px",
            "scrollCollapse": true,
            "paging": false
                    //"scrollX": true
        });
    });
</script>   
<script>
    $(document).ready(function () {
        $("#flip").click(function () {
            $("#panel").slideToggle("slow");
        });
    });
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#to-top').fadeIn();
            } else {
                $('#to-top').fadeOut();
            }
        });
        $('#to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 600);
            return false;
        });
    });
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    $(document).ready(function () {

        // Format mata uang.
        $('.uang').mask('0.000.000.000', {reverse: true});

        // Format nomor HP.
        $('.no_hp').mask('0000−0000−0000');

        // Format tahun pelajaran.
        $('.tapel').mask('0000/0000');
    })
</script>
<script type="text/javascript">
    setTimeout(function () {
        $('#notiv').fadeOut('slow');
    }, 4000);

    $(document).ready(function () {
        var heights = $(".well_sama").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);

        $(".well_sama").height(maxHeight);


//        $('.fancybox').fancybox();

    });
    $(document).ready(function () {
        var heights = $(".max").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);
        $(".max").height(maxHeight);
    });
</script>
