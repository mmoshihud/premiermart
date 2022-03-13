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
                <th>Quantity</th>
                <th>Price</th>
                <th>Catagory</th>
                <th></th>

            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>Picture of Product</td>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->p_quantity }}</td>
                    <td>{{ $d->price }}</td>
                    <td>{{ $d->category }}</td>
                    <td><a class="button-main" href="{{ route('product.edit', ['id' => $d->id]) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
