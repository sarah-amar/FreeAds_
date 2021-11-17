<header>

    <!-- PREMIERE NAV BAR SARA-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Go Shop</a>
            <!-- Searchbox -->
            <div class="input-group rounded">
                <form class="form-inline">
                    <input type="search" class="form-control rounded" placeholder="Search..." aria-label="Search"
                           aria-describedby="search-addon" />
                </form>
            </div>
            <button type="button" class="btn btn-outline-dark" style="width:300px"><a class="text-black-50" href="{{route('create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add a product</a></button>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <ul class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>


                <ul>
                    <div class="registration">
                        @if (Route::has('login'))
                            <div class="regis">
                                @auth
                                    <a href="{{ url('/home') }}" class="home">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="login">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="register">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SECOND NAVBAR-->
    <div class="navbar2">

        <!-- CATEGORIES-->
        <div class="navbar navbar-expand-lg navbar-light bg-red">
            <a class="navbar-brand" href="#"></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products_by_cat',['id'=>$category->id])}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- FIN CATEGORIES-->
    </div>
</header>
