@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Contact the seller</h3>
        <form action="#" method="POST">
            <div class="form-group">
            <label for="content">Your message</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
    </div>
@endsection
