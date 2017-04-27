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

</div>
<div class="col-md-6">
<h3 class="one_theme_name">Темы в этой группе</h3>
  @foreach($groupthemes as $key => $grouptheme)
    <a href="{{asset('articles/index/'.$grouptheme->id)}}">{{$grouptheme->name}}</a>
  @endforeach
</div>


@endif



@endsection