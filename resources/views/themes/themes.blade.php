@extends('layouts.app')
@section('content')

	

	<h3 class="one_theme_name">Список тем
		@if(!Auth::guest())
			<p id="add_new_song" class="btn btn-primary">Добавить тему</p>
		@endif
	</h3>
	<form method="POST" action="{{asset('themes/addtheme')}}" class="showhide_form" class="form-inline" >
                        {!! csrf_field() !!}

		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		<label class=" control-label col-md-12">Заголовок темы *</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="name" placeholder="Заголовок темы *">
				@if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
			</div>
			
		</div>
		
		<div class="form-group {{ $errors->has('keywords') ? ' has-error' : '' }}">
		<label class=" control-label col-md-12">Ключевые слова</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="keywords" placeholder="Ключевые слова">
			</div>
		</div>
		<div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
		<label class=" control-label col-md-12">Алиас</label>
			<div class="col-md-8">
				<input type="text" class="form-control" name="slug" placeholder="Алиас">
			</div>
		</div>
		<br>
		<div class="form-group {{ $errors->has('group_id') ? ' has-error' : '' }}">
			<label class=" control-label col-md-12">Область видимости</label>
			<div class="col-md-5">
				<select class="form-control " name="group_id">
				<option value="0">Для всех</option>
					@foreach ($mygroups as $key => $mygroup)
					<option value="{{$mygroup->id}}">{{$mygroup->name}}</option>
					@endforeach
					
				</select>
			</div>
		</div>
		<div class="col-md-3 create_group ">

			<a href="{{asset('group')}}">Создать группу</a>
		</div>
		
		<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
		<label class=" control-label col-md-12">Краткое описание *</label>
			<div class="col-md-12">
				<textarea  name="description" placeholder="Описание темы *"></textarea>
				@if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
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
	
	
	
	

	<table class='table table-hover table-bordered table-striped' id="themes">
	<tr>
		<td>Заголовок/автор</td>
		<td>Описание</td>
		
		<td>Опции</td>
	</tr>
	@foreach ($themes as $key => $theme)
	<tr>
		<td class="col-md-4">
			<a href="{{asset('articles/index/'.$theme->id)}}">{!!$theme->name!!}</a>
			Автор: {!!$theme->users->name!!}
		</td>
		<td class="col-md-6">
			{!!$theme->description!!}
		</td>
		
		<td class="col-md-2">
			<a href="#"><img src="{{asset('media/img/like.png')}}" class="theme_options" ></a>
				<a href="#"><img src="{{asset('media/img/dislike.png')}}" class="theme_options"></a>
			<a href="{{asset('themes/edit/'.$theme->id)}}"><img src="{{asset('media/img/edit.png')}}" class="theme_options"/></a>

			<a href="{{asset('themes/delete/'.$theme->id)}}"><img src="{{asset('media/img/delete.png')}}" class="theme_options"/></a>

			<form action="{{asset('/themes/visibility/'.$theme->id)}}" method="POST">
			 {!! csrf_field() !!}
				
   		</div>
			</form>
		</td>
	</tr>
	@endforeach
	</table>
	


@endsection
