<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
        <i class="fa fa-user-o"></i>
        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="sideapnt-name">
        <label class="mdl-textfield__label" for="sideapnt-name">@lang('home.fullname')</label>
        <span class="mdl-textfield__error">@lang('home.name_field')</span>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
        <i class="fa fa-envelope-o"></i>
        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="sideapnt-email">
        <label class="mdl-textfield__label" for="sideapnt-email">@lang('home.email')</label>
        <span class="mdl-textfield__error">@lang('home.email_field')</span>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
        <i class="fa fa-phone"></i>
        <input class="mdl-textfield__input" type="text" pattern="[0-9+]*" id="sideapnt-mobile">
        <label class="mdl-textfield__label" for="sideapnt-mobile">@lang('home.mobile_number')</label>
        <span class="mdl-textfield__error">@lang('home.mobile_field')</span>
    </div>
    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
        <i class="fa fa-hospital-o"></i>
        <select name="category_id" class="mdl-selectfield__select" id="sideapnt-department">
            <option value=""></option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->getTranslatedAttribute('title')}}</option>  
            @endforeach
        </select>
        <label class="mdl-selectfield__label" for="sideapnt-department">@lang('home.choose_department')</label>
    </div>
    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
        <i class="fa fa-user-md"></i>
        <select name="doctor_id" class="mdl-selectfield__select" id="sideapnt-doctor">
            <option value=""></option>
            @foreach($all_doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->getTranslatedAttribute('name')}}</option>
            @endforeach
        </select>
        <label class="mdl-selectfield__label" for="sideapnt-doctor">@lang('home.choose_doctor')</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
        <i class="fa fa-calendar-o"></i>
        <input name="date" class="mdl-textfield__input" type="text" id="sideapnt-date" onfocus="(this.type='date')" onblur="(this.type='text')">
        <label class="mdl-textfield__label" for="sideapnt-date">@lang('home.date')</label>
        <span class="mdl-textfield__error">@lang('home.date_field')</span>
    </div>
    <div class="side-error"></div>
    <button class="button--default button--thirdary side-appointment" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Processing">@lang('home.submit')</button>
    @csrf
</form>