@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="details-img" src="{{$details->image}}">
            </div>
            <div class="col-sm-6">
                <a href='/'>Go Back</a>
                <h3>Name:    {{$details->name}}</h3>
                <h3>Desc:    {{$details->details}}</h3>
                <h3>Category: {{$details->category}}</h3>
                <h3>Price:   {{$details->price}}$</h3>
                <br>
                <form method="post" action="/addToCart">
                    @csrf
                    <input type="hidden" name="product" value="{{$details->id}}">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br>
                <button class="btn btn-success">Buy Now</button>
            </div>


        </div>
    </div>
@endsection


