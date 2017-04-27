<div class="cabinet_sidebar">

<div id="name">
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


        
        <a href="{{asset('friends')}}" >Мои друзья</a>
        <a href="{{asset('group')}}" >Мои группы</a>
        <a href="{{asset('usermail')}}" >Мои сообщения</a>
        <a href="{{asset('musics')}}">Моя музыка</a>
        <a href="{{asset('photos')}}">Мои фотографии</a>
        <a href="{{asset('events')}}" >Мои мероприятия</a>
        <a href="{{asset('themes')}}" >Мои темы</a>
        <a href="{{asset('articles')}}" >Мои статьи</a>
        <a href="{{asset('company')}}" >Мои компании</a>
        <div class="one_string_link">
            <a href="{{asset('items')}}">Товары / </a>
            <a href="{{asset('service')}}"> / Услуги</a>

        </div>
        <div class="clear"></div>
      
        <a href="{{asset('cabinet/personaldata/'.Auth::user()->id)}}"class="service" >Личные данные</a>
        <a href="{{asset('cabinet/settings')}}" >Настройки аккаунта</a>
    </div>
    <div class="clear"></div>