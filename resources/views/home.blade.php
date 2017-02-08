@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Список зарегистрированных пользователей</div>
                <div class="panel-body">
                    Выведем сюда список зарегистрированных пользователей
                    с помощью цикла Foreach, для этого необходимо
                    создать модель запроса к базе данных, и с помощью контроллера
                    обработать этот запрос и вывести циклом здесь.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
