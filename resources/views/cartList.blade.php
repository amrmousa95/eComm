@extends('master')
@section('content')

    <div class="container">
        <h1 class="text-center">Cart List</h1>
        @foreach($carts as $cart)
        <div class="row cart-list">

            <div class="col-sm-4">
                <img class="details-img" src="{{$cart->image}}">
            </div>
            <div class="col-sm-4">
                <h3>{{$cart->name}}</h3>
                <h4>{{$cart->details}}</h4>
            </div>
            <div class="col-sm-4">
                <a href="{{route('removeCart',$cart->cart_id)}}" class="btn btn-danger">Remove from cart</a>
            </div>

        </div>
        @endforeach
        <a href="/orderNow" class="btn btn-success " style="display: flex;padding-left: 50%; align-items: center">Order Now</a>
    </div>
@endsection

