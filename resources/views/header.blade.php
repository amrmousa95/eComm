<?php
use \App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
    {
        $total = ProductController::cartItem();
    }

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-Comm</a>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/myOrders">Orders</a>
                </li>
                <form action="search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="btn custom-search">Search</button>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartList">Cart({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')->name}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endif
            </ul>

        </div>
    </div>

</nav>
