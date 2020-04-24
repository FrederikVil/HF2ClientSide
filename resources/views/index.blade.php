<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('js/WeatherAPI.js')}}"></script>
    <link rel="stylesheet" href="/css/IndexCSS.css">

    <title>Se Odense</title>

</head>

<body>
<header class="container-fluid no-gutters">
    <div class="row no-gutters">
        <div class="col-lg-12">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Billeder/Odense/OdenseBanner1.jpg" alt="">
                        <div class="carousel-caption">
                            <h3>ODENSE BY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-sm-2 text infobox">
                            <h3><br/><br/><br/><br/><br/><br/>ODENSE MIDTBY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Billeder/Odense/OdenseBanner2.jpg" alt="">
                        <div class="carousel-caption">
                            <h3>ODENSE RÅDHUSPLADS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-sm-2 text infobox">
                            <h3><br/><br/><br/><br/><br/><br/>ODENSE RÅDHUSPLADS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Billeder/Odense/OdenseBanner3.jpg" alt="">
                        <div class="carousel-caption">
                            <h3>EGESKOV SLOT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-sm-2 text infobox">
                            <h3><br/><br/><br/><br/><br/><br/>EGESKOV SLOT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div>
                <nav class="navbar-dark navbar-expand-sm bg-dark justify-content-center fixed-top">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="">FORSIDE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">ATTRAKTIONER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontakt">KONTAKT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/beskeder">BESKEDER</a>
                        </li>
                    </ul>

                    <select id="side">
                        <option value="">Gå til side</option>
                        <option value="">FORSIDE</option>
                        <option value="">ATTRAKTIONER</option>
                        <option value="/kontakt">KONTAKT</option>
                        <option value="/beskeder">BESKEDER</option>
                    </select>

                </nav>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center velkommen-tekst">
            Velkommen til Odense.
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center">
            <button id="toggle" class="toggle-button">Toggle Brødtekst</button>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center" id="toggle-text">
            <p><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                tristique, mauris at congue volutpat, urna purus pellentesque orci, vitae posuere ex quam nec arcu. In
                tempor finibus finibus. Aliquam elit leo, bibendum sed libero in, tristique sollicitudin lorem. Proin
                fermentum nibh eu volutpat accumsan. Cras in enim ultricies, sagittis ex et, dictum ipsum. Etiam
                fringilla
                porttitor mattis. Donec laoreet auctor consequat. Suspendisse commodo odio non vulputate suscipit. <br>
                <br></p>
        </div>
    </div>
</div>

<div>


</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 border border-dark">
            <img id="enlarge" src="Billeder/Odense/ObStadion.jpg" alt="">
            <figcaption class="text-center"></figcaption>
        </div>
        <div class="col-lg-6 border border-dark">
            <p class="text-center display-1 burntxt">Byens Stolthed</p>
            <img id="FadeImage" class="mx-auto d-block" src="Billeder/Odense/ObLogo.png" alt="">
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="offset-lg-4 col-lg-4 offset-lg-4 border" style="background: lightblue;">
            <p class="weathertext">Dagens Vejr i Odense</p>
            <img class="weathericon mx-auto d-block" src="">
            <p class="weather text-center"></p>
            <p class="temp text-center"></p>
        </div>

    </div>
</div>


<script>
    $(document).ready(function () {
        $("#toggle").click(function () {
            $("#toggle-text").toggle();
        });
    });
</script>

<script>
    function fade() {
        $("#FadeImage").each(function (index) {
            $(this).hide();
            $(this).fadeIn(3000).fadeOut(3000), fade();
        });
    }

    fade();
</script>

<script>
    $(document).ready(function () {
        $('#enlarge').hover(function () {
            $("#enlarge").addClass('transition');

        }, function () {
            $("#enlarge").removeClass('transition');
        });
    });
</script>

<script>
    document.getElementById("side").onchange = function () {
        if (this.selectedIndex !== 0) {
            window.location.href = this.value;
        }
    };
</script>

</body>

</html>


