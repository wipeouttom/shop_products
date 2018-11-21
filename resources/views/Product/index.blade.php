@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <h1>Alle producten</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-3 productsIndex">
            <div class="row">
                <div class="col-12 text-center imageIndex">
                    <img src="{{asset('storage/' . $product->imageUrl)}}" alt="">
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
</div>
@endsection