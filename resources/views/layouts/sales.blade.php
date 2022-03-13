<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales Dashboard</title>
    <link rel="stylesheet" href="/css/sales.css">
</head>

<body>
    <div class="header-main">
        <ul>
            <li><a class="h-items" href="#">Cart</a></li>
            <li><a class="h-items" href="#">Account</a></li>
            <li>
                @if (!Session::has('username'))
                    <a class="button-main" href="{{ route('login') }}">Login</a>
                @endif
                @if (Session::has('username'))
                    <a class="button-main" href="{{ route('log.out') }}">Logut</a>
                @endif
            </li>
        </ul>
    </div>
    <div class="page-container">
        <div class="first-row">
            <div class="side-container">
                <ul class="sidebar-ul">
                    <li class="sidebar-list">
                        <a class="side-items" href="{{ route('dashboard') }}">Dashboard</a>
                        <a class="side-items" href="{{ route('orders') }}">Order List</a>
                        <a class="side-items" href="{{ route('products') }}">Products</a>
                        <a class="side-items" href="{{ route('dashboard') }}">Category</a>
                    </li>
                </ul>
            </div>
            @yield('content')
        </div>
    </div>


</body>

</html>
