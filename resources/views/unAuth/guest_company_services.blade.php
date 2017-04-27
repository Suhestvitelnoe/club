@extends('layouts.app')

@section('content') 
<h3 class="one_theme_name">Список услуг компании "{{$company->name}}"
    
</h3>

@foreach($company_services as $key=>$company_service)
<div class="company_block col-md-12">
    <div class="company_logo col-md-2">
        @if($company_service->picture)
            <img src="{{asset('/media/uploads/company/services/preview/'.$company_service->user_id.'/s_'.$company_service->picture)}}"/>
        @else
            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
        @endif
    </div>
    <div class="col-md-10">
        <div class="company_name">
            <h3 ><a href="{{asset('service/oneservice/'.$company_service->id)}}">{{$company_service->name}}</a></h3>
        </div>
        <div class="company_body">
            {{$company_service->description}}
        </div>
    </div>
</div>
@endforeach
<div class="clear"></div>
@endsection
