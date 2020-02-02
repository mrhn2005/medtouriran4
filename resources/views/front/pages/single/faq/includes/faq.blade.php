
<!-- Start Faq Section -->
<div class="layer-stretch" id="faq-page">
    <div class="layer-wrapper text-center">
        <div class="row">
            <div class="col-lg-8 text-center">
                <div class="theme-accordion-container" id="myList">
                    @foreach ($faqs as $faq)
                        <div class="theme-accordion myList-item c-filter A C">
                            <div class="theme-accordion-hdr">
                                <h4 class="myList-title"><i class="fa fa-question"></i> {{$faq->getTranslatedAttribute('question')}}</h4>
                                <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                            </div>
                            <div class="theme-accordion-bdy">
                                <div class="paragraph-medium paragraph-black">

                                    {!!$faq->getTranslatedAttribute('answer')!!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="theme-material-card text-center px-0 pb-0" id="search">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input pl-40">
                        <input class="mdl-textfield__input" type="text" id="sidebar-search" onkeyup="searchBar()">
                        <label class="mdl-textfield__label pl-40" for="sidebar-search">Filter by ...</label>
                        <i class="fa fa-search search-button left-0"></i>
                    </div>

                    <div class="theme-accordion-container faq-filter--list">
                        <div class="theme-accordion w-100">
                            <div class="theme-accordion-hdr faq-filter--item city-filter active text-center" data-filter="all">Show All</div>
                        </div>
                        <div class="theme-accordion w-100">
                            <div class="theme-accordion-hdr faq-filter--item city-filter" data-filter="A">Eye care
                                <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                            </div>
                            <div class="theme-accordion-bdy">
                                <div class="faq-filter--item city-filter" data-filter="B">Eye care</div>
                                <div class="faq-filter--item city-filter" data-filter="C">Eye care</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div><!-- End FAQ Section -->

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