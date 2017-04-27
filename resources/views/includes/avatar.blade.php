

	        @if(isset($ava->avatar))
	            <img src="{{asset('/media/uploads/avatar/'.$ava->user_id.'/s_'.$ava->avatar)}}"/>
	        @else
	            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
	        @endif

