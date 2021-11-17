@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Add a product</h3>
    <form method="POST" action="{{route('create.store')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control {{$errors->has('title')? 'is-invalid' : ''}}" id="title" aria-describedby="title" name="title">
            @if($errors->has('title'))
                <span class="invalid-feedback">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control {{$errors->has('description')? 'is-invalid' : ''}}" id="description" cols="10" rows="10"></textarea>
            @if($errors->has('description'))
                <span class="invalid-feedback">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control {{$errors->has('price')? 'is-invalid' : ''}}" id="price" name="price">
            @if($errors->has('price'))
                <span class="invalid-feedback">{{$errors->first('price')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control {{$errors->has('category')? 'is-invalid' : ''}}" id="category" name="category">
            @if($errors->has('category'))
                <span class="invalid-feedback">{{$errors->first('category')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="location">City</label>
            <input type="text" class="form-control {{$errors->has('location')? 'is-invalid' : ''}}" id="location" name="location">
            @if($errors->has('location'))
                <span class="invalid-feedback">{{$errors->first('location')}}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit Ad</button>
    </form>
</div>
@endsection
