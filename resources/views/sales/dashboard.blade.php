@extends('layouts.app')
@section('title', 'Sales Dashboard')
@section('content')
    <div class="row">
        <!-- Sales Today -->
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Sales Today</div>
                <div class="card-body">
                    <h5 class="card-title">${{ $salesToday }}</h5>
                </div>
            </div>
        </div>

        <!-- Sales Yesterday -->
        <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Sales Yesterday</div>
                <div class="card-body">
                    <h5 class="card-title">${{ $salesYesterday }}</h5>
                </div>
            </div>
        </div>

        <!-- Sales This Month -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Sales This Month</div>
                <div class="card-body">
                    <h5 class="card-title">${{ $salesThisMonth }}</h5>
                </div>
            </div>
        </div>

        <!-- Sales Last Month -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Sales Last Month</div>
                <div class="card-body">
                    <h5 class="card-title">${{ $salesLastMonth }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
