<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Dashboard
    <br/>
    {{-- {{Auth::logout()}} --}}
    @if (Auth::check())
    <a href="Logout" class="btn btn-success">Logout</a>

    @else
    not logged in    
    @endif
    
</body>
</html>