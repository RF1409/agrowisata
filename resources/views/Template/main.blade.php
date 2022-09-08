<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Agrowisata | Bambu Sungai</title>
    <!--
    Elegance Template
    https://templatemo.com/tm-528-elegance
    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/home/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/home/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="/home/css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="/home/css/owl.carousel.css">

    <link rel="stylesheet" href="/home/css/animate.css">

    <link rel="stylesheet" href="/home/css/templatemo-style.css">

    <link rel="stylesheet" href="/home/css/responsive.css">

    <!-- Favicons -->
  	<link href="/style/dist/img/logo.png" rel="icon">
    
    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  </head>
    
  <body>
    
    <div id="video">
      
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        @include('Template.navbar')
        

        <video autoplay muted loop id="myVideo">
          <source src="/home/images/video-bg.mp4" type="video/mp4">
        </video>


        <div class="container mt-3">
             @yield('container')
        </div>


        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  

    <script src="/home/js/jquery.js"></script>

    <script src="/home/js/bootstrap.min.js"></script>

    <script src="/home/js/fullpage.min.js"></script>

    <script src="/home/js/scrolloverflow.js"></script>

    <script src="/home/js/owl.carousel.min.js"></script>

    <script src="/home/js/jquery.inview.min.js"></script>

    <script src="/home/js/form.js"></script>

    <script src="/home/js/custom.js"></script>


  </body>

</html>