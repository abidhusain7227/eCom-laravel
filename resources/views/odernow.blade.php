@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" custome-product">
    <div class="col col-md-6">
        <table class="table table-striped">
        <body>
            <tr>
                <td>Price</td>
                <td>₹ {{$totoal}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>₹ 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>₹ 100</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>₹ {{$totoal+100}}</td>
            </tr>
        </body>
        </table>
        <form action="orderplace" method="POST">
        @csrf
            <div class="form-group">
                <textarea placeholder="Enter yor Address" name="address" class="form-control"></textarea>
            </div>
            <div class="form-group">
               <label for="">Payment Method</label>
               <p><input type="radio" value="cash" name="pyament"><span>Online Payment</span></p>
               <p><input type="radio" value="cash" name="pyament"><span>EMI Payment</span></p>
               <p><input type="radio" value="cash" name="pyament"><span>Payment On Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-success">Oder Now</button>
        </form>

    </div>
</div>
@endsection