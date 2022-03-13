@extends('layouts.sales')
@section('content')
    <div class="product">
        <form class="product-form" action="{{ route('product.add') }}" method="post">
            {{ csrf_field() }}
            <input class="form-input" type="text" name="name" placeholder="Name"><br>
            @error('name')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="currency" placeholder="Price"><br>
            @error('currency')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="quantity" placeholder="Quantity"><br>
            @error('quantity')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="category" placeholder="Category"><br>
            @error('category')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-btn" type="submit" value="Add Product">
        </form>
    </div>
@endsection
