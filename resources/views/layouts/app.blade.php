<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>wakeb_task</title>

    <!-- Styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css') }}" />
    <link href="{{ asset('font/backend_font/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" /> -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/Dashboard') }}">
                            wakeb_task
                    </a>
                </div
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/backend_js/matrix.login.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script>
    <!-- <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/backend_js/select2.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/matrix.js') }}"></script>
    <script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
</body>
</html>
