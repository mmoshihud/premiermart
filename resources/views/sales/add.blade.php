@extends('layouts.sales')
@section('content')
    <div class="product">
        {{ csrf_field() }}
        <form class="product-form" action="{{ route('product.add') }}" method="post">
            <input class="form-input" type="text" name="name" placeholder="Name"><br>
            <input class="form-input" type="text" name="currency-field" id="currency-field" value="" data-type="currency"
                placeholder="$1,000,000.00"><br>
            <input class="form-input" type="text" name="quantity" placeholder="Quantity"><br>
            <input class="form-input" type="text" name="category" placeholder="Category"><br>
            <input class="form-btn" type="submit" value="Add Product">
        </form>
    </div>
@endsection
