@extends('layouts.app')
@section('content')

    @include('usermail.includes.usermail_sidebar')
    
	<table class='table table-hover table-bordered table-striped' >
	<tr>
		<td>{{$whois}}</td>
		<td>Тема/Содержание</td>
		<td>Дата</td>
	</tr>
@foreach($mails as $key=>$mail)
	<tr>
		<td>
			<p>{{$mail->senders->name}}</p>
		</td>
		<td>
			<p>{{$mail->theme}}<a href="{{asset('usermail/typing/'.$mail->sender_id)}}"> Просмотреть...</a></p>
		</td>
		
		<td>
			{{$mail->created_at}}
		</td>
	</tr>
@endforeach
	</table>

@endsection
