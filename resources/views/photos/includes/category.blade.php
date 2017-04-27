
<select class="form-control" class="music_sort"  name="cat_id" >
@foreach($cat as $key=>$category)
	
	<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
	
</select>