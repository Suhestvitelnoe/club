@extends('layouts.app')
@section('content')
<div id="one_theme" class="col-md-12">
	<div class="one_theme_name">
		{!!$oneArticle->name!!}
	</div>
	<div id="one_theme_description" class="col-md-12">
		{!!$oneArticle->body!!}
	</div>
</div>
@foreach ($comments as $key=>$comment)
{!!$comment->comment!!}
@endforeach
@endsection