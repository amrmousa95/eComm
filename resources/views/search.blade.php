@extends('master')
@section('content')

    <div class="custom-product container">
        <div class="trend-products">
            <h2 class="text-center">Result Of Search</h2>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#">Filter</a>
                </div>
                <div class="col-sm-4">
                    @foreach ($data as $item)
                        <a href="{{route('details',$item->id)}}">
                            <div class="">
                                <img class="trend-img" src="{{$item['image']}}">
                                <div class="">
                                    <h3>{{$item->name}}</h3>
                                    <h4>{{$item->details}}</h4>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

