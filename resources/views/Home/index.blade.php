@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 products">
            <div class="row">
                <div class="col-md-12 text-center vakje">
                    <div class="row">
                        <div class="col-md-12">
                            <span "><img src="{{ asset('img/vakje.png')}}" class="img-fluid" style="max-height:75px; max-width: 75px;" alt=""></span> Total products: <span style="font-size: 45px;">{{$totalProducts}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 products">
            <div class="row">
                <div class="col-md-12 text-center vakje">
                    <div class="row">
                        <div class="col-md-3" style="max-height:75px; max-width:75px; margin-left:30px;">
                            <img src="{{ asset('img/vakje.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-5">
                            Total products:
                        </div>
                        <div class="col-md-4" style="font-size: 45px;">
                            {{$totalProducts}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 products">
            <div class="row">
                <div class="col-md-12 text-center vakje">
                    Image
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" style="padding-left: 20px;">
            <h3>
                Trending orders
            </h3>
        </div>
        <div class="col-md-4">
            <a style="float: right; padding-top: 10px;" href="{{route('products.index')}}">See all products ></a>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6 products">
            <div class="row">
                <div class="col-md-12 text-center no-padding image">
                    <img src="{{asset('storage/'.$product->imageUrl)}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center subtext">
                    <span>{{ucfirst($product->name)}}</span><br>
                    <span>{{'€ ' . $product->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div style="padding-left: 20px;">
            <h3>
                Statistics
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 products">
            <div class="row">
                <div class="col-md-12 text-center graph">
                    Super text
                </div>
            </div>
        </div>
        <div class="col-md-6 products">
            <div class="row">
                <div class="col-md-12 text-center graph">
                    Super text
                </div>
            </div>
        </div>
    </div>
</div>











@stop