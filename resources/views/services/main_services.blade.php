@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Мои услуги
	<p id="add_new_song" class="btn btn-primary">Добавить услугу</p>
</h3>
<form method="POST" action="{{asset('service/newservice')}}" class="showhide_form" class="form-inline" enctype="multipart/form-data" >
    {!! csrf_field() !!}
    	<div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">картинка</label>

            <div class="col-md-8">
                <input type="file" class="form-control" name="pic" >
            </div>
        </div>
        @include('cabinet.includes.input_text', array('name'=>'name', 'val'=>'Название'))
        <div class="form-group ">
        <label class="col-md-4 control-label">Категория</label>
        <div class="col-md-8">        
        <select class="form-control"  name="cat_id" >

            @foreach($servicecategory as $key=>$service)
                
                <option value="{{$service->id}}">{{$service->name}}</option>
            @endforeach
            
        </select>
        </div>
        </div>
        <div class="form-group ">
        <label class="col-md-4 control-label">Категория</label>
        <div class="col-md-8">        
        <select class="form-control"  name="company_id" >
         <option value="0">Без компании</option>
            @foreach($companies as $key=>$company)
                
                <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
            
        </select>
        </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Краткое описание</label>

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
@foreach($services as $key=>$service)
<div class="company_block ">
<div class="col-md-12">
	<div class="company_logo col-md-2">
		@if($service->company_id)
            <img src="{{asset('/media/uploads/company/services/preview/'.$service->user_id.'/s_'.$service->picture)}}"/>
        @else
            <img src="{{asset('/media/uploads/services/preview/'.$service->user_id.'/s_'.$service->picture)}}" />
        @endif
	</div>
	<div class="col-md-10">
		<div class="company_name">
			<h3 ><a href="{{asset('service/oneservice/'.$service->id)}}">{{$service->name}}</a></h3>
		</div>
		<div class="company_body">
			{{$service->description}}
		</div>

	</div>

</div>
<div class="col-md-12">
@if($service->company_id != '0')
    Компания: <a  href="{{asset('company/onecompany/'.$service->companies->id)}}">{{$service->companies->name}}</a> |
    Размещена: {{$service->created_at}} | 
@elseif($service->company_id =='0')
    Компания: <a href="{{asset($service->users->name)}}">{{$service->users->name}}</a>
Размещена: {{$service->created_at}} | 
@endif
</div>
</div>

@endforeach

<div class="clear"></div>
@endsection
