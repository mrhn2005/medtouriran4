<div class="wa__btn_popup">
    <div class="wa__btn_popup_txt">@lang('home.need_help') <strong>@lang('home.chat_with')</strong></div>
    <div class="wa__btn_popup_icon"></div>
</div>

<div class="wa__popup_chat_box">
    <div class="wa__popup_heading">
        <div class="wa__popup_title">@lang('home.conversation')</div>
        <div class="wa__popup_intro">@lang('home.choose_language')</div>
    </div>
    <!-- /.wa__popup_heading -->
    <div class="wa__popup_content wa__popup_content_left">
        <div class="wa__popup_notice">@lang('home.team_replies')</div>
        
                
        <div class="wa__popup_content_list">
            @foreach($whatsapp_accounts as $account)
            	<div class="wa__popup_content_item ">
				    <a target="_blank" href="https://web.whatsapp.com/send?phone={{$account->phone}}" class="wa__stt wa__stt_online">
				    	<div class="wa__popup_avatar">
                        <img class="lazy" data-src=" {{Voyager::image($account->avatar)}}"  alt="avatar-{{$account->title}}" style="width:50px;height:50px">
                         </div>
					        
                        <div class="wa__popup_txt">
                            <div class="wa__member_name">{{$account->title}}</div>
                            <!-- /.wa__member_name -->
                            <div class="wa__member_duty"></div>
                            <!-- /.wa__member_duty -->
                        </div>
                        <!-- /.wa__popup_txt -->
                    </a>
                </div>
            @endforeach
            
        </div>
        <!-- /.wa__popup_content_list -->
    </div>
    <!-- /.wa__popup_content -->
</div>