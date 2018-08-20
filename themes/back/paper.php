<!DOCTYPE html>
<html>
    <head>
        <title><?= $titel; ?></title>

        <style type="text/css">
            /*@charset "utf-8";*/
            /* CSS Document */


            @font-face {
                font-family: 'IstokWebRegular';
                src: url('font/IstokWeb-Regular-webfont.eot');
                src: url('font/IstokWeb-Regular-webfont.eot?#iefix') format('embedded-opentype'),
                    url('font/IstokWeb-Regular-webfont.woff') format('woff'),
                    url('font/IstokWeb-Regular-webfont.ttf') format('truetype'),
                    url('font/IstokWeb-Regular-webfont.svg#IstokWebRegular') format('svg');
                font-style: bold;

            }


            @font-face {
                font-family: 'TendernessRegular';
                src: url('font/Tenderness-webfont.eot');
                src: url('font/Tenderness-webfont.eot?#iefix') format('embedded-opentype'),
                    url('font/Tenderness-webfont.woff') format('woff'),
                    url('font/Tenderness-webfont.ttf') format('truetype'),
                    url('font/Tenderness-webfont.svg#TendernessRegular') format('svg');
                font-weight: 400;
                font-style: normal;

            }

            #wrapper {
                max-width: 1200px;
                min-width: 1200px;
                margin:0 auto;
                margin-bottom:30px;
                margin-top: 20px;
            }

            @media print {
                input.noPrint { display: none; }
            }

            #wrapper2 {
                max-width: 760px;
                min-width: 760px;
                margin:0 auto;
                margin-bottom:50px;
                margin-top: 20px;
                border : 1px solid;
                padding:10px;
            }
            td {
                /*padding: 3px 5px 3px 5px;*/
                font-size: 10pt;
            }
            th {
                padding: 3px 5px 3px 5px;
                font-size: 10pt;
            }

            table, table .main {
                border-collapse: collapse;
                background: #fff;
            }
            table, table .main tr th {
                font-size: 15pt;
            }
            .padding-5{padding:5px}
            .center { text-align: center;}
            .putus { border-bottom: 1px dotted #666; border-top: 1px dotted #666; }
            .bawah { border-bottom: 0px ; }
            .atas { border-top: 0px ; }
            .kanan { border-right: 0px ; }
            .kiri { border-left: 0px ; }
            .all { border: 1px solid #666; }

        </style>
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->
    </head>
    <body class="body">
        <?php echo $content; ?>
    </body>
</html>