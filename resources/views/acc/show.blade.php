@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Account {{$acc->profile}}</div>

                    <div class="card-body">
                        {{--@foreach($acc->orders as $order)
                            <article>
                                <h4><a href="{{$order->path()}}">{{$order->type}}</a></h4>
                                <p>{{$order->val}}</p>
                                <hr>
                            </article>

                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
