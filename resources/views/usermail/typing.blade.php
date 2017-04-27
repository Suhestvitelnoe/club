@extends('layouts.app')
@section('content')
<a href="#" class="link" >Ответить в чате</a>
 <div class="clear"></div>
	<div class="answer_form">
		<form  class="form-group" action="{{asset('usermail/answer/'.$res_id)}}" method="POST" enctype="multipart/form-data">
  			{!! csrf_field() !!}
			   
			<div class="col-md-12">
				<textarea  class="ckeditor" id="answer" name="answer" placeholder="Текст ответа..."></textarea>
			</div>


 <button type="submit" id="contents_submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Добавить
    </button>

</form>
</div>
<hr>
@foreach($typing as $key => $type)
	

<div id="comment_block">
	
	<div id="user_info" class="col-md-1">
   		
    	<div id="avatar">
    	
	        @if($type->senders->accounts->avatar)
	            <img src="{{asset('/media/uploads/avatar/'.$type->senders->accounts->user_id.'/s_'.$type->senders->accounts->avatar)}}"/>
	        @else
	            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
	        @endif
    	</div>
    	
	</div>

	<div  class="col-md-11">
		<p ><a href="{{asset('/'.$type->senders->name)}}" id="link" >{{$type->senders->name}}</a>	{{$type->created_at}}</p>
		<p></p>
		{!!$type->body!!}
	</div>
	<div class="clear"></div>
		</div>
<hr>


@endforeach





@endsection
