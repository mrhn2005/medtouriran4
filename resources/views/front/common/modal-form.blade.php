

<!-- PACKAGE BOOK MODAL -->
<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
    @csrf
    @if(isset($package))
    <input type="hidden" name="package_id" value={{$package->id}} >
    @endif
    <div id="package-page--book-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">@lang('home.package_book')</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="package-page--book-error"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-user-o"></i>
                                <input class="mdl-textfield__input" type="text" name="first_name">
                                <label class="mdl-textfield__label" for="comment-name">@lang('home.fullname')<em> *</em></label>
                                <span class="mdl-textfield__error">@lang('home.name_field')</span>
                                <span class="mdl-textfield__info">@lang('home.name_help')</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-envelope-o"></i>
                                <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                <label class="mdl-textfield__label" for="comment-email">@lang('home.email')</label>
                                <span class="mdl-textfield__error">@lang('home.email_field')</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-phone"></i>
                                <input class="mdl-textfield__input" type="text" name="phone" pattern="[0-9+-]*">
                                <label class="mdl-textfield__label" for="booking-form--number">@lang('home.mobile_number') <em> * </em><small> @lang('home.mobile_help')</small></label>
                                <span class="mdl-textfield__error">@lang('home.mobile_field')</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                                <i class="fa fa-map-marker-alt"></i>
                                <input name="onvis" class="onvis" value="">
                                <input class="mdl-textfield__input" type="text" name="country_code" >
                                <label class="mdl-textfield__label" for="comment-name">@lang('home.country') <em> *</em></label>
                                <span class="mdl-textfield__info">@lang('home.country_help')</span>

                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <button class="button--default button--thirdary">@lang('home.submit')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Make an Appointment Modal -->