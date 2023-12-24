@extends('layouts.app')
@section('title', 'Add New Sale')
@section('content')
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('sales.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="product">Product:</label>
                    <select name="product" id="product" class="form-control">
                        <option value="">Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" id="price" name="price" value="">
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control">
                </div>

                <div class="form-group">
                    <label for="total">Total Price:</label>
                    <input type="text" id="total" name="total" class="form-control" readonly>
                </div>

                <button type="submit" class="btn btn-primary mt-1 ">Submit</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
@endsection

@section('scripts')
    <script>
        const product = document.getElementById('product');
        const quantity = document.getElementById('quantity');
        const totalPrice = document.getElementById('total');
        const sPrice = document.getElementById('price');

        product.addEventListener('change', function() {
            const price = this.options[this.selectedIndex].dataset.price;
            totalPrice.value = price * quantity.value;
            sPrice.value = price;
        });

        quantity.addEventListener('keyup', function() {
            const price = product.options[product.selectedIndex].dataset.price;
            totalPrice.value = price * this.value;
        });
    </script>
@endsection
