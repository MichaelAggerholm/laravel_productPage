@extends('layouts.app')

@section('content')
    <div class="container pb-5 mt-n2 mt-md-n3">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <h3>Products:</h3>
                <!-- Item-->
                @foreach($products as $product)
                <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="{{ asset('img/test2.jpg') }}" alt="Product"></a>
                        <div class="media-body pt-3">
                            <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#">{{ $product->title }}</a></h3>
                            <div class="font-size-lg text-primary pt-2"><span class="text-muted mr-2">Pris: </span>${{ $product->price }}</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Description: </span>{{ $product->description }}</div>
                        </div>
                    </div>
                    <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                        <div class="form-group mb-2">
                            <label for="quantity1">Amount</label>
                            <input class="form-control form-control-sm" type="number" id="quantity1" value="1">
                        </div>
                        <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="button">
                            <i class="fas fa-sync"></i> Update cart</button>
                        <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                            <i class="fas fa-trash-alt"></i> Remove</button>
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
