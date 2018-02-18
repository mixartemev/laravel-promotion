@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{$acc->type}} Account {{$acc->orders()->first()->value}}</div>

                    <div class="card-body">
                        @foreach($acc->orders as $order)
                            <article>
                                <h4>{{$order->type}}</h4>
                                <p>{{$order->value}}</p>
                                <hr>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @if(auth()->check())
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{$acc->path()}}/orders" class="form-inline">
                    {{csrf_field()}}
                    <select name="type" class="custom-select col-sm-4">
                        @foreach(['like', 'coment', 'subscribe'] as $type)
                            <option>{{$type}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="value" class="form-control col-sm-4 offset-sm-1"/>
                    <button class="btn btn-default col-sm-2 offset-sm-1">Order</button>
                </form>
            </div>
        </div>
    @endif
    </div>
@endsection
