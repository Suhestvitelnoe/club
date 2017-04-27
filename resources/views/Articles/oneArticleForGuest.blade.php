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
	<div id="user_info" class="col-md-2">
   		<p>{{$personal->fio}}</p>
    	<div id="avatar">
	        @if($personal->avatar)
	            <img src="{{asset('/media/uploads/avatar/'.$personal->user_id.'/s_'.$personal->avatar)}}"/>
	        @else
	            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
	        @endif
    	</div>
    	<div class="service_info">
	        <p>Статус: {{$personal->status}}</p>
	        <p>Рейтинг: {{$personal->raiting}}</p>
	        <p>Дата регистрации: {{$personal->created_at}}</p>
   		</div>
	</div>
	<div id="comment_body" class="col-md-10">
		<p class="post_number">Пост {{$comment->id}}</p>
		{!!$comment->comment!!}
	</div>
</div>
@endforeach
@endsection