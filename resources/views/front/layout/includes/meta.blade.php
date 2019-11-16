<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Meta Description Tag -->
<meta name="Description" content="
    @hasSection('meta_desc')
    	@yield('meta_desc')
    @else
     	{{setting(App::getLocale().'.meta_desc')}}	
    @endif
">

<!-- HrefLang -->
@foreach (config('app.locales') as $localeKey => $locale)
    <link rel="alternate" hreflang="{{$localeKey}}"
    href="{{Helper::get_locale_url($localeKey,url()->current())}}" />
@endforeach
<!--End HrefLang -->