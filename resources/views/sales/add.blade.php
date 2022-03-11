@extends('layouts.sales')
@section('content')
    <div class="product">
        {{ csrf_field() }}
        <form class="product-form" action="{{ route('product.add') }}" method="post">
            {{ csrf_field() }}
            <input class="form-input" type="text" name="name" placeholder="Name"><br>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="currency" placeholder="Price"><br>
            @error('currency')
                <div>{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="quantity" placeholder="Quantity"><br>
            @error('quantity')
                <div>{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="category" placeholder="Category"><br>
            @error('category')
                <div>{{ $message }}</div>
            @enderror
            <input class="form-btn" type="submit" value="Add Product">
        </form>
    </div>
@endsection
