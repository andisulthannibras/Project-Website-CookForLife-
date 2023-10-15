<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="/css/home.css">
    </head>
    <body>
        @guest
        @include('nav.nav_before_login')
    @else
        @include('nav.nav_after_login')
    @endguest

    <main>
        @yield('content')
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <div class="home" id="home">
            <div class="content">
                <div class="text-content">
                    <h1>Mau Belajar Memasak ?</h1>
                    <h3>Bersama Cook For Life Kamu Bisa</h3>
                    <h3>Mendapatkan Pengalaman Memasak</h3>
                    <h3>Yang Luar Biasa!</h3>
                    <div class="button-content">
                        <a href="/resep">Lihat Resep</a>
                    </div>
                </div>
                <div class="image-content">
                    <img src="/image/Home.png">
                </div>
            </div>
        </div>
        <div class="misi" id="misi">
            <div class="content-items">
                <div class="background-image">
                    <img src="/image/Home 2.png" alt="" class="image-background">
                </div>
                <div class="text-content" style="color: white;">
                    <h1>Misi Cook For Life !</h1>
                    <h3 style="color: white; padding-top: 20px;">Untuk memberikan pengajaran yang terstruktur dan</h3>
                    <h3 style="color: white;">terorganisir tentang teknik memasak yang benar dan</h3>
                    <h3 style="color: white;">bahan-bahan yang sehat dan berkualitas. Selain itu,</h3>
                    <h3 style="color: white;">kursus masak ini bertujuan untuk memberikan</h3>
                    <h3 style="color: white;">pengalaman belajar yang interaktif dan menyenangkan</h3>
                    <h3 style="color: white;">sehingga peserta merasa termotivasi dan percaya diri</h3>
                    <h3 style="color: white;">dalam memasak.</h3>
                </div>
            </div>
        </div>
        <div class="visi">
            <div class="content-items">
                <div class="text-content">
                    <h1 style="color:black;">Visi Cook For Life !</h1>                    
                    <h3 style="padding-top: 20px;">meningkatkan keterampilan memasak mereka</h3>
                    <h3>dengan cara yang menyenangkan dan efektif. Hal</h3>
                    <h3>ini diharapkan dapat membantu individu untuk</h3>
                    <h3>memasak makanan yang sehat dan lezat untuk diri</h3>
                    <h3>sendiri dan keluarga.</h3>
                </div>
                <div class="image">
                    <img src="/image/Home 3.png" alt="">
                </div>
            </div>
        </div>
        @include('nav.footer')
    </body>
</html>