<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <title> Canteen Ordering System </title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <!-- <div class="content">
                <div class="title m-b-md">
                    Canteen Ordering System
                </div>
        </div> -->

        <div class = "NavigationBar1" > </div>
        
        <div class = "Container1" >  
            <div class = "title1" >
                <label class = "C">C</label> <label class = "C1"> &nbsp anteen </label> <br>
                <label class = "C">O</label> <label class = "C1"> &nbsprdering </label>
                <label class = "C">S</label> <label class = "C1"> &nbsp&nbsp ystem </label>

            </div>
        </div>

        <div class = "Container2" > </div>

        <img class = "CookGirl" src = "https://i.pinimg.com/564x/ad/d8/b2/add8b2d113415813cf942caad0bfa011.jpg">
            
            <!-- @if (Route::has('login'))
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
            @endif        -->  

            <a class = "loginLink" href = "{{ url('/home') }}" > Login </a>
            <a class = "registerLink" > Register </a>

        </div>
    </body>
</html>

        <style>
            html, body 
            {
                background-color: #fff;
                color: #F8FAFC;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height 
            {
                height: 100vh;
            }

            .flex-center 
            {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref 
            {
                position: relative;
            }

            .top-right 
            {
                position: absolute;
                right: 10px;
                top: 26.5px;
            }

            .content 
            {
                position: absolute;
                color: gray;
                text-align: center;
                z-index: 1;
                top: 1.4em;
                left: 1.3em;
            }

            .title 
            {
                font-family: century gothic;
                font-size: 1.2em;
            }

            .imageBackground
            {
                position: absolute;
                left: 43em;
                height: 40em;
            }

            .NavigationBar1
            {
                position: absolute;
                background-color: #F8FAFC;
                width: 100%;
                height: 4.5em;
                border-bottom: .2em solid black;
            }

            .CookGirl
            {
                position: absolute;
                top: 10em;
                left: 40em;
                width: 33em;
            }

            .title1
            {
                position: absolute;
                color: black;
                font-family: georgia;
                width: 20em;
                height: 24em;
                top: 9em;
                left: 10em;
            }

            .C
            {
                color: #B51D29;
                font-size: 7em;
            }

            .C1
            {
                color: gray;
                font-size: 3em;
                letter-spacing: .03em;
            }

            .Container2
            {
                position: absolute;
                top: 10.4em;
                left: 8.5em;
                height: 21.5em;
                width: .50em;
                background-color: #B51D29;
            }

            .loginLink
            {
                position: absolute;
                color: gray;
                left: 69em;
                top: 1.8em;
                letter-spacing: .05em;
                cursor: pointer;
                text-decoration: none;
            }

            .loginLink:hover
            {
                position: absolute;
                color: #B51D29;
                left: 69em;
                top: 1.8em;
                letter-spacing: .05em;
                cursor: pointer;
            }

            .registerLink
            {
                position: absolute;
                color: gray;
                right: 6em;
                top: 1.8em;
                letter-spacing: .05em;
                cursor: pointer;
            }

            .registerLink:hover
            {
                position: absolute;
                color: #B51D29;
                right: 6em;
                top: 1.8em;
                letter-spacing: .05em;
                cursor: pointer;
            }

        </style>
