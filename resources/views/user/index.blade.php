@extends('user.layouts.app')

@section('title', 'welcome to e shoping center online')

@section('content')
    <!-- Featured Start -->
    <div class="container-fluid mb-3">
        <div class="white pt-5 rounded">
            <div class="row px-xl-5 pb-2">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border border-dark mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3 blue"></h1>
                        <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border border-dark mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2 blue"></h1>
                        <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border border-dark mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3 blue"></h1>
                        <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border border-dark mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3 blue"></h1>
                        <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    @for ($d = 1; $d <= 8; $d++)
        <!-- Vendor Start -->
        <div class="container-fluid mb-3">
            <div class="rounded white pt-3 pb-4">
                <a href=""
                    class=" text-capitalize font-weight-bolder d-flex align-items-center justify-content-center">
                    <h4 class="font-family font-weight-semi-bold pt-2">mobile</h4>
                    <h4 class="mt-2 ml-2"><i class="fa-solid fa-angle-right"></i></h4>
                </a>
                <!-- Offer Start -->
                <div class="container-fluid offer mb-3">
                    <div class="white pt-3 rounded">
                        <div class="row px-xl-5">
                            <div class="col-md-6 pb-4 ">
                                <div
                                    class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                                    <img src="{{ asset('user/img/offer-1.png') }}" alt="">
                                    <div class="position-relative" style="z-index: 1;">
                                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                                        <h1 class="mb-4 font-weight-semi-bold">SFpring Collection</h1>
                                        <a href="" class="btn btn-outline-dark  rounded py-md-2 px-md-3 bg-blue">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4 ">
                                <div
                                    class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                                    <img src="{{ asset('user/img/offer-2.png') }}" alt="">
                                    <div class="position-relative" style="z-index: 1;">
                                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                                        <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                                        <a href="" class="btn btn-outline-dark bg-blue rounded py-md-2 px-md-3">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Offer End -->
                <div class="row px-xl-5">
                    <div class="col">
                        <div class="owl-carousel vendor-carousel">
                            @for ($i = 1; $i <= 8; $i++)
                                <a href="" id="hov">
                                    <div class="vendor-item rounded border border-dark p-4">
                                        <img src="{{ asset('user/img/vendor-' . $i . '.jpg') }}" alt="">
                                        <div class="d-flex flex-column text-center text-dark">
                                            <span>Monitar</span>
                                            <span class="span-2">From $990</span>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->


    @endfor
@endsection
