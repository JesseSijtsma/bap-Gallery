<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Appie</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Albert_Heijn_Logo.svg/860px-Albert_Heijn_Logo.svg.png" type="image/x-icon">
</head>
<body>
<div id="bcCover"></div>
<div id="wrapper">
    <div class="topnav" id="myTopnav">
        <a href="{{route('homepage')}}"><img src="https://i1.wp.com/vraagalex.nl/wp-content/uploads/2016/06/266px-Albert_Heijn_Logo.svg_.png?resize=150%2C150&ssl=1" alt="AH"></a>
        <a href="{{route('gyms')}}">Locaties</a>
        <a href="{{route('abbo')}}">Producten</a>
        <a href="{{route('gallery.index')}}">Photo Gallery</a>
        <a href="{{route('registration.form')}}">Login</a>
    </div>
    <main>
        <h1 style="text-align: center; font-size: 50px"><span style="color: black;">Ah</span> <span style="color: lightblue">Winkel</span></h1>
        <div id="contentText">
            @yield('content')
        </div>
    </main>
    <footer>
        Copyright &copy; | AH <span style="color: lightblue">HOLD</span> All rights reseverd
    </footer>
</div>

<!-- Optional JavaScript -->
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
