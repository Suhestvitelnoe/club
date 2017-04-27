<h3 class="one_theme_name">Расширенный поиск</h3>
<div class="form-group">
@include('cabinet.includes.input_text', array('name'=>'city', 'val'=>'Город'))<br>
</div>

<label class=" control-label col-md-12">Выберите возраст</label>
<select class="form-control form-group col-md-12" name="age">
	<option value="20">до 20 лет</option>
	<option value="30">от 21 до 30 лет</option>
	<option value="40">от 31 до 40 лет</option>
	<option value="50">от 41 до 50 лет</option>
	<option value="60">от 51 до 60 лет</option>
	<option value="70">от 61 до 70 лет</option>
	<option value="80">от 71 до 80 лет</option>
	<option value="90">от 81 до 90 лет</option>
	<option value="100">от 91 до 100 лет</option>
</select>




<label class=" control-label col-md-12" >Сколько на сайте</label>
<select class="form-control form-group col-md-12" name="date_of_reg">
	<option value="3">до 3 месяцев</option>
	<option value="6">от 4 до 6 месяцев</option>
	<option value="12">от 7 месяцев до 1 года</option>
	<option value="24">от 1 до 2 лет</option>
	<option value="36">от 2 до 3 лет</option>
	<option value="48">от 3 до 4 лет</option>
	<option value="60">от 4 до 5 лет</option>
</select>

<label class=" control-label col-md-12">Выбрать по количеству друзей</label>
<select class="form-control  form-group col-md-12" name="friends">
	<option value="1">1 друг</option>
	<option value="5">от 2 до 5 друзей</option>
	<option value="10">от 6 до 10 друзей</option>
	<option value="15">от 11 до 15 друзей</option>
	<option value="20">от 16 до 20 друзей</option>
	<option value="25">от 21 до 25 друзей</option>
	<option value="30">от 26 до 30 друзей</option>
	<option value="35">от 31 до 35 друзей</option>
	<option value="40">от 36 до 40 друзей</option>
	<option value="50">от 41 до 50 друзей</option>
	<option value="70">от 51 до 70 друзей</option>
	<option value="100">от 71 до 100 друзей</option>
	<option value="150">от 101 до 150 друзей</option>
	
</select>

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

