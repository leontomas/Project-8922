<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- External CSS -->
        <link rel="stylesheet" type="text/css" href="./css/welcome.css">

        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
    </head>

    <style>
        body {
            background-image: url('./images/bg4.jpg');
            background-size: cover;
            width: 100%;
            height: 100%
        }
    </style>
    <body>
        <nav id="nav" class="navbar navbar-expand-lg">
            <div class="container-fluid" id="nav">
                <a class="navbar-brand mr-5" href="#">
                    <img src="./images/logo2.png" style="">
                </a>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a class="login" href="{{ route('login') }}">
                                <button class="btn-login">
                                    Login
                                </button>
                            </a>

                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">
                                <button class="btn-register">
                                    Register
                                </button>
                            </a>
                        @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <div class="mid-content text-center text-white">
            <h1>Watch your favorite Movies <br>and Livestream here!</h1>
            <p>Hanflix and chill?</p>

            <div class="input">
                <input class="textbox" type="text" placeholder="Enter email" name="">
                <button class="btn-submit">Submit</button>
            </div>
        </div>

        <div class="container text-white text-center d-flex justify-content-center align-items-center">
            
        </div>

        <div class="movies">
			<h1 class="text-white">Watch Now!</h1>
			<a href=""><img src="./images/ambulance.jpg"></a>
			<a href=""><img src="./images/crawl.jpg"></a>
			<a href=""><img src="./images/dakota.jpg"></a>
			<a href=""><img src="./images/dark-phoenix.jpg"></a>
			<a href=""><img src="./images/coherence.jpg"></a>
			<a href=""><img src="./images/ambulance.jpg"></a>
			<a href=""><img src="./images/crawl.jpg"></a>
			<a href=""><img src="./images/dakota.jpg"></a>
			<a href=""><img src="./images/dark-phoenix.jpg"></a>
			<a href=""><img src="./images/coherence.jpg"></a>
			<a href=""><img src="./images/ambulance.jpg"></a>
			<a href=""><img src="./images/crawl.jpg"></a>
		</div>

        <!-- second -->
        

        <!-- Footer -->
        <div class="footer-content">
            <div class="footer d-flex justify-content-center align-items-center d-2 grip-gap">
                <div class="footer">
                    <a href="https://www.facebook.com">
                        <img class="facebook" src="./icons/fb.png">
                    </a>
                    <a href="https://www.instagram.com">
                        <img class="instagram" src="./icons/ig.png"> 
                    </a> 
                    <a href="https://twitter.com">
                        <img class="twitter" src="./icons/tw.png">
                    </a>
                    <a href="https://twitter.com">
                        <img class="twitter" src="./icons/yt.png">
                    </a>
                </div>
            </div>
           
            <div class="footer-text text-white text-center">
                <span class="text-center">HanFlix</span><br>
                <span>@Copyright. All rights reserved.</span>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
