@if(count($reviews->where('active', 1))>0)
    <div class="theme-material-card">
        <div class="sub-ttl layer-ttl-white">@lang('home.reviews') ({{count($reviews)}})</div>
        <ul class="comment-section">
            @foreach($reviews->where('active', 1)->where('parent_id',null) as $review)
                <li class="comment user-comment">
                    <div class="info">
                        <p>{{$review->name}}</p>
                        <span>{{$review->created_at->diffForHumans()}}</span>
                    </div>
                    <div class="avatar">
                        <img src="/images/avatar.jpg" alt="avatar">
                    </div>
                    <p class="comment-text">
                        {{$review->comment}}
                    </p>
                </li>
                @if($reply=$review->reply)
                    <li class="comment author-comment">
                        <div class="info">
                            <p>MedTourIran</p>
                            <span>{{$reply->created_at->diffForHumans()}}</span>
                        </div>
                        <div class="avatar">
                            <img src="/images/avatar.jpg" alt="">
                        </div>
                        <p class="comment-text">
                            {{$reply->comment}}
                        </p>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
<div class="theme-material-card" style="border: 2px solid var(--title-color)!important;">
    @include('front.common.review-form-content')
</div>