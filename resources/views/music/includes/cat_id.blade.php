
	<div id="music_category" class="col-md-12">
@foreach ($genres as $key=>$genre)
	<div class="link_music_category">
	@if(!Auth::guest())
		<a href="{{asset('musics/index/'.$genre->name)}}">{{$genre->name}}</a>
	@else
		<a href="{{asset('guestmusics/index/'.$genre->name)}}">{{$genre->name}}</a>
	@endif
	</div>
@endforeach
	</div>

