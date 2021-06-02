<?php
use Illuminate\Support\Facades\view
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    img.slider-img
    {
        height: 400px !important;
    }
    .carousel-custom
    {
        color: #008800;
    }
    .trend-img
    {
        height: 100px;
    }
    .trend
    {
        float: left;
        width: 20%;
    }
    .trend-products h2
    {
        margin: 40px;
    }
    .details-img
    {
        height: 200px;
    }
    .search-box
    {
        width: 400px !important;
    }
    .search-box:hover{
        border: #008800 !important;
    }
    .custom-search:hover
    {
        background-color: #008800;
        color: white;
    }
    .cart-list
    {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #ccc;
        display: flex;
        align-items: center;
    }
</style>
<body>
{{view::make('header')}}     {{--include header page--}}
@yield('content')
{{view::make('footer')}}     {{--include footer page--}}


</body>
</html>


