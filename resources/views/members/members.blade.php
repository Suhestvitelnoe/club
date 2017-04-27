@extends('layouts.app')
@section('content')
@foreach($all as $one)
<a href="{{asset('members/one'.$one->id)}}">
{{$one->name}}
</a>
@endforeach
@endsection