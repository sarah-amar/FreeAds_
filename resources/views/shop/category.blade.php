@extends('shop')
@section('content')

    <main role="main">

        <div class="py-3">
            <div class="container-fluid">
                <div class="row">
                    @foreach($produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('images/'.$produit->image)}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text"><b>{{$produit->name}}</b><br>{{$produit->description}}</p>
                                <p><i>{{$produit->location}}</i></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{$produit->price}}</span>
                                    <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>

@endsection
