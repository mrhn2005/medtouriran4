$('#video-sample-frame--player').click(function(){
    // alert('clicked');
    $(".video-sample-frame-player").show(500);
});
$('#video-sample-frame--player-close').click(function() {
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
