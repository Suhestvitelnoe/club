@extends('layouts.app')
@section('content')
@if($theme!=null)
<h3 class="one_theme_name">Тема: "{{$theme->name}}"
		@if(!Auth::guest())
			<p id="add_new_song" class="btn btn-primary">Добавить статью</p>
		@endif
	</h3>
@else
	<h3 class="one_theme_name">"Мои статьи"
		@if(!Auth::guest())
			<p id="add_new_song" class="btn btn-primary">Добавить статью</p>
		@endif
	</h3>

@endif
	<form method="POST" action="{{asset('articles/add/'.$theme_id)}}" class="showhide_form" class="form-inline" enctype="multipart/form-data" >
                        {!! csrf_field() !!}

		<div class="form-group">
		 <label class="col-md-12 control-label">Название статьи</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="name" placeholder="Название статьи">
			</div>
		</div>
		<div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
            <label class="col-md-12 control-label">Картинка</label>

            <div class="col-md-8">
                <input type="file" class="form-control" name="pic" >
            </div>
        </div>

		
		<div class="form-group">
		<label class="col-md-12 control-label">Ключевые слова</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="keywords" placeholder="Ключевые слова">
			</div>
		</div>
		<div class="form-group">
		<label class="col-md-12 control-label">Алиас</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="slug" placeholder="Алиас">
			</div>
		</div>
		
		<div>
		<label class="col-md-12 control-label">Текст статьи</label>
			<div class="col-md-12">
				<textarea   name="body" placeholder="Статья полностью"></textarea>
			</div>
		</div>
		<br>
		<div class="form-group">
       		<div id="themes_submit" >
	            <button type="submit" id="themes_submit" class="btn btn-primary">
	                <i class="fa fa-btn fa-sign-in"></i>Добавить
	            </button>
        	</div>
   		</div>
	</form>
	<div class="clear"></div>

	
	{!!$articles->links()!!}
	@foreach ($articles as $key => $article)
		<div id="themes">
			<a href="{{asset('articles/onearticle/'.$article->id)}}">{!!$article->name!!}</a>
			@if(!empty($article->picture))
			<img src="{{asset('/media/uploads/photos/'.$article->user_id."/".$article->picture)}}" class="article_photo">
			@endif
			
			<div class="more">
			
				
	</div>

	</div>
	<div class="article_info">
				<p>Автор: {!!$article->users->name!!} 
				
				| <a href="{{asset('articles/onearticle/'.$article->id)}}">Комментировать</a> 
				| <a href="{{asset('comments/allcomments/'.$article->id)}}">Все комментарии </a>
						
		
			
				<a href="{{asset('articles/delete/'.$article->id)}}"><img src="{{asset('media/img/delete.png')}}" class="options"/></a>
		
				<a href="#"><img src="{{asset('media/img/like.png')}}" class="likedislike" ></a>
				<a href="#"><img src="{{asset('media/img/dislike.png')}}" class="likedislike"></a>

				</p>
				
	</div>
	<div class="clear"></div>
	@endforeach

{!!$articles->links()!!}
@endsection
