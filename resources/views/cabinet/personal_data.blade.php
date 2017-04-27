@extends('layouts.app')

@section('content')

                       
                    <form class="col-md-8" class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ asset('/cabinet') }}">
                        {!! csrf_field() !!}

                        @include('cabinet.includes.input_text', array('name'=>'fio', 'val'=>'ФИО *', 'edit_name'=>$edit_name->fio))

                        <div class="form-group{{ $errors->has('ava') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Аватар</label>

                            <div class="col-md-8">
                                <input type="file" class="form-control" name="ava" >
                            </div>
                        </div>
                        @include('cabinet.includes.input_text', array('name'=>'city', 'val'=>'Город', 'edit_name'=>$edit_name->city))
                        @include('cabinet.includes.input_text', array('name'=>'phone', 'val'=>'Телефон', 'edit_name'=>$edit_name->phone))
                        @include('cabinet.includes.input_text', array('name'=>'url', 'val'=>'Url', 'edit_name'=>$edit_name->url))
                        @include('cabinet.includes.input_text', array('name'=>'family', 'val'=>'Семейное положение', 'edit_name'=>$edit_name->family))
                         <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Дата рождения</label>

                            <div class="col-md-8">
                                <input type="date" class="form-control" name="birthday" value="{{$edit_name->birthday}}">
                            </div>
                        </div>
                        @include('cabinet.includes.input_text', array('name'=>'hobby', 'val'=>'Хобби','edit_name'=>$edit_name->hobby))
                         <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">О себе</label>

                            <div class="col-md-8">
                                <textarea class="form-control" name="body" >{{$edit_name->body}}</textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fon') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Фоновая картинка</label>

                            <div class="col-md-8">
                                <input type="file" class="form-control" name="fon" >
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('pol') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Пол</label>

                            <div class="col-md-8">
                                М
                                <input type="radio"  name="pol" value="M">
                                Ж
                                <input type="radio"  name="pol" value="Ж">
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
    
@endsection
