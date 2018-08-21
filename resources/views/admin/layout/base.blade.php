<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Exporm') }}</title>

    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    
    <!-- Include /exporm in the file path for favicons in liver server -->
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cs-skin-elastic.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/scss/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/scss/style.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand hidden" href="{{ url('/') }}"></a>
            </div>

         <!--sidenav -->
         @include('admin.layout.partials.sidenav')
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!--header-->
         @include('admin.layout.partials.header')
    <div class="container">
         @if (Session::has('message'))
          <div class="alert alert-info" role="alert">
             <strong>{{ Session::get('message') }}!</strong> 
           </div>  
         @endif
           
        <div class="row">
            @yield('content')
        </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
</body>
</html>
