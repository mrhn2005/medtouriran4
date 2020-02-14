var youtube_iframe='<div id="main-video-intro"><iframe class="video-sample-frame--video" src="https://www.youtube.com/embed/'+site_video+'?rel=0&amp;showinfo=0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe></div>';
$('#video-sample-frame--player').click(function(){
    $(youtube_iframe).appendTo('#introduction-video');
    $(".video-sample-frame-player").show(500);
});
$('#video-sample-frame--player-close').click(function() {
    $('#main-video-intro').remove();
    $(".video-sample-frame-player").hide(500);
});
$(window).resize(function () {
    // var frameImage = $('img.video-sample-frame--img');
    if ($(window).width() > 992) {
        $('img.video-sample-frame--img').attr("data-src","/images/video_review/medtour.png");
    } else {
        $('img.video-sample-frame--img').attr("data-src","/images/video_review/medtour-xs.png");
    }
});

var owl = $('#testimonial-slider');
owl.owlCarousel();
// Listen to owl events:
owl.on('changed.owl.carousel', function(event) {
    var player =$('#testimonial-slider .owl-stage-outer .owl-stage .active .video-sample-frame iframe');
    var videoURL = player.prop('src');
    videoURL = videoURL.replace("&autoplay=1", "");
    player.prop('src','');
    player.prop('src',videoURL);
})
