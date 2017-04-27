@extends('layouts.app')
@section('content')	
<h3 class="one_theme_name">Мои фото 
		@if(!Auth::guest())
			<p id="add_new_song" class="btn btn-primary">Добавить фото</p>
		@endif
</h3>
<form action="{{asset('photos/photo')}}" method="POST" class="showhide_form" class="form-group" enctype="multipart/form-data" >
		{!! csrf_field() !!}
		@include('cabinet.includes.input_text', array('name'=>'name', 'val'=>'Заголовок '))
		
		<div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Категория</label>

            <div class="col-md-8">
                @include('photos.includes.category')
            </div>
        </div>
		
		<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Картинка</label>

            <div class="col-md-8">
                <input type="file" class="form-control" name="picture" >
            </div>
        </div>

		<div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Добавить
                </button>
            </div>
        </div>

	</form>
	<div class="col-md-12">
	<div id="photo_category">
		<a href="{{asset('photos/index/')}}">Все фото</a>
	@foreach($cats as $key=>$cat)
		<a href="{{asset('photos/index/'.$cat->id)}}">{{$cat->name}}</a>
		
		@endforeach
	</div>
	</div>
	<div id="all_photo_block" >
@foreach($photos as $key=>$photo)
<div class="col-md-4">
<div class="photo_block " >
	<p title="{{$photo->name}}">{{$photo->name}}</p>
	<div>
		<a href="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}" target="_blank">
			<img src="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}">

			<a href="{{asset('photos/edit/'.$photo->id)}}" class="photo_edit"><img src="{{asset('media/img/edit.png')}}" /></a>
			<a href="{{asset('photos/delete/'.$photo->id)}}" class="photo_delete"><img src="{{asset('media/img/delete.png')}}" /></a>
						
		</a>
	</div>
</div>
</div>
@endforeach
</div>

@endsection
