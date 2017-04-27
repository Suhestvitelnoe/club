<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	<label class="col-md-4 control-label">{{$val}}</label>

	<div class="col-md-8">
		<input type="text" class="form-control form-group" name="{{$name}}" value="{{(isset($edit_name))?$edit_name:old($name) }}">

		@if ($errors->has($name))
			<span class="help-block">
				<strong>{{ $errors->first($name) }}</strong>
			</span>
		@endif
	</div>
</div>