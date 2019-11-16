<div id="hm-video-sample" class="parallax-background lazy" style="margin-top: 100px !important;">
    <div class="video-bg1"></div>
    <div class="video-bg2"></div>
    <div class="video-bg-v"></div>
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="video-sample-frame">
                        <img class="video-sample-frame--img lazy" data-src="/images/video_review/medtour.png" alt="tehran">
                        <div class="video-sample-frame-player">
                            <i id="video-sample-frame--player-close" class="fa fa-close"></i>
                            <iframe class="video-sample-frame--video" data-loader="youtube" data-src="{{setting('site.site_video')}}" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="video-sample-detail">
                       <h4 class="text-uppercase">@lang('home.video_sample_title')</h4>
                        <p>@lang('home.video_sample_text')</p>
                        <button id="video-sample-frame--player" class="button--default button--primary mx-xs-auto p-xs-3"><i class="fa fa-play-circle-o"></i>@lang('home.watch_video')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
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
    </script>

@endsection