<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/nav.css">
    <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-light" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/image/logo.png" alt="Bootstrap">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold; color: black;" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:black; font-weight:bold; margin-left: 30px;" href="/resep">Resep</a>
                        </li>
                    </ul>
                </div>
                    <a href="{{ route('profile') }}">
                        <div class="profile-circle">
                            
                        </div>
                    </a>                
            </div>
        </nav>
    </header>
</body>
</html>
