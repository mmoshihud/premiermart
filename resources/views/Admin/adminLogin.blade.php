<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
   
    <title>Login-Admin</title>
</head>
<body>
    
    <form action="{{route('admin_Login')}}" method="post">
        {{@csrf_field()}}
        <center>
            <br><br><br>
            <h1>Login</h1><br>
            <input type="text" name="userName" placeholder="User Name" value="{{old('userName')}}"><br><br>
            <span class="text-danger">
                @error('userName')
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
        </center>

            
      
    
    
    </form>
    
</body>
</html>