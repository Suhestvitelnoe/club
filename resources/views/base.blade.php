@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="col-md-6">
		<h3>Зачем нужен SAFF</h3>
			<a href="" class="btn btn-link">общаться с друзьями</a>
		    <a href=""  class="btn btn-link">создать группу</a>
		    <a href=""  class="btn btn-link">подписаться на блог</a>

			<hr/>
			

	</div>
	<div class="col-md-3">
			<h3>группы</h3>
	   		@foreach ($groups as $one)
			<a href="{{asset('groups/one/'.$one->id)}}" class="btn btn-link">{{$one->name}}</a>
		@endforeach
		<hr>
	</div>
	<div class="col-md-3">
		@if(Auth::guest())
		<form method="POST" action="{{asset('login')}}">			
			{!! csrf_field() !!}
			<div class="form-group">
			 
				<input type="email" class="form-control" id="login" placeholder="email"  name="email">
			</div>
	  		 <div>
			
				<input type="password" class="form-control" id="password" placeholder="Пароль"  name="password">
			</div>
			<br>
			<br>
				<button type="submit" class="btn btn-primary">вход</button>
				<button type="submit" class="btn btn-primary">регистрация</button>
		</form>
		@endif

		
	</div>
	</div>
	<div class="cabinet_flex col-md-12" >
    <div class="cabinet_news col-md-6">
    <h3 class="title">Новые темы</h3>
	@foreach ($themes as $one)
	   <div class="themes_main">

        	<h3><a href="{{asset('themes/themes/'.$one->id)}}">
        	   {{$one->name}}</a></h3>
        		<p>{{substr($one->description,0,100)}}</p>
                Размещена: {{$one->created_at}} | Автор: <a href="#">{{$one->author}}</a>

                <hr>
        </div>		
	@endforeach
	<div class="all">
  	<a href="{{asset('themesForGuest')}}">Все темы...</a>
  	</div>
    </div>

     <div class="cabinet_news col-md-6">
    <h3 class="title">Новые картинки</h3>
    @foreach ($photos as $photo)
       <div class="themes_main">

            <h3 class="cab_photo_name"><a href="{{asset('themes/themes/'.$one->id)}}">
               {{$photo->name}}</a></h3>
                <div class="cabinet_img">
                    <a href="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}" target="_blank">
                        <img src="{{asset('/media/uploads/photos/'.$photo->user_id."/".$photo->photo)}}"> 
                    </a>
                </div>
                Размещена: {{$photo->created_at}} <br>
                Автор: <a href="#">{{$photo->author}}</a>
               
        </div>   
         <hr>
            <div class="clear"></div>
    @endforeach
    <div class="all">
  	<a href="{{asset('themesForGuest')}}">Все темы...</a>
  	</div>
    </div>
</div>

<div>

	  <h3>Сейчас на сайте</h3>
	    @foreach($users as $key=>$user)

		<div class="name" >
    		     <div class="avatar">
		     <p>{{$user->name}}</p>
		       <a href="{{$user->name}}">@include('includes.avatar', array('ava'=>$user->accounts))</a>
		    </div>
		    
			</div>


		@endforeach		
</div>

@endsection