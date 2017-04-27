@extends('layouts.app')
@section('content')
<div id="allcomments">
<table class="table table-striped table-hover">
	@foreach($allcomments as $key => $comment)
		<tr>
			<td><a href="{{asset($comment->users->name)}}">{!!$comment->users->name!!}</a></td>
			<td><a href="#">{!!substr($comment->comment, 0, 100)!!}</a></td>
			<td>{!!$comment->created_at!!}</td>
		</tr>
	@endforeach
</table>
</div>
@endsection
