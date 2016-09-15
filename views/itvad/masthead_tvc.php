<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Masthead TVC</title>
    <?php echo link_tag('assets/css/bootstrap.min.css') . "\n" ?>
    <?php echo link_tag('assets/css/bootstrap-theme.css') . "\n" ?>
    <?php echo link_tag('assets/css/fonts.css') . "\n"; ?>
    <?php echo link_tag('assets/css/font-awesome.min.css') . "\n" ?>
    <!-- AdsPlay HTML5 Video Ads CSS-->
    <?php echo link_tag('assets/css/videojs.ads.css') . "\n" ?>
    <?php echo link_tag('assets/css/videojs.css') . "\n" ?>
    <?php echo link_tag('assets/css/video-js.css') . "\n" ?>
    <?php echo link_tag('assets/css/style.css') . "\n" ?>

</head>
<body class="main">
<div class="test"> <!--//style="max-width: 100%;height: 100%;"-->
    <div class="imgbg"> <img  src="<?php echo base_url() ?>assets/images/masthead.png"></div>
    <div class="example-video-container-masthead">

        <video id="my-video" class="video-js vjs-default-skin"  autoplay controls preload="auto" data-setup='{}'  >
            <source src="http://ads.fptplay.net.vn/static/videos/demo-sport-2.mp4" type='video/mp4' />
        </video>
    </div>

</div>
<!--<!-- AdsPlay HTML5 Video Ads JS-->
<script src="<?php echo base_url('/assets/js/advjs.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/adsplay.player.src.js'); ?>"></script>
<script>

    var adUrls = [];
    adUrls.push('https://d1.adsplay.net/delivery/zone/1001?placement=666');

    var videoAdUrl = adUrls[Math.floor(Math.random()*adUrls.length)];
    var contentNode = document.getElementById('my-video');
    var contentHolderTag = contentNode.parentNode;
    AdsPlayer.playVastCode(videoAdUrl, contentHolderTag
        , function (vastUrl) {
            console.log('before ' + vastUrl);
            contentNode.setAttribute('style', 'display:none');
        }
        , function (vastUrl) {
            console.log('after ' + vastUrl);
            contentNode.setAttribute('style', 'display:none');
        });
</script>
</body>
</html>