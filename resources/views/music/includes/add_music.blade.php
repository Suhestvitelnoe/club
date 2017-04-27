	<form action="{{asset('musics/add')}}" method="POST" class="showhide_form form-group"  enctype="multipart/form-data" >
		{!! csrf_field() !!}
		@include('cabinet.includes.input_text', array('name'=>'name', 'val'=>'Название *'))
		@include('cabinet.includes.input_text', array('name'=>'executor', 'val'=>'Исполнитель *'))
		<div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }} " >
            <label class="col-md-4 control-label">Жанр</label>

            <div class="col-md-8">
                @include('music.includes.genres')
            </div>
        </div>
		
		<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Год написания</label>

            <div class="col-md-8">
                @include('music.includes.years')
            </div>
        </div>
		@include('cabinet.includes.input_text', array('name'=>'album', 'val'=>'Альбом '))
		<div class="form-group{{ $errors->has('song') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Композиция</label>

            <div class="col-md-8">
                <input type="file" class="form-control form-group" name="song" >
            </div>
        </div>

		<div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Сохранить
                </button>
            </div>
        </div>

	</form>
<div class="clear"></div>