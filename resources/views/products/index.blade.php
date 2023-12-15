@extends('layouts.app')
@section('title', 'All Products')
@section('content')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        
    @endif
    <h2>Product List</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">New Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Update Price</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
