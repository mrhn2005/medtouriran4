<!-- HrefLang -->
@section('hreflang')
    @php
        $blog_locales= array_diff(config('app.locales'), config('lang.except_blog_lang'));
    @endphp

    @foreach ($blog_locales as $localeKey => $locale)
        <link rel="alternate" hreflang="{{$localeKey}}"
        href="{{Helper::get_locale_url($localeKey,url()->current())}}" />
    @endforeach
@endsection

<!--End HrefLang -->