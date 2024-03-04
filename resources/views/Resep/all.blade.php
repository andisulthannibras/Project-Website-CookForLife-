<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resep</title>
        <link rel="stylesheet" href="/css/resep.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
    </head>
    <body>
        @include('nav.nav')
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>            
        @foreach ($resep as $resep)
        {{-- @foreach ($data as $detail) --}}
        <div class="box">
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="{{$resep->image}}"/></div>
                    <p class="text-wrapper">
                        {{$resep->deskripsi}}
                    </p>
                    <div class="name-by-desc">
                        <div class="div">{{$resep->nama}}</div>
                        <div class="text-wrapper-2" >{{$resep->pencipta}}</div>
                    </div>                    
                    <div class="read-and-more">
                        <div class="line"></div>                        
                        <div class="read-btn">
                            <div class="div-wrapper">                            
                                <div class="text-wrapper-3">                                                                    
                                    <a href="/detail resep/{{$resep->id}}" >
                                        <button>Baca Resep</button>
                                    </a>
                                    {{-- <a href="{{ route('detail resep', ['id' => $resep->id]) }}">Read</a> --}}
                                    {{-- <a href="{{ route('detail resep', ['id' => $detail->id]) }}" style="text-decoration: none; color: white;">Read</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">{{$resep->last_update}}</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star abu.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">{{$resep->rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            @endforeach 
            {{-- @foreach ($resep_2 as $resep)
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="{{$resep->image}}"/></div>
                    <p class="text-wrapper">
                        {{$resep->deskripsi}}
                    </p>
                    <div class="name-by-desc">
                        <div class="div">{{$resep->nama}}</div>
                        <div class="text-wrapper-2">{{$resep->pencipta}}</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3">
                                    <a href="/detail resep 2" style="text-decoration: none; color: white;">Read</a>
                                </div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">{{$resep->last_update}}</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star abu.png" alt=""/>
                                    <img class="star-4" src="/image/star abu.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">{{$resep->rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach @foreach ($resep_3 as $resep)
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="{{$resep->image}}"></div>
                    <p class="text-wrapper">
                        {{$resep->deskripsi}}
                    </p>
                    <div class="name-by-desc">
                        <div class="div">{{$resep->nama}}</div>
                        <div class="text-wrapper-2">{{$resep->pencipta}}</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3">
                                    <a href="/detail resep 3" style="text-decoration: none; color: white;">Read</a>
                                </div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">{{$resep->last_update}}</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">{{$resep->rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach @foreach ($resep_4 as $resep)
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="{{$resep->image}}"/></div>
                    <p class="text-wrapper">
                        {{$resep->deskripsi}}
                    </p>
                    <div class="name-by-desc">
                        <div class="div">{{$resep->nama}}</div>
                        <div class="text-wrapper-2">{{$resep->pencipta}}</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3">
                                    <a href="/detail resep 4" style="text-decoration: none; color: white;">Read</a>
                                </div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">{{$resep->last_update}}</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">{{$resep->rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
            {{-- <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="/image/resep 5.png"/></div>
                    <p class="text-wrapper">
                        Ratatouille is a classic French dish that originated in the Provence region. It
                        is a vegetarian stew made with a variety of vegetables, including tomatoes,
                        zucchini, eggplant, bell peppers, and onions.
                    </p>
                    <div class="name-by-desc">
                        <div class="div">Nasi Goreng</div>
                        <div class="text-wrapper-2">by Mamang Ortega</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3">
                                    <a href="/detail resep" style="text-decoration: none; color: white;">Read</a>
                                </div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">Last updated 12 Mar 21</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star abu.png" alt=""/>
                                    <img class="star-3" src="/image/star abu.png" alt=""/>
                                    <img class="star-4" src="/image/star abu.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">(120)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            @include('nav.footer')
        </body>
    </html>