@extends('front.layout')

@section('title', 'page accueil')

@section('content')
    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                <div class="d-flex">
                    <div class="pt-1">
                        <h4>EAT & DRINK SHOP</h4>
                    </div>

                    <!-- insertion du chemin vers la page login -->
                    <div class="ml-auto p-2"><a href="{{ url('login') }}" class="text-dark text-decoration-none"
                            id="mobile-font">LOGIN</a></div>
                    <div class="p-2"><a href="{{ url('register') }}" class="text-dark text-decoration-none a"
                            id="mobile-font">REGISTER</a></div>

                </div>
                <div class="d-flex flex-column pt-4">
                    <div>
                        <h5 class="text-uppercase font-weight-normal">shopping bag</h5>
                    </div>
                    <div class="font-weight-normal">2 items</div>
                </div>
                <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                    <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                    <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                    <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                    <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
                </div>
                <div
                    class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img src="{{ asset('front_assets/images/product_01.1.jpg') }}" width="150" height="150"
                                alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>Chicken Burger</h6>
                            </div>
                            <div>Art.No:<span class="pl-2">091091001</span></div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> M</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>3000 XAF</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span
                            class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>6000 XAF</b></div>
                    <div class="close">&times;</div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img src="{{ asset('front_assets/images/drinks1.jpg') }}" width="150" height="150"
                                alt="" id="image">
                        </div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>Coca Cola</h6>
                            </div>
                            <div>Art.No:<span class="pl-2">056289891</span></div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> XL</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>1000 XAF</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span
                            class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>2000 XAF</b></div>
                    <div class="close">&times;</div>
                </div>

            </div>
        </div>
    </div>
    <div class="container bg-light rounded-bottom py-4" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <button class="btn btn-sm bg-light border border-dark">GO BACK</button>
                    </div>
                    <div class="px-md-0 px-1" id="footer-font">
                        <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">8000 XAF</span></b>
                    </div>
                    <div>
                        <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CONTINUE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
