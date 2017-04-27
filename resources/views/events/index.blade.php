@extends('layouts.app')
@section('content')
<h3>Планируемые мероприятия</h3>
<div class="row">
    <div class="col-xs-8">
        <p class="lead">
            @if (count($events) == 0)
                Событий нет
            @else
                События:
            @endif
        </p>
    </div>
    
        <div class="col-xs-4">
            <div class="pull-right">
                <a class="btn btn-primary" href="{!! url('events/events') !!}"> Создать новое событие</a>
            </div>
        </div>
  
</div>
@foreach($events as $event)
    <h2>{!! $event->title !!}</h2>
	<h3>Дата проведения:     {!! $event->date !!}</h3>
    <a class="btn btn-primary" href="{!! url('events/show' )!!}"> Показать событие</a>
        
    <br>
@endforeach
@endsection