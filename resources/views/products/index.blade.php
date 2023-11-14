@extends('layout')
@section('content')
<div>
    <div class="container d-flex justify-content-around">
        @foreach($products as $product)
        <div class="card ml-2 mr-2" style="width: 18rem;">
            <img class="card-img-top" src="{{ $product->img }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <a href="/product/{{ $product->id }}" class="btn btn-primary">View</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop