<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detail Resep</title>
        <link rel="stylesheet" href="/css/detail_resep.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
    </head>
    <body>
        @guest @include('nav.nav_before_login') @else @include('nav.nav_after_login')
        @endguest

        <main>
            @yield('content')
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <div class="detail" id="detail">
            <div class="image-content">
                <img src="/image/resep 1.png" alt="">
            </div>
            <div class="text-head">
                <h3>Resep Ramen</h3>
                <div class="text-wrapper">by Yoshihiro Murata</div>
                <div class="info-container text-white">
                    <div class="tengah">
                        <div class="text-time ">
                            <h5><img src="/image/time.png" style="margin-right: 20px;">35 Menit</h5>
                            <h5 style="margin-left: 20px; margin-right: 20px;">|</h5>
                            <h5><img src="/image/porsi.png" style="margin-left: 10px; margin-right: 20px;">2 Porsi</h5>
                        </div>
                        <div class="kesulitan">
                            <h5><img src="/image/hat.png" style="margin-right: 20px;" alt="">Tingkat Kesulitan: Sedang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-body">
            <h1><img src="/image/note.png" style="margin-right: 30px;" alt="">Catatan</h1>
            <p>Dibumbui dengan kaldu ayam dengan campuran topping seperti jamur kuping, sawi, dan telur. Semangkuk ramen rumahan yang lezat siap menemani Anda. Siapapun bisa membuat ramen yang lezat 
                ini dalam waktu kurang dari 30 menit!</p>
                <p>Dalam resep ini, daripada menghabiskan waktu berjam-jam untuk membuat sup kaldu ramen, kami menyajikan cara membuat ramen yang lezat dan mudah dibuat. Ikuti cara membuatnya.</p>
        </div>
        <div class="content-item">
            <div class="text-content">
                <h1>Langkah - Langkah</h1>
                <p>1 Rendam jamur kuping dengan air hangat sampai lunak, tiriskan.</p>
                <hr>
                <p>2 Rendam jamur kuping dengan air hangat sampai lunak, tiriskan.</p>
                <hr>
                <p>3 Tumis bawang putih dan jahe hingga harum, lalu masukkan daging wagyu, tumis sampai berubah warna.</p>
                <hr>
                <p>4 Tambahkan air kaldu, cabai yang dihaluskan, kecap jepang, kecap manis, garam dan gula sesuai selera.</p>
                <hr>
                <p>5 Masukkan mie, jamur kuping dan sawi, semua masak sampai sawi layu. Angkat.</p>
                <hr>
                <p>6 Sajikan hangat dengan irisan telur rebus dan tomat.</p>
            </div>
            <div class="image-item">
                <h1>Gambar</h1>
                <img src="/image/ramen 1.png" alt="">
                <img src="/image/ramen 2.png" alt="">
                <img src="/image/ramen 3.png" alt="">
                <img src="/image/ramen 4.png" alt="">
            </div>
        </div>        
        @include('nav.footer')
    </body>
</html>