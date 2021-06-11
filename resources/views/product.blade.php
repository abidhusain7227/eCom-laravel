@extends('master')
@section('content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class=" custome-product">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="item {{$item['id']==1? 'active':''}}">
                <a href="detail{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="slider-img">
                    <div class="carousel-caption">
                        <h3 class="text">{{$item['name']}}</h3>
                        <p class="text">{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h1>Trending product</h1>
        <div class="">
            @foreach($products as $item)
            <div class="trending-item">
                <a href="detail{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="inner-img">
                    <div class="">
                        <h3 class="text">{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection