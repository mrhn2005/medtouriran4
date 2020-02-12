@if(count($reviews->where('active', 1))>0)
<div class="theme-material-card" id="package-page--reviews">
        <div class="sub-ttl">@lang('home.reviews') ({{count($reviews)}})</div>
        <ul class="comment-list">
            @foreach($reviews->where('active', 1) as $review)
            <li>
                <div class="row">
                    <div class="col-2 hidden-xs-down comment-img">
                        <div class="theme-img">
                            <img width="70px" src="/images/avatar.jpg" alt="avatar image">
                        </div>
                    </div>
                    <div class="col-10 comment-detail">
                        <div class="comment-meta">
                            <span>{{$review->name}}</span>
                            <span>{{$review->created_at->format('d M Y')}}</span>
                        </div>
                        <div class="comment-post">
                            {{$review->comment}}
                        </div>
                         <ul class="comment-action">
                            <li><a><i class="fa fa-thumbs-up"></i>Like (0)</a></li>
                            <li><a><i class="fa fa-thumbs-down"></i>Dislike (0)</a></li>
                            <li><a onclick="showReplyBox({{$review->name}})" id="{{$review->name}}"><i class="fa fa-reply"></i>Reply</a></li>
                        </ul>
                    </div>
                </div>
                <div class="comment-form reply-card row" id="replyBox-{{$review->name}}">
                    <div class="col-sm-12">
                        <textarea name="comment" rows="4" id="package-page--comment-message" placeholder="@lang('home.your_reply')"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" name="name" id="hm-booking-form--name" required="">
                            <label class="mdl-textfield__label" for="comment-name">@lang('home.fullname') <em> *</em></label>
                            <span class="mdl-textfield__error">@lang('home.name_field')</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded" data-upgraded=",MaterialTextfield">
                            <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="hm-booking-form--email">
                            <label class="mdl-textfield__label" for="comment-email">@lang('home.email')</label>
                            <span class="mdl-textfield__error">@lang('home.email_field')</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-submit">
                            <button type="submit" class="button--default button--thirdary" style="width: fit-content;margin-top:0 !important">@lang('home.submit_reply')</button>
                        </div>
                    </div>  
                </div>
            </li>
            @endforeach
        </ul>
</div>
@endif

@section('js')

<script>
    function showReplyBox(idBox) {
        var x = document.getElementById('"replyBox-"+ idBox');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection