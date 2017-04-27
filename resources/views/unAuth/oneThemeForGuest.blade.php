@extends('layouts.app')
@section('content')
<div  class="col-md-12">
	<div  class="col-md-12">
@foreach($oneThemes as $one)
<h3 class="one_theme_name"><a href="{{asset('articlesForGuest/articles/'.$one->id)}}">{{$one->name}}</a></h3>
@endforeach
{!! $oneThemes->links() !!}
	</div>
</div>
@endsection