
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection



@section('content')	
    <div class="page-ttl faq-bg">
        <div class="page-ttl-container">
            <h1 class="text-uppercase">@lang('home.faq')</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{ route('home') }}">@lang('home.home')</a>  <span>@lang('home.faq')</span></p>
    </div><!-- End Page Title Section -->
    {!! ViewHelper::faq() !!}
    <!-- Start Form Section -->
    @include('front.pages.home.includes.form')
    <!-- End Form Section -->
@endsection

@section('js')
    <script>
        function searchBar() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('sidebar-search');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myList");
            li = ul.getElementsByClassName('myList-item');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByClassName("myList-title")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endsection