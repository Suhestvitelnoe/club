@extends('layouts.app')

@section('content') 
<h3 class="one_theme_name">Все отзывы о компании "{{$company->name}}"</h3>
        <div class="company_feedback">
       
        @foreach($feedbacks as $key => $feedback)
            <div class="comment_block">
                <div class="user_info" >
                   @include('includes.avatar',array('ava'=>$feedback->users->accounts))
                </div>
               <div class="comment_body">
                    <p ><a href="{{asset($feedback->users->name)}}" class="link" >{{$feedback->users->name}}</a>    {{$feedback->created_at}}</p>
                    <p>{{$feedback->feedback}}</p>
                </div>
                <hr>
            <div class="clear"></div>
            </div>
        @endforeach
        </div>

@endsection
