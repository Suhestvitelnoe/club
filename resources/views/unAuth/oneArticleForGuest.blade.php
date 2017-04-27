@extends('layouts.app')
@section('content')

<div id="one_theme" class="col-md-12">
	<div class="one_theme_name">
		{!!$oneArticle->name!!}
	</div>
	<div id="one_theme_description" class="col-md-12">
		{!!$oneArticle->body!!}		
	<div >
		</div>
	</div>
</div>
<p id="leave_comment">Коментарии</p>
@foreach ($comments as $key=>$comment)
<div id="comment_block">	
	<div id="user_info" class="col-md-1">
    	<div id="avatar">
	        @if($comment->users->accounts->avatar)
	            <img src="{{asset('/media/uploads/avatar/'.$comment->users->accounts->user_id.'/s_'.$comment->users->accounts->avatar)}}"/>
	        @else
	            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
	        @endif
    	</div>   	
	</div>
	<div  class="col-md-11">
		<p ><a href="#" id="link" >{{$comment->users->name}}</a>	{{$comment->created_at}}</p>
		<p></p>
		{!!$comment->comment!!}
	</div>
	<div class="clear"></div>
	<a href="#" id="link" >Ответить</a>
</div>
<hr>
@endforeach
@if(!Auth::guest())
	<p id="leave_comment">Оставить комментарий</p>
<form  class="form-group" action="{{asset('comments/comment/'.$oneArticle->id)}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}			   
					<div class="col-md-10">
						<textarea  class="ckeditor" name="comment" placeholder="Ваш комментарий..."></textarea>
					</div>    	
<div class="clear"></div>
 <button type="submit" id="contents_submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Добавить
    </button>
</form>
@endif
@endsection