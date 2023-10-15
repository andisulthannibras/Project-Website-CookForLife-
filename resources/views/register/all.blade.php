<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header" style="padding-top: 30%;">
                        {{-- <img class="float-start" src="image/Lesyuk.png"> --}}
                        <h1>Register</h1> 
                        <p>Cari Resep Sesuai Selera Anda!</p>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                        <div class="mb-4" style="outline: none; border: none; padding-top: 20px;">
                            <input type="text" id="name" name="name" style="outline: none; font-size: 20px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Nama" required>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        {{-- <div class="mb-4" style="outline: none; border: none;">
                            <input type="text" id="no_hp" name="no_hp" style="outline: none; font-size: 19px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="No Hp">

                        </div> --}}
                        <div class="mb-4" style="outline: none; border: none;">
                            <input type="email" id="email" name="email" style="outline: none; font-size: 20px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="mb-4" style="outline: none; border: none;">
                            <input type="alamat" id="alamat" name="alamat" style="outline: none; font-size: 20px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Alamat">
                            @if ($errors->has('alamat'))
                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                        </div>
                        <div class="mb-4" style="outline: none; border: none;">
                            <input type="password" id="password" name="password" style="outline: none; font-size: 19px; width: 290px; font-weight border-bottom: 20px;" class="border-0 border-bottom" id="exampleFormControlInput1" placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark" style="justify-content: center; width: 290px;"> {{ __('Register') }} </button>
                        <div class="tagnya">
                        <a style="font-size: 15px; color: grey;">Sudah Memiliki Akun?</a>
                        <a style="font-size: 15px; text-decoration: none;" href="login">Login</a>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="login-right">
                    <img src="image/Register image.png" class="rounded float-end" style="width: 100%;">
                </div>
            </section>