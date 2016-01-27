<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>МХЕГ</title>
    <meta name="description" content="Financial soft"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ URL::asset('shared/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('shared/css/app.css') }}">

    @if(!Config::get('app.debug'))
        <link rel="stylesheet" href="http://localhost:3000/css/app.css">
    @else
        <link rel="stylesheet" href="{{ URL::asset('assets/auth/css/app.css') }}">
    @endif
    @yield('style')

    <style>
        .auth-logo{
            height: 80px;
            text-align: center;
            margin-top: -30px;
        }
        .auth-logo img{
                height: 60px !important;
                max-height: 60px !important;
                display: block;
                margin: 20px auto 3px 3px;
                padding-left: 5px;
            }
        .auth-logo span{
            display: block;
        }

    </style>
</head>
<body>
<div class="layer"></div>

<div class="app auth" id="app">

    <div class="center-block w-xxl w-auto-xs p-y-md">

        <div class="p-a-md box-color r box-shadow-z1 text-color">

            <div class="navbar m-b-md ">
                <div class="pull-center">
                    <a class="navbar-brand auth-logo">
                        <img src="/images/logo.png" />
                        <span class="hidden-folded inline">МХЕГ</span>
                    </a>
                </div>
            </div>

            <form name="form" action="{{ URL::route('Solar.Auth::login.post') }}" method="post">
                {{ csrf_field() }}

                <div class="md-form-group float-label">
                    <input type="text" name="email" class="md-input">
                    <label>Нэвтрэх нэр, имайл</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" name="password" class="md-input">
                    <label>Нууц үг</label>
                </div>

                <div class="md-form-group">
                    <p><label class="md-check"><input type="checkbox"> <i class="blue"></i> Намайг сана</label></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn primary btn-block p-x-md">Нэвтрэх</button>
                </div>
            </form>
        </div>
        <div>
            <div class="text-center text-white">
                &copy 2015 МХЕГ
            </div>
        </div>
    </div>
</div>


<script src="{{ URL::asset('shared/js/vendor.js') }}"></script>
<script src="{{ URL::asset('shared/js/app.js') }} "></script>
@if(!Config::get('app.debug'))
    <script src="http://localhost:3000/js/app.js"></script>
@else
    <script src="{{ URL::asset('assets/auth/app.js') }}"></script>
@endif

@yield('script')
</body>
</html>

