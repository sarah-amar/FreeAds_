@extends('welcome')
@section('album')


    <div class="album py-5 bg-light">
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          {{--   {{dump(($produits))}} --}}

            @foreach($produits as $produit)
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{asset('images/'.$produit->image)}}">
                    <div class="card-body">
                        <p class="card-text"><b>{{$produit->name}}</b> <br>{{$produit->description}}<br><i>{{$produit->location}}</i>
                            <br><span class="badge badge-info"><a class="text-white" href="{{route('products_by_cat',['id'=>$produit->category->id])}}">{{$produit->category->name}}</a></span>
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">${{$produit->price}}</span>
                            </div>
                            <a href="produit/{{$produit->id}}" class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
