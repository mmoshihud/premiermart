@extends('layouts.sales')
@section('content')
    <div class="container">
        <div class="btn-container">
            <a class="button-main" href="{{ route('product.submit') }}">Add Product</a>
        </div>
        <table class="tble">
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Catagory</th>

            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>Picture of Product</td>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->quantity }}</td>
                    <td>{{ $d->price }}</td>
                    <td>{{ $d->category }}</td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
