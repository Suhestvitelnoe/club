<table class='table table-hover table-striped' id="themes">
	
	<tr>
		<td>Название</td>
		<td>Исполнитель</td>
		<td>Альбом</td>
		<td>Жанр</td>
		<td>Похожие</td>
		<td>Опции</td>
	</tr>
	@foreach ($songs as $key => $song)
	<tr>
		<td >
			<a href="#">{{$song->name}}</a>
		</td>
		<td>
			{{$song->executor}}
		</td>
		<td>	
			<p>{{$song->album}}</p> 
		</td>
		<td>
			{{$song->cat_id}}
		</td>
		<td>
			{{$song->same_executor}}
		</td>
		<td id="music_options">
			<a href="{{$song->file}}" >прослушать</a>
			<a href="{{$song->file}}" >скачать</a>
		</td>
	</tr>
	@endforeach
	</table>