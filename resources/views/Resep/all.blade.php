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

        @guest
        @include('nav.nav_before_login')
    @else
        @include('nav.nav_after_login')
    @endguest

    <main>
        @yield('content')
    </main>        
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <div class="box">
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="/image/resep 1.png"/></div>
                    <p class="text-wrapper">
                        A French beef stew braised in red wine, often red Burgundy, and beef stock,
                        typically flavored with carrots, onions, garlic, and a bouquet garni, and
                        garnished with pearl onions, mushrooms, and bacon.
                    </p>
                    <div class="name-by-desc">
                        <div class="div">Resep Ramen</div>
                        <div class="text-wrapper-2">by Yoshihiro Murata</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3" ><a href="/detail resep" style="text-decoration: none; color: white;">Read</a></div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">Last updated 12 Mar 21</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star abu.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">(144)</div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="/image/resep 2.png"/></div>
                    <p class="text-wrapper">
                        Potatoes dauphinoise is how the French say casserole of potatoes, heavy cream,
                        and cheese.
                    </p>
                    <div class="name-by-desc">
                        <div class="div">Soupe l'oignon</div>
                        <div class="text-wrapper-2">by Marie Julie Grandjean Mouquin</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3" ><a href="/detail resep 2" style="text-decoration: none; color: white;">Read</a></div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">Last updated 12 Mar 21</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star abu.png" alt=""/>
                                    <img class="star-4" src="/image/star abu.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">(122)</div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="/image/resep 3.png"/></div>
                    <p class="text-wrapper">
                        Croissants are a quintessential French pastry that have become popular all over
                        the world. They are made with layers of buttery, flaky dough that is rolled and
                        folded to create a distinctive crescent shape.
                    </p>
                    <div class="name-by-desc">
                        <div class="div">Langue de Boeuf</div>
                        <div class="text-wrapper-2">by Alain Ducasse</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3" ><a href="/detail resep" style="text-decoration: none; color: white;">Read</a></div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">Last updated 12 Mar 21</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">(150)</div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="ramen">
                <div class="overlap">
                    <div class="overlap-group"><img class="image" src="/image/resep 4.png"/></div>
                    <p class="text-wrapper">
                        The dish sees chicken braised with wine, mushrooms, salty pork or bacon,
                        mushrooms, onions, garlic, and sometimes even a drop of brandy. Although the
                        name translates as ‘rooster in wine’ – the braising is ideal for tougher birds –
                        the recipe usually uses chicken or capon.
                    </p>
                    <div class="name-by-desc">
                        <div class="div">Lasagna</div>
                        <div class="text-wrapper-2">by Samina Jalil</div>
                    </div>
                    <div class="read-and-more">
                        <div class="line"></div>
                        <div class="read-btn">
                            <div class="div-wrapper">
                                <div class="text-wrapper-3" ><a href="/detail resep" style="text-decoration: none; color: white;">Read</a></div>
                            </div>
                        </div>
                        <div class="last-updated-rating">
                            <p class="p">Last updated 12 Mar 21</p>
                            <div class="rating-and-rev">
                                <div class="rating">
                                    <img class="star" src="/image/star.png" alt=""/>
                                    <img class="img" src="/image/star.png" alt=""/>
                                    <img class="star-2" src="/image/star.png" alt=""/>
                                    <img class="star-3" src="/image/star.png" alt=""/>
                                    <img class="star-4" src="/image/star.png" alt=""/>
                                </div>
                                <div class="text-wrapper-4">(166)</div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="ramen">
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
                                <div class="text-wrapper-3" ><a href="/detail resep" style="text-decoration: none; color: white;">Read</a></div>
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
            </div>
            @include('nav.footer')
        </body>
    </html>