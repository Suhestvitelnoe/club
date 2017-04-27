@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Вы собираетесь отредактировать тему - "{{$edit_theme->name}}"
		
	</h3>

	<form method="POST" action="{{asset('themes/edit/'.$edit_theme->id)}}" class="form-group" >
                        {!! csrf_field() !!}

		<div class="form-group">
			<div class="col-md-8">
				<input type="text" class="form-control" name="name" value="{{$edit_theme->name}}" placeholder="Заголовок темы">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<input type="text" class="form-control" name="keywords" value="{{$edit_theme->keywords}}" placeholder="Ключевые слова">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-8">
				<input type="text" class="form-control" name="slug" value="{{$edit_theme->slug}}" placeholder="Алиас">
			</div>
		</div>
		<br>
		<div>
			<div class="col-md-12">
				<textarea  name="description"  >{{$edit_theme->description}}</textarea>
			</div>
		</div>
		<br>
		<div class="form-group">
       		<div id="themes_submit" >
	            <button type="submit" id="themes_submit" class="btn btn-primary">
	                <i class="fa fa-btn fa-sign-in"></i>Сохранить
	            </button>
        	</div>
   		</div>
	</form>

@endsection
