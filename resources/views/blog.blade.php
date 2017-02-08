@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Список постов</div>
                    <div class="panel-body">
                        @foreach ($blogs as $blog)
                            <p>{{ $blog->id }}, {{ $blog->content }}</p>
                        @endforeach
                    </div>
                </div>

                <form action="/edit" method="post">
                    {{ csrf_field() }}

                    <input name="content"><input type="submit" value="Добавить запись">
                </form>

            </div>
        </div>
    </div>
@endsection
