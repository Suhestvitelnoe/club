@extends('layouts.app')

@section('content') 
<h3 class="one_theme_name">Компания "{{$company->name}}"</h3>              


    <div class="company_logo col-md-2">
        @if($company->logo)
            <img src="{{asset('/media/uploads/company/logo/'.$company->user_id.'/s_'.$company->logo)}}"/>
        @else
            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
        @endif
            
            <a href="asset($company->users->name)">{{$company->users->name}}</a>
            
        
    </div>
    <div class="col-md-10">
        <div class="company_info">
                <a href="{{asset('company/items')}}">Каталог товаров</a> | 
                <a href="{{asset('guestservices/companyservices/'.$company->id)}}">Каталог услуг</a> 
            </div>
            <div class="company_name">
                <h3 >{{$company->name}}</h3>

            </div>
            <hr>
            <div class="col-md-12">
            <div class="company_contacts col-md-6">
                <p><img src="{{asset('/media/img/phone.gif')}}">{{$company->phone}}</p>
                <p><img src="{{asset('/media/img/mobphone.png')}}">{{$company->mobilephone}}</p>
                <p><img src="{{asset('/media/img/adress.png')}}">{{$company->adress}}</p>
            </div>
            <div class="col-md-6">
            <p >Услуги компании:</p>
            
            
                @foreach($services as $key => $service)
                    <a href="{{asset('service/oneservice/'.$service->id)}}" >{{$service->name}}</a>
                @endforeach
            
            </div>
        </div>
        
            
 
    </div>
    <div class="clear"></div>
            <div class="company_description">
                {{$company->description}}
            </div>
    <div class="clear"></div>
   

        <div class="company_feedback col-md-12">
        <p >Отзывы:</p>
        @foreach($feedbacks as $key => $feedback)
            <div class="comment_block">
                <div class="user_info">
                   @include('includes.avatar',array('ava'=>$feedback->users->accounts))
                </div>
               <div class="comment_body">
                    <p ><a href="{{asset($feedback->users->name)}}" class="link" >{{$feedback->users->name}}</a>    {{$feedback->created_at}}
                    @if($feedback->user_id == Auth::user()->id)
                    <a href="{{asset('feedback/edit/'.$feedback->id)}}" class="feedback_options"><img src="{{asset('media/img/edit.png')}}" /></a>
                    <a href="{{asset('feedback/delete/'.$feedback->id)}}" class="feedback_options"><img src="{{asset('media/img/delete.png')}}" /></a>
                    @endif
                    </p>
                    <p>{{$feedback->feedback}}</p>
                    
                </div>
                
            <div class="clear"></div>
            <!--<div class="more">
                <a href="#">Все отзывы...</a>
                </div>-->
            </div>
            
        @endforeach
        </div>

@endsection
