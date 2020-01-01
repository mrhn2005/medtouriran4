$('#video-sample-frame--player').click(function(){

    $('<iframe class="video-sample-frame--video" src="https://www.youtube.com/embed/'+site_video+'?rel=0&amp;showinfo=0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>').appendTo('#introduction-video');
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
