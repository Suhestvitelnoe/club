@extends('layouts.app')
@section('content')
<h3 class="one_theme_name">Услуги</h3>

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
			<h3 ><a href="{{asset('guestservices/oneservice/'.$service->id)}}">{{$service->name}}</a></h3>
		</div>
		<div class="company_body">
			{{$service->description}}
		</div>

	</div>

</div>
<div class="col-md-12">
@if($service->company_id != '0')
    Компания: <a  href="{{asset('guestcompany/onecompany/'.$service->companies->id)}}">{{$service->companies->name}}</a> |
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
