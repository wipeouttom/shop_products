@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>
                Product aanmaken
            </h1>
            <form id="createProduct" method="POST" enctype="multipart/form-data" action="/product" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label">Naam</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="name" name="name" type="text" required="required" class="form-control here">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-4 col-form-label">Beschrijving</label>
                    <div class="col-md-6 col-sm-12">
                        <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-md-4 col-form-label">Prijs</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="price" name="price" type="number" min="0.01" step="0.01" class="form-control here">
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-md-4 col-form-label">Afbeelding</label>
                    <div class="col-md-6 col-sm-12">
                        <input type="file" name="attachment">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <button name="submit" value="create" type="submit" class="btn btn-primary float-right">Create</button>
                        <button name="submit" value="new" type="submit" class="btn btn-primary float-right" style="margin-right: 15px;">Create & New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection