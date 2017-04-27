@extends('layouts.app')
@section('content')
<div class="col-md-12">
	<div class="col-md-6">
		<form   action="{{ url('search/friendresults') }}" class="form-inline navbar-search" role="search">
		<div class="form-group">
			<input type="text" name="query" class="form-control" placeholder="найти пользователя"/>
		</div>
			<button type="submit" class="btn btn-primary">Найти</button>
		</form>
@if($friend)
	<a href="{{asset('friends/add/'.$friend->id)}}" class="btn btn-primary">{{$friend->name}} Добавить друга</a>
@endif
<h3>Мои друзья</h3>
<table class="table table-bordered table-striped table-hover table_tr">
	<thead>
	<th>Заставка</th> <th>Пользователь</th> <th>Действие</th>
	</thead>
@foreach ($friends as $friend)
	<tr>
	<td>
		<a href="{{$friend->users->name}}" class="avatar_friend"> @include('includes.avatar', array('ava'=>$friend->users->accounts)) </a>
	</td>
	<td>
		<a href="{{asset((isset($friend->friends->name))?$friend->friends->name:'')}}">{{(isset($friend->friends->name))?$friend->friends->name:''}}</a>
	</td>
	<td>
		<a href="{{asset('friends/delete/'.$friend->id)}}">{{$friend->name}}Удалить друга</a>
	</td>
	</tr>
@endforeach
@foreach ($friendss as $friend)
	<tr>
	<td>
		<a href="{{$friend->users->name}}" class="avatar_friend"> @include('includes.avatar', array('ava'=>$friend->users->accounts)) </a>
	</td>
	<td>
		<a href="{{asset($friend->users->name)}}">{{$friend->users->name}}</a>
	</td>
	<td>
		<a href="{{asset('friends/delete/'.$friend->id)}}">{{$friend->name}}Удалить друга</a>
	</td>
	</tr>
@endforeach
</table>
<h3>Запросы о дружбе</h3>
<table class="table table-bordered table-striped table-hover table_tr" >
	<thead>
 <th>Пользователь</th> <th>Действие</th> 
	</thead>
@foreach ($requests as $request)
	<tr>
	<td>
		<a href="{{asset($request->friends->name)}}">{{$request->friends->name}}</a>
	</td>
	<td>
		<a href="{{asset('friends/confirm/'.$request->id)}}">принять запрос</a>
	</td>
	</tr>
@endforeach
</table>
	</div>
<div class="col-md-6">
	<form action="{{asset('search/advanced')}}" method="POST" class="form-group">
		@include('friends.includes.adition_search_friends')
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>

@include('friends.includes.advanced_results')
</div>

@endsection