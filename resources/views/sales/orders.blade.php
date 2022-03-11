@extends('layouts.sales')
@section('content')
    <div class="container">
        <table class="tble">
            <tr>
                <th>Picture</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>

            </tr>
            <tr>
                <td>Picture of Product</td>
                <td>{{ $id }}</td>
                <td>{{ $name }}</td>
                <td>{{ $price }}</td>
                <td>{{ $quantity }}</td>
            </tr>
        </table>
    </div>
@endsection
