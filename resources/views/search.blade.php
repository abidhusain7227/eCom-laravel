@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" custome-product">
    <div class="col-md-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-md-3"> 
        <div class="trending-wrapper">
            <h4>Result for products</h4>
            <div class="">
                @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="inner-img">
                        <div class="">
                            <h2 class="text">{{$item['name']}}</h2>
                            <h5 class="text">{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection