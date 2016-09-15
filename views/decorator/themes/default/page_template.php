<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (isset($pageTitle)) ? $pageTitle : 'iTVad'; ?> </title>
 <?php echo link_tag('assets/css/bootstrap.min.css') . "\n" ?>

 <?php echo link_tag('assets/css/bootstrap-theme.css') . "\n" ?>
<!-- --><?php /*echo link_tag('assets/css/non.responsive.css') . "\n" */?>
 <?php echo link_tag('assets/css/font-awesome.min.css') . "\n" ?>
<?php if($nameController == 'welcome' && $nameMethod == 'index'): ?>
     <?php echo link_tag('assets/css/onepage-scroll.css') . "\n" ?>
<?php endif; ?>
 <?php echo link_tag('assets/css/fonts.css') . "\n"; ?>
 <?php echo link_tag('assets/css/style-itvad.css') . "\n"; ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/logo.png"/>
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<script type="application/javascript" src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
<style>
    .loading{
        top: 50%;
        position: absolute;
        z-index: 9;
        left: 50%;
        margin-top: -37.5px;
        margin-left: -37.5px;
    }
    .loading img {
        width: 50%;
    }

</style>
</head>

<body>
<div class="loading" style="display: none"><img src="<?php echo base_url() ?>assets/images/loading_home.gif" /></div>
<div id="wrapper">
 <header class="navbar-fixed-top">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>">Brand</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav menu-nav">
                        <li><a href="<?php echo site_url('welcome/adsplay'); ?>">adsPLAY</a></li>
                        <li><a href="<?php echo site_url('welcome/advertise'); ?>">Quảng cáo</a></li>
                        <li><a href="<?php echo site_url('welcome/analyse'); ?>">Dữ liệu</a></li>
                        <li><a target="_blank" href="http://engineering.adsplay.net/">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav social-nav navbar-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <article id="page">
        <div class="main onepage-wrapper">
    <?php echo $page_content; ?>

    <footer>
        <section class="footer">
            <h1 class="header">Tìm nhanh</h1>

            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="bdr">
                            <h5 class="title">Trang Chủ</h5>
                            <ul class="nav">
                                <li><a href="<?php echo  base_url(); ?>#5">Liên Hệ</a></li>
                                <li><a href="<?php echo site_url('welcome/team') ?>">Tuyển Dụng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="bdr">
                            <h5 class="title">adsPlay</h5>
                            <ul class="nav">
                                <li><a href="<?php echo site_url('welcome/adsplay') ?>">Đặc Trưng</a></li>
                                <li><a href="<?php echo site_url('welcome/adsplay') ?>#library-ads">Thư Viện</a></li>
                            </ul>
                        </div>
                    </div>
<!--                    <div class="col-xs-2">-->
<!--                        <div class="bdr">-->
<!--                            <h5 class="title">Đội ngũ</h5>-->
<!--                            <ul class="nav">-->
<!--                                <li><a href="--><?php //echo site_url('welcome/team') ?><!--#team-sales">Kinh doanh</a></li>-->
<!--                                <li><a href="--><?php //echo site_url('welcome/team') ?><!--#team-tech">Kỹ thuật</a></li>-->
<!--                                <li><a href="--><?php //echo site_url('welcome/team') ?><!--#team-product">Sản phẩm</a></li>-->
<!--                                <li><a href="--><?php //echo site_url('welcome/team') ?><!--">Văn hoá</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-2">-->
<!--                        <div class="bdr">-->
<!--                            <h5 class="title">adsPlay</h5>-->
<!--                            <ul class="nav">-->
<!--                                <li><a href="--><?php //echo site_url('welcome/adsplay') ?><!--">Giới thiệu</a></li>-->
<!--                                <li><a href="--><?php //echo site_url('welcome/adsplay') ?><!--#function-ads-play">Tính năng</a></li>-->
<!--                                <li><a href="--><?php //echo site_url('welcome/adsplay') ?><!--#library-ads"">Thư viện</a></li>-->
<!---->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="col-xs-3">
                        <div class="bdr">
                            <h5 class="title">Quảng cáo</h5>
                            <ul class="nav">
                                <li><a href="#">Phát Triển</a></li>
                                <li><a href="#">Hình Thức</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="bd">
                            <h5 class="title">Dữ liệu</h5>
                            <ul class="nav">
                                <li><a href="#">Nhu cầu</a></li>
                                <li><a href="#">Giải Pháp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 60px;">
                    Một sản phẩm của
                </div>
                <div class="row"> <img src="<?php echo base_url() ?>assets/images/logo_fpt_telecom.png" alt="FPT Telecom"/></div>
            </div>
        </section>
    </footer>
        </div>
    </article>
</div>
<!--Jquery-->

<script type="application/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('/assets/js/scrollReveal.min.js'); ?>"></script>
<?php if($nameController == 'welcome' && $nameMethod == 'index'): ?>
<script type="application/javascript" src="<?php echo base_url('/assets/js/jquery.onepage-scroll.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        (function ( $ ) {
            'use strict';
            $.fn.heightFull = function() {
                var totalHeight = $('window').height();
                var heightMinus = totalHeight;
                $(this).css('height', heightMinus);
            };
        }( jQuery ));

        $(".main .contact").heightFull();
        $(window).resize(function() {
            $(".main .item").heightFull();
        });

        $(".main").onepage_scroll();
    });
</script>
<?php endif; ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-68702055-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>