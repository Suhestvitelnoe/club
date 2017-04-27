@extends('layouts.app')

@section('content')               
    <div class="cabinet_flex">
    <div class="cabinet_news col-md-6">
    <h3 class="title">3 Новые темы</h3>
	@foreach ($themes as $one)
	   <div class="themes_main">

        	<h3><a href="{{asset('themes/themes/'.$one->id)}}">
        	   {{$one->name}}</a></h3>
        		<p>{{substr($one->description,0,100)}}</p>
                Размещена: {{$one->created_at}} | Автор: <a href="#">{{$one->author}}</a>

                <hr>
        </div>		
	@endforeach
    <div class="paginate">
    {{$themes->links()}}
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
    <div class="paginate">
     {{$photos->links()}}
     </div>
    </div>
</div>

@endsection
