@extends('layouts.app')
@section('content')
<h3>Вы искали пользователя: "{{ Request::input('query') }}" </h3>
@if (!$users->count())
<p>По вашему запросу пользователей не найдено</p>
@else
<div class="row">
	<div class="col-lg-12">
<table class="table table-bordered table-striped table-hover table_tr" width=100%>
<thead>
<th>Заставка</th> <th>Пользователь</th> <th>Действие</th>
</thead>
<tr>
@foreach ($users as $one)
	<td>
 <a href="/{{$one->name}}"> @include('includes.avatar', array('ava'=>$one->accounts)) </a>
	</td>
	<td>
<a href="{{asset($one->name)}}">{{$one->name}}</a>
	</td>
<td>
 
@if(isset($one->friends->id))
	@if(Auth::user()->id == $one->friends->friend_id)
		@if($one->friends->accept == 1)
			уже являетесь другом
		@elseif($one->friends->accept == 0)
			ваш запрос на дружбу принят
		@endif
	@else
		@if(Auth::user()->id != $one->friends->user_id)
		{{$one->friends->id}}
			<a href="{{asset('friends/add/'.$one->id)}}">Добавить в друзья 1</a>
		@endif 
	@endif
@elseif(isset($one->friendsuser->id))
	@if(Auth::user()->id == $one->friendsuser->user_id)
		@if($one->friendsuser->accept == 1)
			уже являетесь другом
		@elseif($one->friendsuser->accept == 0)
			ваш запрос на дружбу принят
		@endif
	@else
		@if(Auth::user()->id != $one->friendsuser->user_id)
		{{$one->friendsuser->id}}
			<a href="{{asset('friends/add/'.$one->id)}}">Добавить в друзья</a>
		@endif 
	@endif
@else
	@if(Auth::user()->id != $one->id)
		<a href="{{asset('friends/add/'.$one->id)}}">Добавить в друзья</a>
	@else 
		это я
	@endif
@endif
</td>
@endforeach	
</tr>
</table>
	</div>	
</div>
@endif
@endsection