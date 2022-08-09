<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./css/reset-password.css">
</head>
<body>
    <div class="header">
        <a href="/">
            <img src="./images/logo2.png" alt="">
        </a>
        <p>Help Center</p>
        <a href="/" id="join-hanflix">Join hanflix</a>
        <a href="/" id="sign-in">Sign in</a>
    </div>

    <div class="mid-container">
        <h1>Forgot password</h1>
        <div class="text-msg mb-4 text-sm">
            {{ __('Please enter your email to reset your account.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        
        <form method="POST" action="{{ route('password.email') }}">
                @csrf
             
                <!-- Email Address -->
                <div>
                    <label for="email" :value="__('Email')">

                    <input id="email" placeholder="Enter your account" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="reset-btn flex items-center justify-end mt-4">
                    <a href="/">Cancel</a>
                    <button>
                        {{ __('Reset password') }}
                    </button>
                </div>
            </form>
        </div>
        
        <div class="footer-content">
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
            
            <div class="footer-text text-white text-center">
                <span class="text-center">HanFlix</span><br>
                <span>@Copyright. All rights reserved.</span>
            </div>
        </div>

        
</body>
</html>
