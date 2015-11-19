<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Solar CMS::Authentication</title>
    <meta name="description" content="Solar content management system"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="{{ URL::asset('shared/css/dependencies.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/auth/css/bundle.css') }}" type="text/css"/>
</head>
<body>

<div class="auth">
    <div class="pull-left p brand-quote">
        <h1 class="text-u-c"><i class="fa fa-linux m-r-sm"></i>Solar CMS</h1>
        <small class="font-thin text-md">
            The Solar is a powerful CMS based on Laravel framework. <br>
            Feel free to use, it is fully open source system
        </small>
    </div>

    <div class="pull-right b-l md-whiteframe-z1 w-auto-xs auth-block bg-white">
        <div class="p-lg text-color m">
            <div class="m-b text-sm text-2x">
                <h2 class="font-400">Sign in</h2>
                <small class="font-thin">Please login with your credential</small>
            </div>

            <form action="{{ URL::route('Solar.Auth::login.post') }}" method="post" class="login-form">
                {{ csrf_field() }}
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" id="email-input" name="email" value="{{ old('email') }}">
                    <label for="email-input">Email</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" id="password-input" name="password">
                    <label for="password-input">Password</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check font-400">
                        <input type="checkbox"><i class="green"></i> Keep me signed in
                    </label>
                </div>
                <button md-ink-ripple type="submit" class="md-btn md-raised blue btn-block p-h-md">Sign in</button>
            </form>
        </div>

        <div class="p-v-lg text-center font-thin">
            <div>Powered by Solar CMS &copy 2015</div>
        </div>

    </div>
</div>

<script src="{{ URL::asset('shared/js/dependencies.js')}}"></script>
<script src="{{ URL::asset('assets/auth/js/bundle.js')}}"></script>
</body>
</html>