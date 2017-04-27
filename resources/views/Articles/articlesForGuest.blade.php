@extends('layouts.app')
@section('content')

<h3 class="one_theme_name">Статьи </h3>
@foreach ($articles as $one)

<div class="bg-info">
	<h3><a href="{{asset('themesForGuest/article/'.$one->themes->id)}}">{!!$one->themes->name!!}</a> 
	/ <a href="{{asset('articlesForGuest/onearticle/'.$one->id)}}">{{$one->name}}</a></h3>

</div>	
@endforeach
	<div id="one_theme">

<div id="one_theme_description">

{{substr($one->body,0,200)}} 

</div>

</div>
<div class="article_info">
<h4>Комментарии</h4> 


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


<table>
<tr>
<td class="table_td">Автор</td>
<td class="table_td">Дата</td>
</tr>
@foreach($comments as $one)
<tr>
<td class="table_td">{{$one->users->name}}</td>
<td class="table_td">{{$one->formatCreatedDate()}}</td>
</tr>
<div class="clear"></div>
@endforeach
</table>

{!! $articles->links() !!}

{!!$articles->links()!!}



@endsection
