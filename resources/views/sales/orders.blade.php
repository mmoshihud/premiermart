@extends('layouts.sales')
@section('content')
    <div class="container">
        <table class="tble">
            <tr>
                <th>Picture</th>
                <th>ID</th>
                <th>P_ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th></th>

            </tr>
            @foreach ($order as $o)
                <tr>
                    <td>Picture of Product</td>
                    <td>{{ $o->o_id }}</td>
                    <td>{{ $o->id }}</td>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->price }}</td>
                    <td>{{ $o->category }}</td>
                    <td><a class="button-main" href="#">Sell</a></td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
