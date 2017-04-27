@extends('layouts.app')
@section('content')	
<h3 class="one_theme_name">Вы собираетесь отредактировать фото - "{{$edit_photo->name}}"

</h3>
<div class="edit_photo_prev">
        <a href="{{asset('/media/uploads/photos/'.$edit_photo->user_id."/".$edit_photo->photo)}}" target="_blank">
            <img src="{{asset('/media/uploads/photos/'.$edit_photo->user_id."/".$edit_photo->photo)}}">
                        
        </a>
    </div>
<form action="{{asset('photos/edit/'.$edit_photo->id)}}" method="POST" class="form-group" enctype="multipart/form-data" >
		{!! csrf_field() !!}
		@include('cabinet.includes.input_text', array('name'=>'name', 'val'=>"Заголовок",  'edit_name'=>$edit_photo->name))
		
		<div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Категория</label>

            <div class="col-md-8">
                @include('photos.includes.category')
            </div>
        </div>

		<div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Сохранить
                </button>
            </div>
        </div>

	</form>

@endsection
