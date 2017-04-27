@extends('layouts.app')

@section('content')

<div id="one_theme" class="col-md-12">
	<div class="one_theme_name">
		{!!$oneArticle->name!!}
		<div class="option">			
			<a href="#"><img src="{{asset('media/img/like.png')}}" class="options" ></a>
				<a href="#"><img src="{{asset('media/img/dislike.png')}}" class="options"></a>
			<a href="{{asset('articles/edit/'.$oneArticle->id)}}"><img src="{{asset('media/img/edit.png')}}" class="options"/></a>
			
			<a href="{{asset('articles/delete/'.$oneArticle->id)}}"><img src="{{asset('media/img/delete.png')}}" class="options"/></a>
		</div>
	</div>
	<div id="one_theme_description" class="col-md-12">
	@if(!empty($oneArticle->picture))
	<a href="{{asset('/media/uploads/photos/'.$oneArticle->user_id."/".$oneArticle->picture)}}"><img src="{{asset('/media/uploads/photos/'.$oneArticle->user_id."/".$oneArticle->picture)}}" class="one_article_photo"></a><br>
	@endif
		{!!$oneArticle->body!!}
		
		
	</div>
	<div class="option">			
			<a href="#"><img src="{{asset('media/img/like.png')}}" class="options" ></a>
				<a href="#"><img src="{{asset('media/img/dislike.png')}}" class="options"></a>
			<a href="{{asset('articles/edit/'.$oneArticle->id)}}"><img src="{{asset('media/img/edit.png')}}" class="options"/></a>
			
			<a href="{{asset('articles/delete/'.$oneArticle->id)}}"><img src="{{asset('media/img/delete.png')}}" class="options"/></a>
		</div>
</div>

<p id="leave_comment">Коментарии</p>
@foreach ($comments as $key=>$comment)

<div class="comment_block">
	<div class="user_info">
    	@include('includes.avatar',array('ava'=>$comment->users->accounts))
	</div>
	<div class="comment_body" >
		<p ><a href="#" class="link" >{{$comment->users->name}}</a>	{{$comment->created_at}}</p>
		{!!$comment->comment!!}
	</div>
	<div class="clear"></div>
	<a href="#" class="link" >Ответить</a>

</div>
<hr>
@endforeach
<div class="clear"></div>
<p id="leave_comment">Оставить комментарий</p>
<form  class="form-group" action="{{asset('comments/comment/'.$oneArticle->id)}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
			   
					<div class="col-md-12">
						<textarea  class="ckeditor" id="comment" name="comment" placeholder="Ваш комментарий..."></textarea>
					</div>
				

				
	   		
	  
	   
	    	
<div class="clear"></div>
 <button type="submit" id="contents_submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Добавить
    </button>
</form>


@endsection