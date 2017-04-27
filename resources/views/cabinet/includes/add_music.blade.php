	<form action="{{asset('musics/add')}}" method="POST" class="form-group" id="add_new_song_form">
		{!! csrf_field() !!}
		@include('cabinet.includes.input_text', array('name'=>'name', 'val'=>'Название *'))
		@include('cabinet.includes.input_text', array('name'=>'executor', 'val'=>'Исполнитель *'))
		@include('cabinet.includes.input_text', array('name'=>'cat_id', 'val'=>'Жанр *'))
		@include('cabinet.includes.input_text', array('name'=>'birthday', 'val'=>'Год *'))
		@include('cabinet.includes.input_text', array('name'=>'album', 'val'=>'Альбом '))
		<div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Сохранить
                </button>
            </div>
        </div>

	</form>
