@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1>
                Product aanmaken
            </h1>
            <form id="createProduct" method="POST" enctype="multipart/form-data" action="/product" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Naam</label>
                    <div class="col-8">
                        <input id="name" name="name" type="text" required="required" class="form-control here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-4 col-form-label">Beschrijving</label>
                    <div class="col-8">
                        <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-4 col-form-label">Prijs</label>
                    <div class="col-8">
                        <input id="price" name="price" type="number" min="0.01" step="0.01" class="form-control here">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-4 col-form-label">Afbeelding</label>
                    <div class="col-8">
                        <input type="file" name="attachment">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-8 col-2">
                        <button name="submit" value="new" type="submit" class="btn btn-primary">Create & New</button>
                    </div>
                    <div class="col-2">
                        <button name="submit" value="create" type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection