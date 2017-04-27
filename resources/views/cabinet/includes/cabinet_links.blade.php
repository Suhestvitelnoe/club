<div class="cabinet_links">
@if($url=='/themes')
	<ol class="breadcrumb">
	  <li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои темы</li>
	</ol>
@endif

@if($url=='/articles')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li><a href="/themes">Мои темы</a></li>
	  <li class="active">Мои статьи</li>
	</ol>
@endif

@if($url=='/friends')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои друзья</li>
	</ol>
@endif

@if($url=='/group')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои группы</li>
	</ol>
@endif

@if($url=='/usermail')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои собщения</li>
	</ol>
@endif
@if($url=='/events')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои события</li>
	</ol>
@endif
@if($url=='/musics')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Моя музыка</li>
	</ol>
@endif

@if($url=='/photos')
	<ol class="breadcrumb">
	<li><a href="/">Network</a></li>
	  <li><a href="/cabinet">Кабинет</a></li>
	  <li class="active">Мои фото</li>
	</ol>
@endif
</div>


<div class="right_bread">
	<a href="/cabinet">Кабинет</a>
	<a href="/logout">Выход</a>
	
</div>