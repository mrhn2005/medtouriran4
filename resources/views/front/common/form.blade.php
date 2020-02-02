<div id="hm-booking-form" class="layer-stretch m-100">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="theme-material-card" style="border: 2px solid var(--title-color)!important;">
                    <div class="sub-ttl layer-ttl-white">@lang('home.contact')</div>
                    <div class="row comment-form py-0">
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" name="first_name" id="hm-booking-form--name" required>
                                <label class="mdl-textfield__label" for="comment-name">@lang('home.fullname') <em> *</em>
                                    <span class="mdl-textfield__error">@lang('home.name_field')</span>
                                    <span class="mdl-textfield__info hidden-xs">@lang('home.name_help')</span>
                                </label>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input style="direction: ltr !important;" class="mdl-textfield__input" type="text" name="phone" pattern="[0-9+-]*" id="hm-booking-form--number" required>
                                <label class="mdl-textfield__label" for="booking-form--number">@lang('home.mobile_number') <em> * </em><small class="hidden-sm">@lang('home.mobile_help')</small>
                                    <span class="mdl-textfield__error">@lang('home.mobile_field')</span>
                                </label>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" name="country_code" id="hm-booking-form--country" required>
                                <label class="mdl-textfield__label" for="comment-name">@lang('home.country') <em> *</em>
                                    <span class="mdl-textfield__info hidden-xs">@lang('home.country_help')</span>
                                </label>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input name="onvis" class="onvis" value="">
                                <input class="mdl-textfield__input" type="text" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="hm-booking-form--email">
                                <label class="mdl-textfield__label" for="comment-email">@lang('home.email')
                                    <span class="mdl-textfield__error">@lang('home.email_field')</span>
                                    <span class="mdl-textfield__info hidden-xs">@lang('home.email_help')</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield form-input">
                                <textarea class="mdl-textfield__input" name="message" rows="3" id="hm-booking-form--comment-message"></textarea>
                                <label class="mdl-textfield__label" for="comment-message">@lang('home.how_can_we')</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-submit">
                                <button style="margin-top: 0 !important;" type="submit" class="button--default
                                 button--thirdary">@lang('home.submit')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>