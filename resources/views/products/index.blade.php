@extends('layout')
@section('content')
<div class="products">
    <div class="filter container w-25 pt-3 pb-5">
        <label for="vendor">Filter Product By Vendor</label>
        <select class="form-control" id="vendor" name="vendor_id">
            @foreach($vendors as $vendor)
            <option value="{{$vendor->id}}">{{$vendor->name}}</option>
            @endforeach
        </select>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
                <small class="text-secondary">{{ $product->count }} items remains</small>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop