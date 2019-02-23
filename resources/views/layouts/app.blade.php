<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />

        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
    </head>
    <body>
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </body>
    @yield('javascript')
</html>