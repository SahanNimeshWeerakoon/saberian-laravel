@extends('layout')
@section('content')
<div class="products">
    <div class="filter">
        <label for="vendor">Filter Product By Vendor</label>
        <select class="form-control" id="vendor" name="vendor_id">
            @foreach($vendors as $vendor)
            <option value="{{$vendor->id}}">{{$vendor->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="products_list container d-flex justify-content-around flex-wrap">
        @foreach($products as $product)
        <div class="card ml-2 mr-2 mt-4 d-flex flex-column justify-content-between" style="width: 18rem;">
            @if($product->img !== null )
            <img class="card-img-top" src="{{ $product->img }}" alt="Card image cap">
            @else
            <img class="card-img-top" src="https://media.istockphoto.com/id/1472933890/vector/no-image-vector-symbol-missing-available-icon-no-gallery-for-this-moment-placeholder.jpg?s=612x612&w=0&k=20&c=Rdn-lecwAj8ciQEccm0Ep2RX50FCuUJOaEM8qQjiLL0=" alt="Card image cap">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                    <small class="text-secondary">{{ $product->count }} items remains</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop