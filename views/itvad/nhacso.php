
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>Demo NhacSo</title>
    <!-- AdsPlay HTML5 Video Ads CSS-->
    <?php echo link_tag('assets/css/videojs.ads.css') . "\n" ?>
    <?php echo link_tag('assets/css/videojs.css') . "\n" ?>
    <?php echo link_tag('assets/css/video-js.css') . "\n" ?>
    <?php echo link_tag('assets/css/style.css') . "\n" ?>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function(){

            setTimeout(time10, 10000);
            setTimeout(time20, 20000);

            function time10(){
                $("#overplay").show();
            }
            function time20(){
                $("#overplay").hide();
            }
        });
    </script>
</head>
<body class="main">
<div class="test">
    <div class="imgbg"> <img src="<?php echo base_url() ?>assets/images/demo_adBG_ns.png"></div>
    <div class="example-video-container-ns">

        <video id="my-video" class="video-js vjs-default-skin" autoplay controls preload="auto" data-setup='{}'  >
            <source src="http://ads.fptplay.net.vn/static/videos/demo-sport-2.mp4" type='video/mp4' />
        </video>
        <div id="overplay">
            <div id="hinhanh"><img src="<?php echo base_url() ?>assets/images/anlene1.gif"/></div>
        </div>
    </div>

</div>

</body>
</html>
