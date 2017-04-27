@extends('layouts.app')
@section('content')
<div class="user_name_main">
	<h2>{{$ac->name}}</h2>
</div>
<div class="col-md-2">
	@include('includes.avatar',array('ava'=>$ac->accounts))
</div>
<div class="col-md-4">
@if(!Auth::guest())
	e-mail - {{$ac->email}}
@endif
@if($accounts!='')
@foreach($accounts as $acc)
<div>Город - {{$acc->city}}</div>
<div>ФИО - {{$acc->fio}}</div>
<div>День рождения - {{$acc->birthday}}</div>
<div>Семья - {{$acc->family}}</div>
<div>Хобби - {{$acc->hobby}}</div>
<div>Пол - {{$acc->pol}}</div>
<div>Телефон - {{$acc->phone}}</div>
<div>Рейтинг - {{$acc->raiting}}</div>
@endforeach
@endif
</div>
@if(!Auth::guest())
<div class="col-md-4">
<h3>Рейтинг</h3>
	<div class="rating" width=100%>
		<div  class="raiting_div" style="width:{{$raiting}}%"></div>
		<div  class="rating_form">
		@if(Auth::user()->id!=$ac->id)
		
			<h3>Баллы</h3>
			<form action="account/increment/{{$ac->id}}"  method="POST">{!! csrf_field() !!}
			<div>
			 @if ($errors->has('reason'))
					<span class="ratin">
						<strong>{{ $errors->first('reason') }}</strong>
					</span>
			 @endif
			 </div>
			 
			<input type="submit" value="-" name="minus" class="btn btn-default">			
			<input type="text" name="reason" placeholder="за что">
			<input type="submit" value="+" name="plus" class="btn btn-success">
			@endif
			</form>
		</div>
	</div>
</div>
@endif
<div class="col-md-12">
<h3>группы</h3>
@foreach($groups as $group)
	<div>
		<a href="{{asset('groups/one/'.$group->id)}}">{{$group->name}}</a>
	</div>
@endforeach
<h3>темы</h3>
@foreach($themes as $theme)
	<div>
		<a href="{{asset('themesForGuest/article/'.$theme->id)}}">{{$theme->name}}</a>
	</div>
@endforeach
<h3>статьи</h3>
@foreach($articles as $article)
	<div>
		<a href="{{asset('articlesForGuest/onearticle/'.$article->id)}}">{{$article->name}}</a></br>
	</div>
@endforeach
</div>
@endsection