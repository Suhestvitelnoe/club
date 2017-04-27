@extends('layouts.app')

@section('content') 
<h3 class="one_theme_name">Услуга: {{$service->name}}
</h3>


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
            <h3 >{{$service->name}}</h3>
        </div>
        <div class="company_body">
            {{$service->description}}
        </div>

    </div>

</div>
<div class="col-md-12">
Компания: <a  href="#">{{$service->name}}</a> |
Размещена: {{$service->created_at}} | 
</div>
</div>

@endsection
