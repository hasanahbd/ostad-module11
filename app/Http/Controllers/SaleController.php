<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Sale;
use App\Models\Product;
use Carbon\Carbon;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $request->validated();
        $sale = Sale::create([
            'product_id' => $request->product,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $request->total,
        ]);
        $product = Product::find($request->product);
        if ($product) {
            $product->stock = $product->stock - $request->quantity; // deduct the quantity sold from the stock
            $product->save();
        }
        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }

    public function dashboard()
    {
        // Define time periods
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $firstDayThisMonth = Carbon::now()->startOfMonth();
        $firstDayLastMonth = Carbon::now()->subMonthNoOverflow()->startOfMonth();
        $endDayLastMonth = Carbon::now()->subMonthNoOverflow()->endOfMonth();

        // Query sales figures
        $salesToday = Sale::whereDate('created_at', $today)->sum('total');
        $salesYesterday = Sale::whereDate('created_at', $yesterday)->sum('total');
        $salesThisMonth = Sale::whereBetween('created_at', [$firstDayThisMonth, $today])->sum('total');
        $salesLastMonth = Sale::whereBetween('created_at', [$firstDayLastMonth, $endDayLastMonth])->sum('total');

        return view('sales.dashboard', compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth'));
    }
}
