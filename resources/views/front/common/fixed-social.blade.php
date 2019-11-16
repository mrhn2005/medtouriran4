<div class="fix-social-bar">
    <ul class="social-list-1">
        @foreach($socials as $social)
            <li>
                <a href="{{$social->getTranslatedAttribute('link')}}" target="_blank" id="social-{{strtolower($social->title)}}">
                    <div class="social-{{strtolower($social->title)}}"></div>
                </a>
                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="social-{{strtolower($social->title)}}">{{$social->title}}</span>
            </li>
        @endforeach
    </ul>
</div>