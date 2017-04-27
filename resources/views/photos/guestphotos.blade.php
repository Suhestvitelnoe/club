@extends('layouts.app')
@section('content')	
<h3 class="one_theme_name">Мои фото 
</h3>
	<div class="col-md-12">
	<div id="photo_category">
		<a href="{{asset('guestphotos/index/')}}">Все фото</a>
	@foreach($cats as $key=>$cat)
		<a href="{{asset('guestphotos/index/'.$cat->id)}}">{{$cat->name}}</a>
		
		@endforeach
	</div>
	</div>
	@if(isset($one_photo))
	<div id="one_photo" >
		<div class="one_photo_block " >
			<p title="{{$one_photo->name}}">{{$one_photo->name}}</p>
			<div>
				<a href="{{asset('/media/uploads/photos/'.$one_photo->user_id."/".$one_photo->photo)}}" target="_blank">
					<img src="{{asset('/media/uploads/photos/'.$one_photo->user_id."/".$one_photo->photo)}}">
				</a>
			</div>
		</div>
	</div>
	@endif
	<div class="clear"></div>
	<div id="all_photo_block" >
@foreach($photos as $key=>$photo)
<div class="col-md-4">
<div class="photo_block " >
	<p title="{{$photo->name}}">{{$photo->name}}</p>
	<div>
		<a href="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}" target="_blank">
			<img src="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}">
		</a>
	</div>
</div>
</div>
@endforeach
</div>

@endsection
