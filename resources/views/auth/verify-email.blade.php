<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hanflix</title>
	<link rel="stylesheet" type="text/css" href="./css/verification.css">
    
</head>
<style>
    body{    
        background-image: url('./images/bg3.jpg');
        background-size:cover;
        background-repeat:no-repeat;
    }
</style>
<body>
        

        <div class="container">

            <div class="logo">
            <img src="./images/logo2.png">
                <a href="/">
                    <div class="w-20 h-20 fill-current text-gray-500" >
                </a>
            </div>
            <div class="msg">
                {{ __('Click the button below to verify your email address and finish setting up your profile.') }}
            </div>

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button class="verify-btn">
                        {{ __('Verify your email') }}
                    </button>
                </div>
            </form>
            @if (session('status') == 'verification-link-sent')
                <div class="pop-up-msg">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
    
            <div class="mt-4">
                
    
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <button class="logout-btn" type="submit">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
			
        </div>

</body>
</html>