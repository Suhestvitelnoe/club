@extends('layouts.app')
@section('content')
<div class="col-md-12">
	<div class="col-md-6">
<table class="table table-bordered">
<tr><td>
	<form method="post" action='{{asset("group")}}'>
    {!! csrf_field() !!}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<div class="col-md-6">
			<input type="text" class="form-control" id="group" name="name"  placeholder="наименование группы" ><br>
			@if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
			@endif
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">добавить группу</button>  
		</div>
	 </div> 
	</form>
 </td></tr>
 </table>
<table width=100% class="table table-bordered">
	<tr>
		<th>группы</th><th>действия</th>
	</tr>
@foreach($groups as $one)

	<tr>
	<td>
<a href="{{asset('group/one/'.$one->id)}}">{{$one->name}}</a></td>
	<td>

	@foreach($one->members as $mem)
		@if($mem->status=='new')
			Пользователь <a href="{{asset($mem->users->name)}}">{{$mem->users->name}}</a> отправил запрос на вступление 
			<a href="{{asset('group/confirm/'.$mem->id)}}">принять</a> 
			<a href="{{asset('group/unconfirm/'.$mem->id)}}">отклонить</a> <br/>
		@endif
	@endforeach
<a href="{{asset('group/delete/'.$one->id)}}">&times</a>
	</td>
	</tr>
@endforeach
</table>
	</div>
</div>
@endsection