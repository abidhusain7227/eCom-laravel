@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" custome-product">
        <div class="trending-wrapper">
            <h2>Odrders List</h2>
            <div class="">
                @foreach($orders as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-md-3">
                        <a href="detail{{$item->id}}">
                            <img src="{{$item->gallery}}" class="inner-img">
                        </a>
                    </div>
                    <div class="col-md-3">

                        <div class="">
                            <h2 class="text">{{$item->name}}</h2>
                            <h5 class="text">Delivery Status :{{$item->status}}</h5>
                            <h5 class="text">Payment Status :{{$item->payment_status}}</h5>
                            <h5 class="text">Payment Method :{{$item->payment_method}}</h5>
                            <h5 class="text">Delivery Address :{{$item->address}}</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                @endforeach
            </div>

        </div>
</div>
@endsection