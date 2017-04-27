
<select class="form-control form-group music_sort"   name="cat_id" >
@foreach ($genres as $key=>$genre)
	<option value="{{$genre->name}}">{{$genre->name}}</option>
@endforeach
</select>