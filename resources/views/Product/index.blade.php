@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <h1>Alle producten</h1>
    @if(count($products) > 0)
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 productsIndex">
            <div class="row">
                <div class="col-12 text-center no-padding imageIndex">
                    <img src="{{asset('storage/'.$product->imageUrl)}}" class="img-fluid" alt="">
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
        <div class="offset-10 col-2">
            {{ $products->links("pagination::bootstrap-4") }}
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            Er zijn nog geen producten aangemaakt. Klik <a href="{{route('product.create')}}">hier</a> om er een aan te maken.
        </div>
    </div>
    @endif
</div>
@endsection