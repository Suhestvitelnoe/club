@extends('layouts.app')
@section('styles')
    @parent
    <link href="{{asset('media/css/home.css')}}" rel="stylesheet">
@stop
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            @include('home.includes.shapka', array('url',$url))
        </div>

        <div class="panel-body">
            <table width="100%" class="table table-bordered">
                <tr>
                    <td>
                        Прайс
                    </td>
                    <td>
                        Дата добавления
                    </td>
                    <td>
                        Действия
                    </td>
                </tr>
                @foreach($prices as $one)
                    <tr>
                        <td>
                            <a href="{{asset('media/prices/'.$one->file)}}" target="_blank">
                                {{$one->file}}
                            </a>
                        </td>
                        <td>
                            {{$one->created_at}}
                        </td>
                        <td>
                            <a href="{{asset('home/pricedel/'.$one->id)}}"> &times</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <form method="POST" class="form-horizontal" action="{{asset('home/price')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4 control-label">прайс формата, .csv</label>

                    <div class="col-md-6">
                        <input type="file" id="exampleInputFile" name="price">

                        <p class="help-block">Убедитесь в том, что прайс правильного формата</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i>Загрузить
                        </button>
                    </div>
                </div>
            </form>


            <div class="prices">
                0   Категория; <br />
                1   Производитель; <br />
                2   Модель; <br />
                3   Код производителя; <br />
                4   Цена; <br />
                5   Валюта; <br />
                6   Описание предложения; <br />
                7   Изготовитель; <br />
                8   Импортеры; <br />
                9   Сервисные центры; <br />
                10    Гарантия; <br />
                11    Только для юр. лиц; <br />
                12    Кредит; <br />
                13    Срок службы; <br />
                14    Доставка; <br />
                15    Статус; <br />
                16    Изображение;;; <br />
            </div>
        </div>

    </div>

@endsection
