<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keyword" content="">
    <title>Club SocialNet Network</title>

@section('styles')
    <!-- Styles -->
     
     {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
@show

    



    <script type="text/javascript">

</script>






</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  Club
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
				<li><a href="{{ url('/groups') }}">Группы</a></li>
				<li><a href="{{ url('themesForGuest') }}">Темы</a></li>
				<li><a href="{{ url('articlesForGuest') }}">Статьи</a></li>
                <li><a href="{{ url('guestmusics') }}">Музыка</a></li>
                <li><a href="{{ url('guestphotos') }}">Картинки</a></li>
                <li><a href="{{ url('/users/all') }}">Пользователи</a></li>
                <li><a href="{{ url('guestcompany') }}">Компании</a></li>
                <li><a href="{{ url('guestservices') }}">Услуги</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                 
                        
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (Auth::guest())
    <div class="container">
    <div class="row">
    <div class="panel panel-default">
    <div class="panel-heading">
     @include('includes.notAuthPanelHeading')
     </div>

    <div class="panel-body" >
        @yield('content')
    
    </div>
    </div>
    </div>
    </div>
    @else
    <div class="container">
    <div class="row">
    <div class="panel panel-default">
        @include('cabinet.includes.authPanelHeading')
    <div class="panel-body" >
   
    <div class="col-md-10">
         @yield('content')
    </div>
     <div class='col-md-2'>
        @include('cabinet.includes.authSidebar')
    </div>
    </div>
    </div>
    </div>
    </div>
    @endif
@section('scripts')
    <!-- JavaScripts -->
  
    
    <script src="{{asset('j-query/j-query.js')}}"></script>
   
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
@show
</body>
</html>
