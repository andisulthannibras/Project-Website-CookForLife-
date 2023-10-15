<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header" style="padding-top: 30%;">                    
                        {{-- <img class="float-start" src="image/Lesyuk.png"> --}}
                        <h1>Login</h1> 
                        <p>Cari Resep Sesuai Selera Anda!</p>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-4" style="outline: none; border: none; padding-top: 20px;">
                            <input type="email" name="email" id="email" style="outline: none; font-size: 20px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Email" required="required">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-4" style="outline: none; border: none;">
                            <input type="password" name="password" id="password" style="outline: none; font-size: 19px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Password" required="required">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark" style="justify-content: center; width: 290px; margin-bottom: 15px;" >Login</button>                        
                        <p style="font-weight: bold; margin-left: 85px; padding-top: 10px;">Metode Lain</p>
                        <button class="btn btn-light" style="height: 50px; margin-left: 32px; margin-top: 10px; margin-bottom: 20px; box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; background-color: white;"><img src="image/Google.png" style="size: 20px; padding-right: 20px;">Sign Up With Google</button>
                        <a style="font-size: 15px; color: grey; margin-left: 40px;">Belum Memiliki Akun?</a>
                        <a style="text-decoration: none; font-weight: bold;"href="{{ route('register') }}">Register!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-right">
            <img src="image/Login image.png" class="rounded float-end" style="width: 100%;">
        </div>
    </section>
    @if(Session::has('popup'))
    <script>
        // Tampilkan popup setelah halaman selesai dimuat
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('popup').style.display = 'block';
        });
    </script>
    @endif
</body>
</html>