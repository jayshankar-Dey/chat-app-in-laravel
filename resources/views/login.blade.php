<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style20.css')}}">
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>login page</title>
</head>
<style>
    .login{
        height: 700px;
    }
</style>
<body class="bg-light">
    @if (session("msg"))
   <script>
    var data = "{{session("msg")}}"
    alert(data);
</script>
   @endif
    <div class="container">
       <div class="row">
        <div class="col-md-6 login bg-white border  mx-auto p-2 my-2">

            <div class="row text-center d-flex justify-items-center mt-5">
                <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Wellcome to Login Page</h3>
                <p class="text-secondary">this is our information that in login page please fill proparly</p>
            </div>
<form action="{{route('login')}}" method="POST">
    @csrf
            <div class="row mt-5 p-2">
                <div class="col-7 mx-auto mt-4">
                    <input type="email" class="form-control mt-2" placeholder="name@gmail.com" name="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-danger my-1">{{$message}}</p>
                    @enderror
                    <input type="password" class="form-control mt-2" placeholder="Re********" name="password" value="{{old("repassword")}}">
                    @error('password')
                    <p class="text-danger my-1">{{$message}}</p>
                    @enderror
                    <button class="btn btn-primary w-100 mt-3">Login</button>

                    <div class="d-flex mt-2">
                        <p>dont have any account please</p>
                        <a href="{{route('register_page')}}" class="text-decoration-none mx-1">Register</a>
                    </div>
                </div>
            </div>
</form>
        </div>
       </div>
    </div>
</body>
</html>