@extends('layouts.app')
@section('content')
<form class="form-horizontal">

    <div class="form-group">
        <label class="col-md-2 control-label" for="title">Название мероприятия</label>
        <div class="col-lg-3 col-md-4">
            <input name="title"  type="text" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label" for="location">Место проведения мероприятия</label>
        <div class="col-lg-3 col-md-4">
            <input name="location"  type="text" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="date">Дата проведения мероприятия</label>
        <div class="col-lg-3 col-md-4">          
               <input name="date"  type="datetime" class="form-control"> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label" for="body">Описание мероприятия</label>
        <div class="col-lg-6 col-md-8">
            <textarea name="body" type="text" class="form-control"   rows="3"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <a class="btn btn-primary" >Создать мероприятие</a>
        </div>
    </div>

</form>

@endsection