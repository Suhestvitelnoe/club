@extends('layouts.app')
@section('content')
<h3>Вы искали группу: "{{ Request::input('query') }}" </h3>
@if (!$groups->count())
	<p>По вашему запросу групп не найдено</p>
@else
<div class="row">
	<div class="col-lg-12">
@foreach ($groups as $group)
 <a href="{{asset('groups/one/'.$group->id)}}">{{$group->name}}</a>  
@endforeach	
	</div>	
</div>
@endif
@endsection