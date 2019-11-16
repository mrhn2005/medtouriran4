@foreach ($items as $item)
    {{$item->getTranslatedAttribute('title')}}
    @if(!$loop->last)
        ,
    @endif
@endforeach