<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .quote{font-style: italic !important;
            }
            .author{
                text-align: right !important ;
            }
            .main{
                text-decoration: none;
            }
            .title{
                color:blueviolet;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <nav class=" navbar-dark">
            @if (Route::has('login'))
                <div class="top-right links ">
                    @auth
                        <a href="{{ url('/home') }}" class=" text-light">Home</a>
                    @else
                        <a href="{{ route('login') }}" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content border-info-2">
                <div class="title m-b-md">
                   <a href="{{ url('/') }}" class=" text-decoration-none  title"> ERGO</a>
                </div>
                <div class="jumbotron jumbotron-fluid bg-transparent">
  <div class="container bg-dark bg-transparent">
    <h1 class="display-4 text-light">Ego trip: a journey to nowhere.</h1>
    <p class="quote text-light">“A writer is someone for whom writing is more difficult than it is for other people.”</p>
<p class="author text-light">Thomas Mann, Essays of Three Decades</p>
  </div>
</div>

            </div>

        </div>
        <div class="container-fluid row ml-4 mb-5">
        <div class="card text-white bg-dark mb-3 col-3 ml-5" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3 col-3 ml-5" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3 col-3 ml-5" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3 col-3 ml-5" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>
        </div>
        <!-- Footer -->
<footer class="page-footer font-small special-color-light pt-4">

<!-- Footer Elements -->
<div class="container">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-6 mb-4">

      <!-- Form -->
      <form class="form-inline">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
          aria-label="Search">
        <i class="fas fa-search" aria-hidden="true"></i>
      </form>
      <!-- Form -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6 mb-4">

      <form class="input-group">
        <input type="text" class="form-control form-control-sm" placeholder="Your email"
          aria-label="Your email" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-sm btn-outline-dark btn- my-0 ml-2" type="button"><h6 class="text-light">Sign up</h6></button>
        </div>
      </form>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#"> ERGO.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
