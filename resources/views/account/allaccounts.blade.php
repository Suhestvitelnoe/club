@extends('layouts.app')
@section('content')
<table class="table table-bordered table-striped table-hover table_tr">
<thead>
<th>Заставка</th> <th>Пользователь</th><th>Город</th><th>Пол</th><th>Дата регистрации</th>
</thead>
@foreach ($all as $one)

<tr>
<td class="avatar_friend">
<a href="/{{$one->name}}" > @include('includes.avatar', array('ava'=>$one->accounts)) </a>
</td>
<td>
<a href="{{asset($one->name)}}">{{$one->name}}</a>
</td>
<td>
<a href="{{asset($one->name)}}">{{(isset($one->accounts->city))?$one->accounts->city:''}}</a>
</td>
<td>
<a href="{{asset($one->name)}}">{{(isset($one->accounts->pol))?$one->accounts->pol:''}}</a>
</td>
<td>
<a href="{{asset($one->name)}}">{{(isset($one->accounts))?$one->accounts->formatCreatedDate():''}}</a>
</td>
</tr>

@endforeach</table>
{!!$all->links()!!}
@endsection