@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" custome-product">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            <a href="odernow" class="btn btn-success"> Oder Now</a><br> <br>
            <div class="">
                @foreach($data as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-md-3">
                        <a href="detail{{$item->id}}">
                            <img src="{{$item->gallery}}" class="inner-img">
                        </a>
                    </div>
                    <div class="col-md-3">

                        <div class="">
                            <h2 class="text">{{$item->name}}</h2>
                            <h5 class="text">{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="removecart{{$item->cart_id}}" class="btn btn-warning">Remove Cart</a>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="odernow" class="btn btn-success"> Oder Now</a>

        </div>
</div>
@endsection