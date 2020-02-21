<input type="hidden" value="{{App::getLocale()}}" name="locale">
<div class="sub-ttl layer-ttl-white">@lang('home.write_review')</div>
<div class="row comment-form py-0">
    <div class="col-sm-12">
        <textarea name="comment" rows="4" id="comment-message" placeholder="@lang('home.your_comment')" required></textarea>
    </div>
    <div class="col-sm-6">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
            <input class="mdl-textfield__input" type="text" name="comment-name" id="name-message" required>
            <label class="mdl-textfield__label" for="comment-name">@lang('home.fullname') <em> *</em></label>
            <span class="mdl-textfield__error">@lang('home.name_field')</span>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
            <input class="mdl-textfield__input" type="text" name="comment-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email-message">
            <label class="mdl-textfield__label" for="comment-email">@lang('home.email')</label>
            <span class="mdl-textfield__error">@lang('home.email_field')</span>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-submit">
            <button type="submit" class="button--default button--thirdary" style="width: fit-content;margin-top:0 !important">@lang('home.submit_comment')</button>
        </div>
    </div>  
</div>