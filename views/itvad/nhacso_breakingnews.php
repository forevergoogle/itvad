
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
   <!-- <meta name="viewport" content="width=device-width; initial-scale=1.0">-->
    <title>Demo NhacSo</title>
    <!-- AdsPlay HTML5 Video Ads CSS-->
    <?php echo link_tag('assets/css/videojs.ads.css') . "\n" ?>
    <?php echo link_tag('assets/css/videojs.css') . "\n" ?>
    <?php echo link_tag('assets/css/video-js.css') . "\n" ?>
    <?php echo link_tag('assets/css/style.css') . "\n" ?>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(stopText,14000);
            setTimeout(playText, 24000);
            setTimeout(stopmarquee,38000);

            function stopText(){
                document.getElementById('mymarquee').stop();
            }
            function playText(){
                document.getElementById('mymarquee').start();
            }

            function stopmarquee(){
                $('.break-news').hide();
            }

        });
    </script>

</head>
<body class="main">
<div class="test">
    <div class="imgbg"> <img src="<?php echo base_url() ?>assets/images/demo_adBG_ns.png"></div>
    <div class="example-video-container-ns">
        <div class="break-news"><marquee id="mymarquee">Điện thoại màn hình 4 inch mới của Apple có thiết kế giống 5s nhưng cấu hình gồm chip A9, camera 12 megapixel tương đương 6s</marquee></div>
        <video id="my-video" class="video-js vjs-default-skin" autoplay controls preload="auto" data-setup='{}'  >
            <source src="http://ads.fptplay.net.vn/static/videos/demo-sport-2.mp4" type='video/mp4' />
        </video>

    </div>

</div>

</body>
</html>
