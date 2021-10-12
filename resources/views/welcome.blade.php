@extends('layouts.app')

@section('content')
    <h2>Produkter:</h2>
        <div class="productsContainer">

            @foreach($products as $product)
                <div class="card productChild" style="width: 18rem;">
                    <img src="{{ asset('img/test.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Se detaljer</a>
                    </div>
                </div>
            @endforeach

        </div>
@endsection
