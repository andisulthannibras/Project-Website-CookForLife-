<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
            <link rel="stylesheet" href="/css/profile.css">
        <!-- Pastikan path ke file CSS sesuai -->
    </head>
    <body>
        @include('nav.nav_before_login')
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <div class="profile-container">
            <div class="table-profile">
                <div class="profile-foto">
                    <div class="profile-info">
                        <div class="profile-logo">
                            <a>Profile</a>
                            <!-- Tambahkan href yang sesuai -->
                        </div>
                        {{-- <div class="profile-detail">
                            <a>Detail</a> <!-- Tambahkan href yang sesuai -->
                        </div> --}}
                        <div class="profile-image">
                            <img src="/image/profile.png" alt="Gambar Profil Anda">
                        </div>
                    </div>
                </div>
                <div class="profile-bio">
                    <div class="details">
                        <p>Details</p>
                    </div>
                    <div class="Bio">
                        <div class="text-bio">
                            <p>Nama</p>
                        </div>
                        <div class="textfield-bio">
                            <p>Andi</p>
                        </div>
                    </div>
                    <div class="Bio">
                        <div class="text-bio">
                            <p>Alamat</p>
                        </div>
                        <div class="textfield-bio">
                            <p>Makassar</p>
                        </div>
                    </div>
                    <div class="Bio">
                        <div class="text-bio">
                            <p>Email</p>
                        </div>
                        <div class="textfield-bio">
                            <p>andi@gmail.com</p>
                        </div>
                    </div>
                    {{-- <div class="Bio">
                        <div class="text-bio">
                            <p>Nomor</p>
                        </div>
                        <div class="textfield-bio">
                            <p>+6287873541907</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="profile-about">About</div>
            <a>Aku sangat suka memasak tujuan ku masuk kursus masak karna ingin</a>
            <a>menambah ilmu masakan dan menamnbah wawasan tentang masakan.</a>
            <div class="btn-bawah">
                <div class="edit-btn">
                    <button>edit</button>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="logout-btn">
                        <button type="submit">logout</button>
                    </div>
                </form>                
            </div>
        </div>
        @include('nav.footer')
    </body>
</html>