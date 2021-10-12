@extends('layouts.app')

@section('content')
    <div class="container pb-5 mt-n2 mt-md-n3">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <h3>Produkter:</h3>
                <!-- Item-->
                @foreach($products as $product)
                <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="{{ asset('img/test2.jpg') }}" alt="Product"></a>
                        <div class="media-body pt-3">
                            <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">{{ $product->title }}</a></h3>
                            <div class="font-size-lg text-primary pt-2"><span class="text-muted mr-2">Pris: </span>${{ $product->price }}</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Beskrivelse: </span>{{ $product->description }}</div>
                        </div>
                    </div>
                    <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                        <div class="form-group mb-2">
                            <label for="quantity1">Quantity</label>
                            <input class="form-control form-control-sm" type="number" id="quantity1" value="1">
                        </div>
                        <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <polyline points="1 20 1 14 7 14"></polyline>
                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                            </svg>Update cart</button>
                        <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>Remove</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>













{{--    <h2>Produkter:</h2>--}}
{{--        <div class="productsContainer">--}}

{{--            @foreach($products as $product)--}}
{{--                <div class="card productChild" style="width: 18rem;">--}}
{{--                    <img src="{{ asset('img/test.jpeg') }}" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">{{ $product->title }}</h5>--}}
{{--                        <p class="card-text">{{ $product->description }}</p>--}}
{{--                        <a href="#" class="btn btn-primary">Se detaljer</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}
@endsection
