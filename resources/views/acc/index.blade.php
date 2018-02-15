@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @foreach($accs as $acc)
                            <article>
                                <h4><a href="{{$acc->path()}}">{{$acc->type}}</a></h4>
                                <p>{{$acc->login}}</p>
                                <hr>
                            </article>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
