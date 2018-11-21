@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 products">
            <div class="row">
                <div class="col-12 text-center vakje">
                    Image
                </div>
            </div>
        </div>
        <div class="col-4 products">
            <div class="row">
                <div class="col-12 text-center vakje">
                    Image
                </div>
            </div>
        </div>
        <div class="col-4 products">
            <div class="row">
                <div class="col-12 text-center vakje">
                    Image
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10" style="padding-left: 20px;">
            <h3>
                Trending orders
            </h3>
        </div>
        <div class="col-2">
            <a style="float: right; padding-top: 10px;" href="{{route('product.index')}}">See all products ></a>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="col-3 products">
            <div class="row">
                <div class="col-12 text-center image">
                    Image
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center subtext">
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
        <div class="col-6 products">
            <div class="row">
                <div class="col-12 text-center graph">
                    Super text
                </div>
            </div>
        </div>
        <div class="col-6 products">
            <div class="row">
                <div class="col-12 text-center graph">
                    Super text
                </div>
            </div>
        </div>
    </div>
</div>


@stop