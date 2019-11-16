
@php

if(!isset($innerLoop)){
    $sub_counter=0;
    if($is_rtl){
        $items=$items->reverse();
    }
    echo '<ul class="menu p-0">';
    
}else{
    $sub_counter++;
    if($sub_counter==1){
        echo '<ul class="menu-dropdown menu-dropdown-1">';
    }
    else{
        echo '<ul class="menu-dropdown menu-dropdown-2">';
        
    }
}

@endphp


@foreach ($items as $item)

@php
    $originalItem = $item;

    
    

    $listItemClass = null;
    $linkAttributes =  null;
    $styles = null;
    $icon = null;
    $caret = null;



    // With Children Attributes
    if(count($originalItem->children)>0) {
        $linkAttributes =  'class="mdl-button mdl-js-button mdl-js-ripple-effect"';
        $icon_arrow='<i class="fa fa-chevron-down"></i>';
        if($sub_counter==1){
            $icon_arrow='<i class="fa fa-chevron-rl float-rev" style="line-height: inherit;"></i>';
        }
        
    }
    else{
        $linkAttributes =  '';
        
        
            $icon_arrow='';
       
    }

    
   
@endphp

@if($item->title=='Procedures')
    <li class="menu-megamenu-li">
        <a href="{{route('procedure.index')}}"  class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.procedures') <i class="fa fa-chevron-down"></i></a>
        <ul class="menu-megamenu">
            <li class="row">
                @foreach($options->categories->where('parent_id',null)->all() as $category)
                
                <div class="col-lg-6">
                    <div class="megamenu-ttl">{{$category->getTranslatedAttribute('title')}}</div>
                    <ul>
                        @foreach($category->children as $child)
                            @if(!empty($child->body))
                            <li><a href="{{route('procedure.show',[$child,$child->slug])}}" >{{$child->getTranslatedAttribute('title')}}</a></li>
                            @else
                            <li>{{$child->getTranslatedAttribute('title')}}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </li>
        </ul>
    </li>
@else
    <li>
        <a href="{{$item->link()}}"  {!!$linkAttributes!!}>{{ $item->getTranslatedAttribute('title') }} {!! $icon_arrow !!}
        </a>
        @if(count($originalItem->children)>0)
        @include('front.common.menu-dynamic', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endif
@endforeach
@if(!isset($innerLoop))
    <li id="menu-lang">
        <a class="mdl-button mdl-js-button mdl-js-ripple-effect"> {{config('app.locales')[App::getLocale()]}}  <i class="fa fa-chevron-down"></i></a>
        <ul class="menu-dropdown menu-lang--ul">
            @foreach (config('app.locales') as $localeKey => $locale)
                @if ($localeKey != app()->getLocale())
                    <li><a href="{{ route('locale.switch', $localeKey) }}">{{ $locale }}</a></li>
                @endif
            @endforeach

        </ul>

    </li>
@endif
</ul>
