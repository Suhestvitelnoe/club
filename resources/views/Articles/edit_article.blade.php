@extends('layouts.app')
@section('content')	
<h3 class="one_theme_name">Вы собираетесь отредактировать статью - "{{$article->name}}"

</h3>

<form action="{{asset('articles/edit/'.$article->id)}}" method="POST" class="form-group"  >
		{!! csrf_field() !!}

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label class=" control-label col-md-12">Заголовок статьи *</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" value="{!!$article->name!!}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            
        </div>

        <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
        <label class=" control-label col-md-12">Текст статьи *</label>
            <div class="col-md-12">
                <textarea  name="body" placeholder="Описание темы *">{!!$article->body!!}</textarea>
                @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
            </div>
            
        </div>
            <div class="clear"></div>

		<div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Сохранить
                </button>
            </div>
        </div>

	</form>

@endsection