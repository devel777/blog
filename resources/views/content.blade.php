@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Список постов</div>
                    <div class="panel-body">
                        @foreach ($blogs as $blog)
                            <p>{{ $blog->id }},{{ $blog->content }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
