@extends('layouts.app')
@section('scripts')
	@parent
		<script type="text/javascript" src="{{asset('dist/jplayer/jquery.jplayer.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('dist/add-on/jplayer.playlist.min.js')}}"></script>
	    	<script>
		
//<![CDATA[
	$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
	@foreach($songs as $key=>$song)
		{
			title:"{{$song->name}}",
			mp3:"{{asset('/uploads/music/'.$song->user_id.'/'.$song->file)}}",
			oga:""
		},
	@endforeach

	], {
		swfPath: "../../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
//]]>
	</script>

@stop
@section('styles')
	@parent
		<link href="{{asset('dist/skin/blue.monday/css/jplayer.blue.monday.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')	
<div class="col-md-12">	
	<h3 class="one_theme_name">Мои аудио 
		
			<p id="add_new_song" class="btn btn-primary">Добавить песню</p>
			
		
		<p id="cat_id_music" class="btn btn-primary">Жанры</p>
	</h3>

	@if(!Auth::guest())
		@include('music.includes.add_music')

	@endif

	  @include('music.includes.cat_id', array('songs'=>$songs))
	<div class="col-md-12">
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-previous" role="button" tabindex="0">previous</button>
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-next" role="button" tabindex="0">next</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>
			<div class="jp-toggles">
				<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</div>

        
          
 

	
	</div>

@endsection
