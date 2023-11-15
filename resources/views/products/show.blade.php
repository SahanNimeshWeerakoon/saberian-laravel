@extends('layout')
@section('content')
<div class="product-show container">
    <div class="product-carousel mb-5">
        @if($product->img !== null )
        <img class="card-img-top w-50 mx-auto" src="{{ $product->img }}" alt="Card image cap">
        @else
        <img class="card-img-top w-50 mx-auto" src="https://media.istockphoto.com/id/1472933890/vector/no-image-vector-symbol-missing-available-icon-no-gallery-for-this-moment-placeholder.jpg?s=612x612&w=0&k=20&c=Rdn-lecwAj8ciQEccm0Ep2RX50FCuUJOaEM8qQjiLL0=" alt="Card image cap">
        @endif
    </div>
    <div class="product-details">
        <h2>{{ $product->name }} ({{$product->count}} Available)</h2>
        <p>{{ $product->description }}</p>
        <p><b>Branch</b>: {{$product->branch_name}}</p>
        <p><b>Branch Manager</b>: {{$product->manager_name}}</p>
        <h4>Rs. {{$product->price}}/=</h4>
    </div>
</div>
@stop