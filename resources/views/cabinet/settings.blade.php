@extends('layouts.app')

@section('content')

                <p>Отметьте пункты меню, которые будут отбражаться в сайдбаре слева.</p>
                <hr>
                <form action="{{asset('sett_show_hide')}}" method="POST" class="settings_form">
                     {!! csrf_field() !!}
                    <label>
                        <input type="checkbox" name="show_menu[]" value="news"> Мои новости
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="show_menu[]" value="musik"> Моя музыка
                    </label>
                    <br>

                    <label>
                        <input type="checkbox" name="show_menu[]" value="video"> Моё видео
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="show_menu[]" value="photo"> Мои фотографии
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="show_menu[]" value="friends"> Мои друзья
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="show_menu[]" value="watch"> Мои подписки
                    </label>
                    <br>
                    <button type="submit" class="btn btn-default" >Сохранить</button>
                    
                </form>
                    

@endsection
