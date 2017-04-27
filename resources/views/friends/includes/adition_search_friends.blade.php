<h3 class="one_theme_name">Расширенный поиск</h3>
<div class="form-group">
@include('cabinet.includes.input_text', array('name'=>'city', 'val'=>'Город'))<br>
</div>


<div class="form-group{{ $errors->has('pol') ? ' has-error' : '' }}">
    <label class=" control-label col-md-12">Выберите пол</label>

    <div class="col-md-12">
        М
        <input type="radio"  name="pol" value="M">
        Ж
        <input type="radio"  name="pol" value="Ж">
    </div>
</div>
<div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Найти
                                </button>
                            </div>
                        </div>
