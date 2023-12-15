@extends('layouts.app')

@section('title', 'Update Product SKU- '.$product->sku)
@section('content')
<div class="container mt-4">
    <h1>Add New Product</h1>
    <form action="{{ route('products.update',$product) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection


