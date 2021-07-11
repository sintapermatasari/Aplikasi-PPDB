<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPDB SMK Semangat 45</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .main{
                width: 100%;
                height: 600px;
            }
            .main .image{
                float: left;
            }
            .main .image .li{
                list-style: none;
                float:left;
            }
            .main .image li img{
                height: 500px;
            }

        </style>
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
            <div class="main">
            <ul class="image">
            <li><img src="/img/sekolah.jpg" alt=""></li>
            </ul>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Penerimaan Peserta Didik Baru SMK Semangat 45
                </div>

               
                <div class="links">
                    <a href="http://127.0.0.1:8000/daftar/create">Daftar Baru</a>
                    <a href="http://127.0.0.1:8000/daftar">Pendaftar</a>
                   
                </div>
            </div>
        </div>
    </body>
</html>
