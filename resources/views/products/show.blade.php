@extends('layouts.default')

@section('title', 'Product Details')

@section('content')
<div class="container">
    <h2 class="mb-4">Product Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $product->quantity }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
