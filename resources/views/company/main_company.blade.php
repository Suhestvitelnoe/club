@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Мои компании
	<p id="add_new_song" class="btn btn-primary">Добавить компанию</p>
</h3>
<form method="POST" action="{{asset('company/newcompany/')}}" class="showhide_form" class="form-inline" enctype="multipart/form-data" >
    {!! csrf_field() !!}
    	<div class="form-group{{ $errors->has('logotype') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Логотип</label>

            <div class="col-md-8">
                <input type="file" class="form-control" name="logotype" >
            </div>
        </div>
        @include('cabinet.includes.input_text', array('name'=>'name', 'val'=>'Название'))
        @include('cabinet.includes.input_text', array('name'=>'slogan', 'val'=>'Слоган'))
        @include('cabinet.includes.input_text', array('name'=>'work_area', 'val'=>'Сфера деятельности'))
        @include('cabinet.includes.input_text', array('name'=>'country', 'val'=>'Город'))
        @include('cabinet.includes.input_text', array('name'=>'adress', 'val'=>'Адрес'))
        @include('cabinet.includes.input_text', array('name'=>'phone', 'val'=>'Телефон'))
        @include('cabinet.includes.input_text', array('name'=>'mobilephone', 'val'=>'Мобильный телефон'))
        @include('cabinet.includes.input_text', array('name'=>'site', 'val'=>'Сайт компании'))
        @include('cabinet.includes.input_text', array('name'=>'email', 'val'=>'E-mail'))
		<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Краткое описан</label>

            <div class="col-md-8">
                <textarea class="form-control" name="description" >
                
                </textarea>

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Добавить
                </button>
            </div>
        </div>
</form>
@foreach($companies as $key=>$company)
<div class="company_block col-md-12">
	<div class="company_logo col-md-2">
		@if($company->logo)
            <img src="{{asset('/media/uploads/company/logo/'.$company->user_id.'/s_'.$company->logo)}}"/>
        @else
            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
        @endif
        	
            
        	
        
	</div>
	<div class="col-md-7">
		<div class="company_name">
			<h3 ><a href="{{asset('company/onecompany/'.$company->id)}}">{{$company->name}}</a></h3>
		</div>
		<div class="company_body">
			{{$company->description}}
		</div>
      
		<div class="company_info">
		<a href="{{asset('feedback/allfeedback/'.$company->id)}}">Отзывы</a> | 
		<a href="{{asset('company/companyservices/'.$company->id)}}">Каталог услуг</a> | 
		<a href="#">Каталог товаров</a>
		</div>
	</div>
	<div class="company_contacts col-md-3">
		<p><img src="{{asset('/media/img/phone.gif')}}">{{$company->phone}}</p>
		<p><img src="{{asset('/media/img/mobphone.png')}}">{{$company->mobilephone}}</p>
		<p><img src="{{asset('/media/img/adress.png')}}">{{$company->adress}}</p>

	</div>


</div>

@endforeach
<div class="clear"></div>
@endsection
