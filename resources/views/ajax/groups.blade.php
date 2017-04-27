<select multiple size="4" class="select_group" name="selected_group" class="form-group">
	<option disabled>Которые создал</option>
	@foreach($group as $key => $onegroup)
		<option value="{{$onegroup->id}}">{{$onegroup->name}}</option>
	@endforeach
	<option disabled>В которых состою</option>
	@foreach($member as $key => $onegroup)
		<option value="{{$onegroup->id}}">{{$onegroup->name}}</option>
	@endforeach


</select>