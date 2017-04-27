@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Темы</h3>
<div class="col-md-12 guest_theme" >
@foreach ($themes as $one)

		<a href="{{asset('themesForGuest/article/'.$one->id)}}">{{(isset($one->name))?$one->name:''}}</a><br>

<table class="table table-bordered table-striped" width=100%>
<tr>
<td class="table_td">Автор темы<b>
{{(isset($one->users->name))?$one->users->name:""}}</b></td>
<td class="table_td">Дата <b>{{$one->formatCreatedDate()}}</b></td>
</tr>
</table>
@endforeach
</div>
@endsection
