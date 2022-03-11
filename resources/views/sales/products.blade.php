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
                <th></th>

            </tr>
            <tr>
                <td>Picture of Product</td>
                @foreach ($data as $d)
                    <td>{{ $d }}</td>
                @endforeach
                <td>Details</td>
            </tr>
        </table>
    </div>
@endsection
