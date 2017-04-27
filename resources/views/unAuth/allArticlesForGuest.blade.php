@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Все статьи	</h3>
{!!$articles->links()!!}
	@foreach ($articles as $key => $article)
	<div id="themes">
		<a href="{{asset('articlesForGuest/onearticle/'.$article->id)}}">{!!$article->name!!}</a>						
	<div class="more">			
	</div>
	</div>
	<div class="article_info">
		<p>Автор: {!!$article->users->name!!} 
		| <a href="{{asset('articlesForGuest/onearticle/'.$article->id)}}">Комментировать</a> 
		| <a href="{{asset('comments/allcomments/'.$article->id)}}">Все комментарии </a>
		<a href="#"><img src="{{asset('media/img/like.png')}}" class="likedislike" ></a>
		<a href="#"><img src="{{asset('media/img/dislike.png')}}" class="likedislike"></a>
		</p>				
	</div>
	<div class="clear"></div>
	@endforeach
{!!$articles->links()!!}
@endsection
