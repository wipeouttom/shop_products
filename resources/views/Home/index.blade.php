@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 text-center vakje">
            Test 1 this is a long line of text
        </div>
        <div class="col-4 text-center vakje2">
            Test 2
        </div>
        <div class="col-4 text-center vakje">
            Test 3
        </div>
    </div>
    <div class="row">
        <div style="padding-left: 15px;">
            <h3>
                Trending orders
            </h3>
        </div>
    </div>
    <div class="row">
        {{-- @foreach($products as $product) --}}
        <div class="col-3 text-center image">
            image
        </div>
        <div class="col-3 text-center image2">
            image
        </div>
        <div class="col-3 text-center image">
            image
        </div>
        <div class="col-3 text-center image3">
            image
        </div>

        <div class="col-3 text-center subtext">
            Test 1
        </div>
        {{-- @endforeach --}}
        <div class="col-3 text-center subtext2">
            Test 2
        </div>
        <div class="col-3 text-center subtext">
            Test 3
        </div>
        <div class="col-3 text-center subtext3">
            Test 4
        </div>
    </div>
    <div class="row">
        <div style="padding-left: 15px;">
            <h3>
                Statistics
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-6 graph">super text</div>
        <div class="col-6 graph2">super text</div>
    </div>
</div>


@stop