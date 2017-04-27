@extends('layouts.app')
@section('content')
<div class="col-md-9">
	<form   action="{{asset('usermail/new')}}" method="POST"  class="form-group">
	 {!! csrf_field() !!}
		<div class="form-group{{ $errors->has('recieve_id') ? ' has-error' : '' }}">
           
                <input type="text" class="form-control" name="recieve_id" placeholder="Логин получателя">
                @if(isset($error))
                    <div id="error" >{!!$error!!}</div>
                @endif
                
                @if ($errors->has('recieve_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('recieve_id') }}</strong>
                    </span>
                @endif
           
        </div>
        <div class="form-group{{ $errors->has('theme') ? ' has-error' : '' }}">
           
                <input type="text" class="form-control" name="theme" placeholder="Тема">
                
                @if ($errors->has('theme'))
                    <span class="help-block">
                        <strong>{{ $errors->first('theme') }}</strong>
                    </span>
                @endif
           
        </div>
		<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
           
                <textarea class="ckeditor" class="form-control" name="body" >
                
                </textarea>

                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            
        </div>
        <div class="form-group">
          
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Отправить
                </button>
           
        </div>
	</form>

</div>
<div class="col-md-3" id="latest_adres">
	<h3 class="title_mail">Мои контакты</h3>
	<div class="latest_adress">
	 @include('usermail.includes.latest_adress')
	</div>
</div>

@endsection
