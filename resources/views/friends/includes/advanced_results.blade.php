<div>
<h3>Результаты</h3>
@foreach ($friends as $friend)
<a href="{{asset($friend->fio)}}">{{$friend->fio}}</a>
@endforeach
</div>