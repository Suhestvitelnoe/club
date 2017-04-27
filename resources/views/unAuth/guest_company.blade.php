@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Компании</h3>

@foreach($companies as $key=>$company)
<div class="company_block col-md-12">
	<div class="company_logo col-md-2">
		@if($company->logo)
            <img src="{{asset('/media/uploads/company/logo/'.$company->user_id.'/s_'.$company->logo)}}"/>
        @else
            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
        @endif
        	
            
        	<a href="asset($company->users->name)">{{$company->users->name}}</a>
        
	</div>
	<div class="col-md-7">
		<div class="company_name">
			<h3 ><a href="{{asset('guestcompany/onecompany/'.$company->id)}}">{{$company->name}}</a></h3>
		</div>
		<div class="company_body">
			{{$company->description}}
		</div>
      
		<div class="company_info">
		<a href="{{asset('feedback/allfeedback/'.$company->id)}}">Отзывы</a> |
		<a href="{{asset('guestservices/companyservices/'.$company->id)}}">Каталог услуг</a> |
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
