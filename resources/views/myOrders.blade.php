@extends('master')
@section('content')

    <div class="container">
        <h1 class="text-center">My Orders</h1>
        @foreach($orders as $cart)
            <div class="row cart-list">
                <div class="col-sm-4">
                    <img class="details-img" src="{{$cart->image}}">
                </div>
                <div class="col-sm-4">
                    <h3>Name : {{$cart->name}}</h3>
                    <h5>Delivery Status : {{$cart->status}}</h5>
                    <h5>Address :{{$cart->address}}</h5>
                    <h5>Payment Status : {{$cart->payment_status}}</h5>
                    <h5>Payment Method : {{$cart->payment_method}}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection

