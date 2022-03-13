@extends('layouts.sales')
@section('content')
    <div class="container">
        <form action="{{ route('product.update') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $id }}">
            <input class="form-input" type="text" name="name" value="{{ $name }}"><br>
            @error('name')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="currency" value="{{ $price }}"><br>
            @error('currency')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="quantity" value="{{ $p_quantity }}"><br>
            @error('quantity')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-input" type="text" name="category" value="{{ $category }}"><br>
            @error('category')
                <div style="color: red">{{ $message }}</div>
            @enderror
            <input class="form-btn" type="submit" value="Update">
        </form>
    </div>
@endsection
