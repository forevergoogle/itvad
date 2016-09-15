<?php
/**
 * Created by PhpStorm.
 * User: mith
 * Date: 8/31/2016
 * Time: 2:29 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Demo Infeed TVC</title>
    <!-- AdsPlay HTML5 Video Ads CSS-->
    <?php echo link_tag('assets/css/videojs.ads.css') . "\n" ?>
    <?php echo link_tag('assets/css/videojs.css') . "\n" ?>
    <?php echo link_tag('assets/css/video-js.css') . "\n" ?>
    <?php echo link_tag('assets/css/style.css') . "\n" ?>

</head>
<body class="main">
<div class="test"> <!--//style="max-width: 100%;height: 100%;"-->
    <div class="imgbg"> <img  src="<?php echo base_url() ?>assets/images/infeed1.png"></div>
    <div class="example-video-container-in-feed">

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

