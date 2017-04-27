@extends('layouts.app')
@section('content')	
<h3 class="one_theme_name">Вы собираетесь отредактировать отзыв о компании - "{{$feedback->companies->name}}"

</h3>

<form action="{{asset('feedback/edit/'.$feedback->id)}}" method="POST" class="form-group"  >
		{!! csrf_field() !!}
		 <div class="col-md-12">
                <textarea   name="feedback" placeholder="Ваш отзыв..." >{{$feedback->feedback}}</textarea>
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