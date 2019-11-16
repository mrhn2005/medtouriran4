@foreach ($package->items as $item)
<p><i class="{{$item->icon}}"></i>{{$item->getTranslatedAttribute('title')}}</p>
@endforeach