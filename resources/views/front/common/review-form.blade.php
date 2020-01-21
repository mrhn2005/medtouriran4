<input type="hidden" value="{{App::getLocale()}}" name="locale">
<div class="theme-material-card">
    <div class="sub-ttl layer-ttl-white">Comments (2)</div>
    <ul class="comment-section">
        <li class="comment user-comment">
            <div class="info">
                <p>Anthony Collins</p>
                <span>2 hour ago</span>
            </div>
            <div class="avatar">
                <img src="/images/avatar.jpg" alt="">
            </div>
            <p class="comment-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ad odio, doloribus dicta. Nesciunt odit, sed optio repudiandae.
            </p>
        </li>
        <li class="comment author-comment">
            <div class="info">
                <p>MedTourIran</p>
                <span>1 hour ago</span>
            </div>
            <div class="avatar">
                <img src="/images/avatar.jpg" alt="">
            </div>
            <p class="comment-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ad odio, doloribus dicta. Nesciunt odit, sed optio repudiandae.
            </p>
        </li>
        <li class="comment user-comment">
            <div class="info">
                <p>Anthony Collins</p>
                <span>2 hour ago</span>
            </div>
            <div class="avatar">
                <img src="/images/avatar.jpg" alt="">
            </div>
            <p class="comment-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ad odio, doloribus dicta. Nesciunt odit, sed optio repudiandae.
            </p>
        </li>
    </ul>
    <div class="sub-ttl layer-ttl-white">@lang('home.write_review')</div>
    <div class="row comment-form">
        <div class="col-sm-6">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                <input class="mdl-textfield__input" type="text" name="name" id="hm-booking-form--name" required>
                <label class="mdl-textfield__label" for="comment-name">@lang('home.fullname') <em> *</em></label>
                <span class="mdl-textfield__error">@lang('home.name_field')</span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="hm-booking-form--email">
                <label class="mdl-textfield__label" for="comment-email">@lang('home.email')</label>
                <span class="mdl-textfield__error">@lang('home.email_field')</span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="mdl-textfield mdl-js-textfield form-input">
                <input name="onvis" class="onvis" value="">
                <textarea class="mdl-textfield__input" name="comment" rows="4" id="package-page--comment-message" ></textarea>
                <label class="mdl-textfield__label" for="comment-message">@lang('home.your_comment')</label>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-submit">
                <button type="submit" class="button--default button--thirdary" style="width: fit-content;margin-top: 0 !important;">@lang('home.submit_comment')</button>
            </div>
        </div>  
    </div>
</div>