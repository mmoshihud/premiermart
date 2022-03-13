<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            margin-left: 800px;
            margin-top: 200px;
        }

    </style>
</head>

<body>
    <div>
        <form action="{{ route('login.sales.profile') }}" method="post">
            {{ csrf_field() }}
            <br><br><br>
            <h1>Login</h1><br>
            <input type="text" name="username" placeholder="User Name" value="{{ old('userName') }}"><br><br>
            <span class="text-danger">
                @error('username')
                    User name cannot be empty and must be alphabet only <br>
                @enderror
            </span>

            <br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <span class="text-danger">
                @error('password')
                    password cannot be empty and must contain minimum 6 characters <br>
                @enderror
            </span>

            <input type="submit" value="Login">
            @if (!Session::has('username'))
                <div style="color: red; font-size: 1.5rem;">
                    Please login to continue
                </div>
            @endif
    </div>



</body>

</html>
