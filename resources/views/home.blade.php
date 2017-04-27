@extends('layouts.app')
@section('content')


				<div class="col-md-8">
					<h3>Зачем нужна network?</h3>
						<a href="">общаться с друзьями</a>
						<a href="">создавать группы</a>
						<a href="">подписаться на блог</a><hr/>
					 <h3>Сейчас на сайте</h3>
						<img src="{{asset('media/img/empty.jpg')}}" class="img-responsive" width="100" height="100">
						
						
			
				</div>
				<div class="col-md-4">
				<form>
			<div class="form-group">
				<input type="text" class="form-control" id="login" placeholder="логин">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="Password" placeholder="пароль">
			</div>  
				<button type="submit" class="btn btn-primary">вход</button>
				<button type="submit" class="btn btn-primary">регистрация</button>
				<hr/>
				<h3 align="center">группы</h3>
				<a href="">web</a>
				<a href="">тестирование ПО</a>
				<a href="">front-end</a>
				</form>
				</div> 
		
@endsection