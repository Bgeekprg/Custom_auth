<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container">
        <form action="{{route('Post_login')}}" method="POST">
            @csrf
            <h1 class="text-center">Login</h1>
            <div class="row justify-content-center bg-white rounded py-2">
                <div class="col-lg-7 col-md-7 col-sm-10 my-2">
                    Email
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-10 my-2">
                    Password
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-10 text-center my-2">
                    <input type="submit" name="submit" id="" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>