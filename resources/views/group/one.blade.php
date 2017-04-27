@extends('layouts.app')
@section('content')

<div class="col-md-6">
<h2>{{$one->name}}</h2> 
@if($mm)
	@if($mm=='confirmed')
	вы уже в группе
<a href="{{asset('group/del/'.$one->id)}}">покинуть группу</a><br/>

@else 
	вы ожидаете подтвержения на вступление в группу
	@endif	

 @else
	<a href="{{asset('group/add/'.$one->id)}}">присоединиться к группе</a><br/>
@endif
@if(!Auth::guest())
<h3>Участники группы</h3>

@foreach($one->members as $mem)
@if($mem->status=='confirmed')
<a href="{{asset($mem->users->name)}}"><br/>
{{$mem->users->name}}
</a>

@endif
@endforeach

<div>
<h3>Темы в этой группе</h3>
  @foreach($groupthemes as $key => $grouptheme)
    <a href="{{asset('articles/index/'.$grouptheme->id)}}">{{$grouptheme->name}}</a>
  @endforeach
</div>
<hr/>
</div>



@endif

@if(!Auth::guest())
	@if($mm=='confirmed' OR $mm == 'owner')
<div class="col-md-6">
<h3>Написать сообщение</h3>
<form  action="{{asset('groups/send/'.$one->id)}}" method="POST" class="form-group">
<div class="form-group">
<input type="text" name="theme" placeholder="Введите тему сообщения" class="col-md-12">
</div>

<div class="form-group">
<textarea rows="4"  name="body" placeholder="Введите текст сообщения" class="col-md-12">
</textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Отправить сообщение</button>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

</div>


<table class="table table-bordered table-striped table-hover table_tr">
<tr>
 <td><b>Автор</b></td> <td><b>Тема</b></td><td><b>Содержание</b></td><td><b>Дата создания</b></td>
</tr>
@foreach($messages as $message)
<tr>
<td><a href="{{asset($message->users->name)}}">{{$message->users->name}}</a></td>
<td>{{$message->theme}}</td>
<td>{{$message->body}}</td>
<td>{{$message->formatCreatedDate()}}</td>
</tr>
@endforeach
</table>

@endif
@endif


@endsection