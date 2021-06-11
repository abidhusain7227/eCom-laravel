@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{$product['gallery']}}" alt="" class="detail-img">
        </div>
        <div class="col-md-6">
            <a href="/"> Go Back</a>
            <h2>Name : {{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br><br>
            <form action="add_to_cart" method="POST">
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            @csrf
            <button class="btn btn-success">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">By Now</button>
            <br><br>
        </div>
    </div>

</div>
@endsection