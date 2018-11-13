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
        <div class="col-10" style="padding-left: 20px;">
            <h3>
                Trending orders
            </h3>
        </div>
        <div class="col-2">
            <a style="float: right; padding-top: 10px;" href="">See all products ></a>
        </div>
    </div>
    <div class="row">
        {{-- @foreach($products as $product) --}}
        <div class="col-3 products">
            <div class="row">
                <div class="col-12 text-center image">
                    image
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center subtext">
                    Test 1
                </div>
            </div>
        </div>
        <div class="col-3 products">
            <div class="row">
                <div class="col-12 text-center image">
                    image
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center subtext">
                    Test 1
                </div>
            </div>
        </div>
        <div class="col-3 products">
            <div class="row">
                <div class="col-12 text-center image">
                    image
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center subtext">
                    Test 1
                </div>
            </div>
        </div>
        <div class="col-3 products">
            <div class="row">
                <div class="col-12 text-center image">
                    image
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center subtext">
                    Test 1
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div style="padding-left: 20px;">
            <h3>
                Statistics
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-center graph">super text</div>
        <div class="col-6 text-center graph2">super text</div>
    </div>
</div>





@stop