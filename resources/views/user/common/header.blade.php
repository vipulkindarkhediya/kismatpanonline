@if (session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('status') }}
    </div>
@endif
<div class="container-fluid white mb-3">
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="text-muted m-0 display-5 font-weight-semi-bold"><span
                        class="blue font-weight-bold px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control pt-3 pb-3  bg-color rounded"
                        placeholder="Search for more products">
                </div>
            </form>
        </div>
        <div
            class="col-lg-3 col-6 d-flex justify-content-between align-items-center menu-btn text-capitalize font-weight-medium">
            @if (Route::has('login'))
                @auth
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-capitalize" type="button" id="loginAfterBtn"
                            data-mdb-toggle="dropdown" aria-expanded="false">

                            {{ Auth::user()->name }}
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu rounded" style="top: 94% " aria-labelledby="loginAfterBtn">
                            <li><a class="dropdown-item text-capitalize" href="{{ route('profile.edit') }}"><i
                                        class="fa-regular fa-circle-user pr-2"></i>my profile</a></li>
                            <li><a class="dropdown-item text-capitalize" href="{{ route('orders') }}"><i
                                        class="fa-solid fa-box  pr-2"></i>orders</a></li>
                            <li><a class="dropdown-item text-capitalize" href="{{ route('wishlist') }}"><i
                                        class="fa-solid fa-heart pr-2"></i>wishlist</a></li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li><a class="dropdown-item text-capitalize" href="{{ route('logout') }}""
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();""><i
                                            class="fa-solid fa-heart pr-2"></i>logout</a>
                                </li>
                            </form>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" id="loginBtn" class="p-2 rounded">
                        <i class="fa-regular fa-circle-user mr-1"></i>
                        <span>login</span>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" id="registerBtn" class="p-2 rounded">
                            <i class="fa-solid fa-user-plus mr-1"></i>
                            <span class="text-capitalize">sign up</span>
                        </a>
                    @endif
                @endauth
            @endif
            <a href="" title="Cart" class="btn radios text-dark">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>

<!-- Navbar Start -->
<div class="container-fluid mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 rounded">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0 position-relative d-flex w-100 justify-content-around">
                @for ($q = 1; $q <= 8; $q++)
                    <div class="nav-item dropdowm position-relative d-flex">
                        <a href="#" class="nav-link font-weight-semi-bold text-capitalize dropdown-toggle"
                            id="menu" data-toggle="dropdown">
                            <div class="flex">
                                @if (isset($url))
                                    <img src="{{ asset('user/img/carousel-1.jpg') }}" class="rounded"
                                        style="width: 64px; height:64px;" alt="">
                                @endif
                                <div class="d-flex position-relative align-items-center">
                                    <span class="mt-2">mobile</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

@if (isset($url))
    <div class="container-fluid mb-3">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 310px;">
                    <img class="img-fluid" src="{{ asset('user/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                                Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                            <a href="" class="btn btn-light py-2 px-3 rounded">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 310px;">
                    <img class="img-fluid" src="{{ asset('user/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First
                                Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                            <a href="" class="btn btn-light py-2 px-3 rounded">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" id="just-left" data-slide="prev">
                <div class="btn btn-black" style="width: 45px; height: 100px;">
                    <span class="carousel-control-prev-icon" style="margin-top: 2rem"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" id="just-right" data-slide="next">
                <div class="btn btn-black" style="width: 45px; height: 100px;">
                    <span class="carousel-control-next-icon" style="margin-top: 2rem"></span>
                </div>
            </a>
        </div>
    </div>
@endif


@section('jquery')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $(".alert-success").hide();
            }, 3000);
        });
    </script>
@endsection
