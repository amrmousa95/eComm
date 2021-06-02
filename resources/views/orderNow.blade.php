@extends('master')
@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <td>Net Amount</td>
                <td>${{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>%5</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>%10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>${{$total + 5 + 10}}</td>
            </tr>
</table>
        <form action="/orderPlace" method="post">
            @csrf
            <textarea name="address" class="form-control" placeholder="Place your Address"></textarea><br><br>
            <label>Payment Method</label><br><br>
            <input type="radio" value="cash" name="payment"><span>Cash on Delivery</span> <br><br>
            <input type="radio" value="cash" name="payment"><span>Master Card</span> <br><br>
            <input type="radio" value="cash" name="payment"><span>Visa</span> <br><br>
            <input type="submit" class="btn btn-success">
        </form>
    </div>
@endsection
