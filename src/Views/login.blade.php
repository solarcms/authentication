<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Financial software</title>
    <meta name="description" content="Financial soft"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ URL::asset('shared/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('shared/css/app.css') }}">

    @if(Config::get('app.debug'))
        <link rel="stylesheet" href="http://localhost:3000/css/app.css">
    @else
        <link rel="stylesheet" href="{{ URL::asset('assets/auth/css/app.css') }}">
    @endif
    @yield('style')
</head>
<body>
<div class="layer"></div>

<div class="app auth" id="app">

    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar m-b-md m-t-lg">
            <div class="pull-center">
                <a class="navbar-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                        <path d="M 4 4 L 44 4 L 44 44 Z" fill="#3F51B5"/>
                        <path d="M 4 4 L 34 4 L 24 24 Z" fill="rgba(0,0,0,0.15)"/>
                        <path d="M 4 4 L 24 4 L 4  44 Z" fill="#2196F3"/>
                    </svg>
                    <span class="hidden-folded inline text-white">Solar CMS</span>
                </a>
            </div>
        </div>

        <div class="p-a-md box-color r box-shadow-z1 text-color">
            <form name="form" action="{{ URL::route('Solar.Auth::login.post') }}" method="post">
                {{ csrf_field() }}
                <div class="md-form-group clearfix">
                    <div class="col-sm-6">
                        <label>
                            Огноо
                        </label>
                        <input type="number"
                               class="editable-has-buttons editable-input form-control form-control-sm"
                               min="2006" max="2016" value="2015">
                    </div>
                    <div class="col-sm-6">
                        <label for="language">
                            Хэл
                        </label>
                        <select id="language" class="form-control form-control-sm">
                            <option value="mn">Монгол</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                </div>

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
                &copy 2015 CTSystem
            </div>
        </div>
    </div>
</div>


<script src="{{ URL::asset('shared/js/vendor.js') }}"></script>
<script src="{{ URL::asset('shared/js/app.js') }} "></script>
@if(Config::get('app.debug'))
    <script src="http://localhost:3000/js/app.js"></script>
@else
    <script src="{{ URL::asset('assets/auth/app.js') }}"></script>
@endif

@yield('script')
</body>
</html>

