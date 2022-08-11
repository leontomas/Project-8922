<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanflix | Watch Movie for free | Livestream</title>

     <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="/css/reset-password.css">

</head>
<!-- <style>
    body {
        background-image: url('images/logo2.png');
    }
</style> -->
<body>
    <div class="header">
        <a href="/">
            <img src="/images/logo2.png">
        </a>
        <a href="/" id="join-hanflix">Join Hanflix</a>
        <a href="/" id="sign-in">Sign in</a>
    </div>

    <div class="mid-container">
        <h1>Reset Password</h1>
        <div class="text-msg mb-4 text-sm">
            {{ __('Please enter all the following details') }}
        </div>
    </div>


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.update') }}">
    @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" :value="__('Email')">

            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="Email Address"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" :value="__('Password')">

            <input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Password"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" :value="__('Confirm Password')">

            <input id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" placeholder="Confirm Password" required />
        </div>

        <div class="reset-btn flex items-center justify-end mt-4">
            <button>
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>

    <div class="footer-content">
        <div class="footer">
            <a href="https://www.facebook.com">
                <img class="facebook" src="/icons/fb.png">
            </a>
            <a href="https://www.instagram.com">
                <img class="instagram" src="/icons/ig.png"> 
            </a> 
            <a href="https://twitter.com">
                <img class="twitter" src="/icons/tw.png">
            </a>
            <a href="https://twitter.com">
                <img class="twitter" src="/icons/yt.png">
            </a>
        </div>
        
        <div class="footer-text text-white text-center">
            <span class="text-center">HanFlix</span><br>
            <span>@Copyright. All rights reserved.</span>
        </div>
    </div>       
</body>
</html>