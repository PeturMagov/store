<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row"  style="margin-top: 50px">
            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('products') }}">Products</a>
                    </li>
                </ul>
            </div>
	        <div class="col-lg-8">
	            @yield('content')
	        </div>
    	</div>
    </div>     
</body>
</html>
