<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .container {
            width: 80%;
            margin: 0px auto;
        }
        video {
            max-width: 100%;
            height: auto;
        }
    </style>
    <link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/c/video.js"></script>
</head>

<body>
<div class="container">
<!--    vjs-big-play-centered-->
    <video id="example_video_1" class="video-js vjs-default-skin " controls preload="none"
           poster="<?php echo base_url() ?>assets/images/poster-smarttv.png" data-setup="{}">
        <source src="<?php /*echo base_url() */?>/assets/skippable_fixed-1818.mp4" type='video/mp4'>
    </video>
</div>
<script>
    // Once the video is ready
    _V_("example_video_1").ready(function(){

        // Store the video object
        var myPlayer = this;
        // Make up an aspect ratio
        var aspectRatio = 9/16;

        function resizeVideoJS(){
            var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
            myPlayer.width(width).height( width * aspectRatio );

        }

        // Initialize resizeVideoJS()
        resizeVideoJS();
        // Then on resize call resizeVideoJS()
        window.onresize = resizeVideoJS;

    });
</script>

</body>
</html>