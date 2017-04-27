@extends('layouts.app')

@section('content')
@foreach ($oneTheme as $key =>$theme)
<div id="one_theme" class="col-md-12">
	<div class="one_theme_name">
		{!!$theme->name!!}
	</div>
	<div id="one_theme_description" class="col-md-12">
		{!!$theme->description!!}
		
	<div >



			
			<a href="{{asset('themes/delete/'.$theme->id)}}"><img src="{{asset('media/img/delete.png')}}" class="options"/></a>
			<a href="{{asset('usercontents')}}"><img src="{{asset('media/img/edit.png')}}" class="options"/></a>
		</div>
	</div>
</div>
@endforeach
<p id="leave_comment">Коментарии</p>
@foreach ($comments as $key=>$comment)
@if ($comment->theme_id == $theme->id)
<div id="comment_block">
	<div id="user_info" class="col-md-2">
   		<p>{{$personal->fio}}</p>
    	<div id="avatar">
	        @if($personal->avatar)
	            <img src="{{asset('/media/uploads/avatar/'.$personal->user_id.'/s_'.$personal->avatar)}}"/>
	        @else
	            <img src="{{asset('media/img/empty.jpg')}}" id="empty_pic"/>
	        @endif
    	</div>
    	<div class="service_info">
	        <p>Статус: {{$personal->status}}</p>
	        <p>Рейтинг: {{$personal->raiting}}</p>
	        <p>Дата регистрации: {{$personal->created_at}}</p>
   		</div>
	</div>

	<div id="comment_body" class="col-md-10">
		<p class="post_number">Пост {{$comment->id}}</p>
		{!!$comment->comment!!}
	</div>

</div>
@endif
@endforeach
<div class="clear"></div>
<p id="leave_comment">Оставить комментарий</p>
<form  class="form-group" action="{{asset('comments/comment/'.$theme->id.'/'.$theme->slug)}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Коммент</a></li>
	    <li role="presentation"><a href="#photo" aria-controls="photo" role="tab" data-toggle="tab">Фото</a></li>
	  </ul>
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="comment">			   
				<div>
					<div class="col-md-12">
						<textarea  class="ckeditor" name="comment" placeholder="Ваш комментарий..."></textarea>
					</div>
				</div>

				
	   		
	    </div>
	    <div role="tabpanel" class="tab-pane" id="photo">
	    	<div class="form-group">
				<div class="col-md-12">
				<h3>Вы можете добавить фото...</h3>
					<input type="file" class="form-control" name="photo" >
				</div>
			</div>
	    </div>
	  </div>
<div class="clear"></div>
 <button type="submit" id="contents_submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Добавить
    </button>
</form>


@endsection