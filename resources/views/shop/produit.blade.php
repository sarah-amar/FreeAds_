@extends('shop')
@section('content')
    <main role="main">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('images/'.$produit->image)}}">
                    </div>
                </div>

                <div class="col-6">
                    <h1 class="jumbotron-heading">{{$produit->name}}</h1>
                    <h5>{{$produit->price}}</h5>
                    <p class="lead text-muted">{{$produit->description}}</p>
                    <p>{{$produit->location}}</p>
                    <hr>
                    <p>
                        <a href="{{route('message.create')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Contact the seller</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
