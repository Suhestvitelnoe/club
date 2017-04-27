@extends('layouts.app')
@section('content')

<table>
<tr><td>
<form   action="{{ url('search.results') }}" class="navbar-form navbar-search" role="search">
	<div class="form-group">
		<input type="text" name="query" class="form-control" placeholder="найти группу"/>
	</div>
	
		<button type="submit" class="btn btn-primary">Найти</button>
</form>
</td></tr>

<tr><td>
@foreach($all as $one)
<div class="table_tr">
<div class="bg-info">
<a href="{{asset('groups/one/'.$one->id)}}">
{{$one->name}}
</a>
</div>
</div>
</td></tr>

<tr><td>
<a href="{{asset('group/add/'.$one->id)}}"></a>
@endforeach
</td>
</tr>
</table>

@endsection