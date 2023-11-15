@extends('layout')
@section('content')
<div class="create-product">
    @if ($errors->any())
        <div class="alert alert-danger container">
            Sorry! Something went wrong<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="container mt-5" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="mt-5 mb-4 text-center">Upload New Stock</h2>
        <div class="form-group mb-4">
            <label for="vendor">Vendor</label>
            <select class="form-control" id="vendor" name="vendor_id">
                @foreach($vendors as $vendor)
                <option value="{{$vendor->id}}" {{ $vendor->id == $product->vendor_id ? 'selected' : '' }}>{{$vendor->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="branch">Branch</label>
            <select class="form-control" id="branch" name="branch_manager_id">
                @foreach($branchManagers as $branchMan)
                <option value="{{$branchMan->id}}" {{ $branchMan->id == $product->branch_manager_id ? 'selected' : ''  }}>{{$branchMan->branch_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="name">Model Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Enter stock model" />
        </div>
        <div class="form-group mb-4">
            <label for="description">Model Description</label>
            <textarea class="form-control" id="description" rows="10" name="description">{{ $product->description }}</textarea>
        </div>
        <div class="form-group mb-4">
            <label for="price">Price (LKR)</label>
            <input type="number" class="form-control" id="price" value="{{ $product->price }}" name="price" />
        </div>
        <div class="form-group mb-4">
            <label for="count">Item Count</label>
            <input type="number" class="form-control" id="count" value="{{ $product->count }}" name="count" />
        </div>
        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
</div>
@stop