<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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

            .img {
                    opacity: 0.5;
                    filter: alpha(opacity=50); /* For IE8 and earlier */
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">


                 <div class="jumbotron">
                        <h1 class="display-4">Welcome to Examsion for Student</h1>
                        <p class="lead">Testing Systems</p>
                        <hr class="my-4">
                        <p>Exam management for RMUTSV.</p>
                        <a class="btn btn-primary btn-lg" href="home1" role="button">Enter Website</a>

                    </div>

                 {{-- <img src="/imgs/bgwel.jpg" class="img-fluid" alt="Responsive image"> --}}
                 <div class="row">
                 <div class="col-sm-6">
                   <div class="card">
                     <div class="card-body">
                       <h5 class="card-title">For Teacher</h5>
                       <img src="/imgs/teacher.svg" alt="..." class="img-thumbnail" width="100px;" height="100px;">
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-6">
                   <div class="card">
                     <div class="card-body">
                       <h5 class="card-title">For student</h5>
                       <img src="/imgs/student.svg" alt="..." class="img-thumbnail" width="100px;" height="100px;">
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                   </div>
                 </div>
               </div>
            </div>

        </div>
    </body>
</html>
