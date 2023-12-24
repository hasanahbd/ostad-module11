@extends('layouts.app')
@section('title', 'Sales History')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success col-lg-12">
                {{ session('status') }}
            </div>
            
        @endif
        <div class="col-lg-12">
            <h1>Sales History</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $sale->product->name }}</td>
                            <td>{{ $sale->quantity }}</td>
                            <td>{{ $sale->total }}</td>
                            <td>{{ $sale->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@endsection