<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Citation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Long+Cang&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .men-sidebar {
                width: 200px;
                background: lightblack;
            }

            .men-center {
                text-align: center;
            }

            .men-down {
                padding: 200px;²²
            }

            .men-small {
                font-size: 12px ;
                padding-bottom: 50
            }

            .men-sidebar {
                height: 350%;
                position: fixed; 
                z-index: 1;
                overflow: auto; 
            }
            .col-10 {
                float
            }

            .content {
                text-align: center;
                padding-top: 0%;
                padding-right: 51px;
                padding-left: 50px;
                margin-right: 12%;
                margin-left: 10%; 
            }

            .title {
                font-size: 84px;zs
                width: 100%;
                color: white; 
                text-align: center; 
                font-family: 'Dancing Script', cursive;
                
            }

            .m-b-md {
                margin-bottom: 500px;
            }
            
            .bg {
                /* The image used */
                background-image: url("https://www.muralswallpaper.com/app/uploads/Green-Tropical-Plant-Wallpaper-Mural-Room-820x532.jpg");

                /* Full height */
                height: 100%;

                /* Full width */
                width: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
            }


            .navbar.fixed-left {

                right: auto;

            }
            .navbar.fixed-left {

                bottom: 0;
                width: 235px;
                flex-flow: column nowrap;
                align-items: flex-start;

            }
            .navbar.fixed-left {

                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1030;

            }
            .navbar {

                border: none;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.3);
                box-shadow: 0 1px 2px rgba(0,0,0,0.3);

            }
            .bg-primary {

                background-color: #262626 !important;

            }

            .side{
                margin-left: 300px;
            }
            
            #up{
                margin-top: 80px;
                margin-left: 70px;
            }

            h2{
                margin-left: 45px;
                color: white;
            }
            #down{
                margin-top: 50px;
                margin-left: 70px;
            }

            img{
                margin-top: 50px;
            }
            

            /* ========== */

            .fa {
                padding: 10px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                border-radius: 50%;
            }

            .fa:hover {
                opacity: 0.7;
            }
            .fa-instagram {
                background: #125688;
                color: white;
            }
            .fa-facebook {
                background: #3B5998;
                color: white;
            }
            .fa-linkedin {
                background: #007bb5;
                color: white;
            }

            footer{
                margin-top: 280px;
                margin-left: 35px;
            }

            h3{
                margin-left: 10px
            }

            h5{
                margin-left: 10px
            }

        </style>
    </head>
    <body class="bg">

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-left">
        <div class="col-10">
            <img src="https://cdn.discordapp.com/attachments/590281614861271098/633780030274535445/CI.png" alt="Logo" width="100%" height="60%">
        </div>
            <h2>_____________</h2>
                <form id="up" action="{{route('citation')}}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-primary">Générer</button>
                </form>
        <br>
            <h2>_____________</h2>
        <br>
                <form id="down" action="{{route('citation')}}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-primary">Kaamelot</button>
                </form>

                <footer>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <h3>_____________</h3>
                </footer>

                    <h5>Copyright 2019 by Citation | All rights Reserved</h5>
                    <br>
                    <h5>Powered by Citation</h5>

    </nav>

            <nav class="men-sidebar men-bar-block men-small men-center">

            </nav>    

            <div class="side">
                <div class="content">
                    <div class="title m-b-md">
                        @if($citation_r)
                            {{ $citation_r->random()->citation }}
                        @endif
                    </div>
                </div>
            </div>
    </body>
</html>
